var express = require('express');
var path = require('path');
var bodyParser = require('body-parser');
var logger = require('morgan');
var cors = require('cors');
var dotenv = require('dotenv');
var fileUpload = require('express-fileupload');

var voiceRouter = require('./routes/voice');
var ownerRouter = require('./routes/owner');

var app = express();
dotenv.config();
app.use(logger('dev'));
app.use(cors())
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({
    extended: true
}));
app.use(express.static(path.join(__dirname, 'public')));
app.use(fileUpload());

app.use('/voice', voiceRouter);
app.use('/owner', ownerRouter);

module.exports = app;
