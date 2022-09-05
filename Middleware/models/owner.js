var mongoose = require('mongoose');

var OwnerSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true
    },
    email: {
        type: String,
        required: true,
        unique: true
    },
    password: {
        type: String,
        required: true
    },
    domain: {
        type: String,
        required: true
    },
    token: {
        type: String,
        required: true,
        unique: true
    }
});

var Owner = mongoose.model('owner', OwnerSchema);

module.exports = Owner;