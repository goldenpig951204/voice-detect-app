var express = require('express');
var router = express.Router();
var TokenGenerator = require('uuid-token-generator');
var ownerModel = require('../models/owner');
var tokgen = new TokenGenerator(256, TokenGenerator.BASE62);

router.post('/register', async (req, res) => {
    try {
        let owner = await ownerModel.create({
            name: req.body.name,
            email: req.body.email,
            password: req.body.password,
            domain: req.body.domain,
            token: tokgen.generate()
        });
        console.log('owner----->', owner);
        res.json({token: owner.token});
    } catch (err) {
        console.log('error----->', err);
        res.json({error: err.errmsg});
    }
});

module.exports = router;