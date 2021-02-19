const app = require("./src/config/server");
const connection = require("./src/config/connection");
const Produtos = require("./src/models/Produtos");

//SELECT
app.get("/", async (req, res)=>{
    let resultado = await Produtos.find();
    res.json(resultado)
})

//INSERT
app.post("/", async (req, res)=>{
    const { nome, preco, user_id } = req.body;

    let resultado = await Produtos.create({ nome, preco, user_id });

    res.json(resultado)
})

//UPDATE
app.put("/:id", async (req, res)=>{
    const { nome, preco } = req.body;
    const { id } = req.params;

    let resultado = await Produtos.updateOne({ _id:id }, {
        nome,preco
    });

    res.json(resultado)
})

//DELETE
app.delete("/:id", async (req, res)=>{
    const { id } = req.body;

    let resultado = await Produtos.deleteOne({ _id : id })
    res.json({
        message: "Deletado com sucesso!"
    })
})