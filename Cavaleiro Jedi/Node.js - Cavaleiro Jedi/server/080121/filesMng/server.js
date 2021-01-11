var express = require('express');
var app = express();
var port = 3000;


app.get('/',(req,res)=>{
    res.sendFile(__dirname + '/artigos.html')
})
app.get('/artigos',(req,res)=>{
    res.sendFile(__dirname + '/artigos.html')
})
app.get('/contatos',(req,res)=>{
    res.sendFile(__dirname + '/contatos.html')
})
app.get('*',(req,res)=>{
    res.sendFile(__dirname + '/erro.html')
})

app.listen(port)