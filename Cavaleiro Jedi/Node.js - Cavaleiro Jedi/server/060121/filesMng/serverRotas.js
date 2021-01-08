var http = require('http')
var port = 3000
var fs = require('fs')
var server = http.createServer((req, res) => {
    var url = req.url
    switch (url) {
        case '/artigos':
            fs.readFile(__dirname + '/artigos.html', (error, html) => {
                res.end(html)
            })
            break;
        case '/contatos':
            fs.readFile(__dirname + '/contatos.html', (error, html) => {
                res.end(html)
            })
            break;
        default:
            fs.readFile(__dirname + '/erro.html', (error, html) => {
                res.end(html)
            })
            break;
    }
})

server.listen(port, () => {
    console.log(`Rodando o servidor na porta ${port} e na pasta ${__dirname}`)
})