module.exports = (app) => {

    app.get('/cadastro', (req, res) => {
        res.render('paginas/cadastro');
    });

    app.post('/salvardados',(req,res)=>{
        var conteudo = req.body;
        var connection = app.config.database();
        var conteudoModel = app.models.conteudoModels;

        conteudoModel.salvarConteudo(conteudo,connection,(error,results)=>{

        })

        conteudoModel.getConteudoIndex(connection,(error,results,fields)=>{
            console.log(error,results)
            res.render('home/index',{dados:results})
        })

    })
}