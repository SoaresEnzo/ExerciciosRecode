var app = require('./config/server')

var rotaHome = require('./routes/home')(app)
var rotaFront = require('./routes/front')(app)
var rotaBack = require('./routes/back')(app)

app.listen(3000,()=>{
    console.log('Server rodando com express, commonJS e EJS')
})