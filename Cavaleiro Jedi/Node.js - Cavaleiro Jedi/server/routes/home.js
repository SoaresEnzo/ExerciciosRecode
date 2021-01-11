module.exports = (app) => {

    app.get('/', (req, res) => {

        var connection = app.config.database();

        var query = app.models.conteudoModels;

        query.getConteudoIndex(connection,(error,results,fields)=>{
            // console.log(error,results)
            res.render('home/index',{dados:results})
        })


    })
}