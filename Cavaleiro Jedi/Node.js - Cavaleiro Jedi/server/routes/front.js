module.exports = (app) => {

    app.get('/frontend', (req, res) => {

        var connection = app.config.database();

        var query = app.models.conteudoModels;

        query.getConteudoFront(connection,(error,results,fields)=>{
            // console.log(error,results)
            res.render('paginas/frontend',{dados:results})
        })


    })
}