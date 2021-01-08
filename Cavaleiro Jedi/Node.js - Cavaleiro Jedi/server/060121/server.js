var express = require('express');
var app = express();

app.get('/',function(req,res){
    res.send("<html><body>Hello World! Página padrão</body></html>")
})
app.get('/backend',function(req,res){
    res.send("<html><body>Vamos Aprender NodeJS?</body></html>")
})
app.get('/frontend',function(req,res){
    res.send("<html><body>Vamos Aprender ReactJS?</body></html>")
})

app.listen(3000, ()=>{
    console.log("Servidor rodando com express!")
})