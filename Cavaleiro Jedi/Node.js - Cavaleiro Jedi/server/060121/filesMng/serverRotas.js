var http = require('http')
var port = 3000
var fs = require('fs')
var server = http.createServer((req, res) => {
    var url = req.url
    switch (url) {
        case '/':
            fs.readFile(__dirname + '/artigos.html', (error, html) => {
                res.end(html)
            })
            break;
        default:
            fs.readFile(__dirname + url + '.html', (error, html) => {
                if(error){
                    fs.readFile(__dirname + '/erro.html',(error, html) => {
                        res.end(html)
                    });
                    console.log(error.errno)
                } else {
                    res.end(html)
                }
            })
            break;
    }
})

server.listen(port, () => {
    console.log(`Rodando o servidor na porta ${port} e na pasta ${__dirname}`)
})