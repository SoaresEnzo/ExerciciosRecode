module.exports = (app) => {

    app.get('/backend', (req, res) => {

        var connection = app.config.database();

        var query = app.models.conteudoModels;

        query.getConteudoBack(connection,(error,results,fields)=>{
            // console.log(error,results)
            res.render('paginas/backend',{dados:results})
        })


    })
}