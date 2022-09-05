var express = require('express');
var router = express.Router();
var path = require('path');
var request = require('request');
var { spawn } = require('child_process');
var ownerModel = require('../models/owner');


var middleware = (req, res, next) => {
  let tokenString = req.headers.authorization;
  let token = tokenString.replace('Basic ', '');
  ownerModel.findOne({token: token}).exec(function(err, owner) {
    if (err) {
      res.status(401).json({
        error: 401002,
        message: 'Not Authorized'
      });
    } else {
      if (!owner) {
        res.status(401).json({
          error: 401002,
          message: 'Not Authorized'
        });
      } else {
        req.owner = owner;
        req.token = token;
        next();
      }
    }
  });
}

/* start speaker enrolment */
router.post('/enrolment', middleware, (req, res, next) => {
  let speakerId = req.body.speakerId;

  if (speakerId === undefined) {
    res.status(412).json({
      error: 412002,
      message: 'Missing speakerId parameter'
    });
  } else if (speakerId.trim() === "") {
    res.status(412).json({
      error: 412001,
      message: 'Missing speakerId value'
    });
  } else if (!req.files || Object.keys(req.files).length === 0 || req.files.voiceFile.mimetype !== 'audio/wav') {
    res.status(412).json({
      error: 412007,
      message: "Invalide file format upload attempt"
    })
  } else if (req.files.voiceFile.size < 512000) {
    req.status(412).json({
      error: 412003,
      message: "Insufficient files uploaded"
    })
  } else {
    let voicePath = path.join(__dirname, `../public/enrolment/${req.token}-${speakerId}.wav`);
    req.files.voiceFile.mv(voicePath, err => {
      if (err) return res.status(422).json({
        error: 422003,
        message: "Error creating model"
      });
      try {
        let process = spawn('python', [path.join(__dirname, '../s1.py'), 0, voicePath, speakerId]);
        process.stdout.on('data', data => {
          return request.post({
            url: req.owner.domain + '/external/enrolment',
            form: {
              name: speakerId
            }
          }, (err, response, body) => {
            if (err) {
              return res.status(422).json({
                error: 422003,
                message: "Error creating model"
              });
            } else {
              return res.status(200).json({
                message: "Model Created",
                speakerId: speakerId
              });
            }
          })
        });
      } catch (e) {
        return res.status(422).json({
          error: 422003,
          message: "Error creating model"
        });
      }
    });
  }
});
/* end speaker enrolment */

/* start speaker verification */
router.post('/verify', middleware, (req, res, next) => {
  let speakerId = req.body.speakerId;
  console.log(req.body)
  if (speakerId === undefined) {
    res.status(412).json({
      error: 412002,
      message: "Missing speakerId value"
    });
  } else if (speakerId.trim() === "") {
    res.status(412).json({
      error: 412001,
      message: "Missing speakerId parameter"
    });
  }  else if (!req.files || Object.keys(req.files).length === 0 || req.files.voiceFile.mimetype !== 'audio/wav') {
    res.status(412).json({
      error: 412007,
      message: "Invalide file format upload attempt"
    })
  } else if (req.files.voiceFile.size < 512000) {
    req.status(412).json({
      error: 412003,
      message: "Insufficient files uploaded"
    })
  } else {
    let voicePath = path.join(__dirname, `../public/verification/${token}-${speakerId}.wav`);
    req.files.voiceFile.mv(voicePath, err => {
      if (err) return res.status(422).json({
        error: 422001,
        message: "Error performing verification"
      });
      try {
        let process = spawn('python', [path.join(__dirname, '../s1.py'), 1, voicePath, speakerId]);
        process.stdout.on('data', data => {
          console.log(data.toString());
          return res.status(200).json({
            message: "Verification complete",
            score: 0.1,
            definition: ""
          });
        });
      } catch (e) {
        console.error(e.stack);
        return res.status(422).json({
          error: 422003,
          message: "Error Generating Score"
        });
      }
    })
  }
});
/* end speaker verification */

/* start view speaker profile */
router.get('/profile/:id', middleware, (req, res, next) => {
  let speakerId = req.params.id;
  if (speakerId === undefined) {
    res.status(412).json({
      error: 412002,
      message: "Missing speakerId value"
    });
  } else if (speakerId.trim() === "") {
    res.status(412).json({
      error: 412001,
      message: "Missing speakerId parameter"
    });
  } else {
    res.status(200).json({
      message: ""
    });
  }
});
/* end view speaker profile */

/* start speaker identification */ 
router.post('/identify', middleware, (req, res, next) => {
  let speakerIds = req.body.speakerIds;
  if (speakerIds === undefined) {
    res.status(412).json({
      error: 412014,
      message: "No speakerIds to verify against"
    })
  } else if (speakerIds.trim() === "" || speakerIds === []) {
    res.status(412).json({
      error: 412015
    })
  } else if (!req.files || Object.keys(req.files).length === 0 || req.files.voiceFile.mimetype !== 'audio/wav') {
    res.status(412).json({
      error: 412007,
      message: "Invalide file format upload attempt"
    })
  } else if (req.files.voiceFile.size < 512000) {
    req.status(412).json({
      error: 412003,
      message: "Insufficient files uploaded"
    });
  } else {
    let voicePath = path.join(__dirname, `../public/identification/${token}-${speakerId}.wav`);
    req.files.voiceFile.mv(voicePath, err => {
      if (err) return res.status(422).json({
        error: 422001,
        message: "Error performing identification"
      });
      try {
        let process = spawn('python', [path.join(__dirname, '../s1.py'), 3, voicePath, speakerId]);
        process.stdout.on('data', data => {
          console.log(data.toString());
          return res.status(200).json({
            speakerId: 1,
            score: 0.1,
          });
        });
      } catch (e) {
        // process.exit(1);
        console.error(e.stack);
        return res.status(422).json({
          error: 422003,
          message: "Error Generating Score"
        });
      }
    })
  }
});
/* end speaker identification */

/* start view eventlog */
router.get('/eventlog', middleware, (req, res, next) => {
  let startDate = req.body.startDate;
  let endDate = req.body.endDate;
  if (startDate === undefined) {
    res.status(412).json({
      error: 412010,
      message: "Missing start date log query paramter"
    });
  } else if (startDate.trim() === "") {
    res.status(412).json({
      error: 412008,
      message: "Missing start date log query value"
    });
  } else if (endDate === undefined) {
    res.status(412).json({
      error: 412012,
      message: "Missing end date log query parameter"
    });
  } else if (endDate.trim() === "") {
    res.status(412).json({
      error: 412011,
      message: "Missing end date log query value"
    });
  } else {

  }
});
/* end view eventlog */ 

/* start delete speaker */
router.delete('/profile/:id', middleware, (req, res, next) => {
  let speakerId = req.params.id;
  if (speakerId === undefined) {
    res.status(412).json({
      error: 412002,
      message: "Missing speakerId parameter"
    });
  } else if (speakerId.trim() === "") {
    res.status(412).json({  
      error: 412001,
      message: "Missing speakerId value"
    });
  } else {

  }
});
/* end delete speaker */ 
module.exports = router;
