var http = require('http')
var port = 3002

var server = http.createServer((req,res)=>{
    res.end(`<h1>Rodando na porta ${port}</h1>`)
})

server.listen(port,()=>{
    console.log(`Rodando o servidor na porta ${port}`)
})