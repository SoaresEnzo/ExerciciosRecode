var express = require('express');
var consign = require('consign');
var bodyparser = require('body-parser')

var app = express();
app.set('view engine','ejs');
// app.set('views','././server/views')

app.use(bodyparser.urlencoded({extended:true}))

consign()
.include('././routes')
.then('config/database.js')
.then('././models')
.into(app)

module.exports = app

//Apesar desta página se chamar server, a execução desse script é em app.js, na pasta raíz