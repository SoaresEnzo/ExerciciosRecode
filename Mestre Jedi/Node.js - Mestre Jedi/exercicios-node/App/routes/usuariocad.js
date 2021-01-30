const { check, validationResult } = require('express-validator');

module.exports = (app)=>{

    app.get('/usuariocad',(req,res)=>{
        res.render('paginas/usuariocad')
    });

    app.post('/usuario/salvar',[
        check("nome","Nome é obrigatório").exists(),
        check("usuario","Usuário é obrigatório").exists().isLength({min: 5, max: 15}),
        check("senha","A senha precisa ter no mínimo 5 dígitos e no máximo 15.").exists().isLength({min: 5, max: 15}),
        check("email","E-mail é obrigatório!").isEmail().normalizeEmail(),
    ], (req,res)=>{



        var usuario = req.body;
        var erros = validationResult(req);

        if(!erros.isEmpty()){
            res.render("paginas/usuariocad",{validacao: erros});
            console.log(erros);
            return;

        }



        var connection = app.config.database();
        var usuarioModel = app.models.usuarioModel;

        usuarioModel.setUsuario(usuario, connection, (error, results)=>{

        })

        usuarioModel.getUsuarios(connection,(error, results, fields)=>{
            console.log(error,results);
            res.render('paginas/usuarios',{dados: results})
        })
    })
}