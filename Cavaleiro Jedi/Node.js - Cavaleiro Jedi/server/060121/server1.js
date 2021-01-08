var http = require('http')
var port = 3000

var server = http.createServer((req, res) => {
    var url = req.url
    if (url == '/getPorta') {
        res.end(`<h1>Rodando na porta ${port}, código ${res.statusCode}</h1>`)
    } else {
        res.end(`<h1>Tchau</h1>`)
    }
})

server.listen(port, () => {
    console.log(`Rodando o servidor na porta ${port}`)
})