const mongoose = require('mongoose');

function connection() {
    mongoose.connect("mongodb://localhost/ecommerce",
        { useNewUrlParser: true, useUnifiedTopology: true })
        .then(() => {
            console.log("MongoDB conectado")
        })
        .catch((error) => {
            console.log(error)
        })
}

module.exports = connection();