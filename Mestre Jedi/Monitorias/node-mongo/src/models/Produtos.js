const {Schema, model} = require('mongoose');

const ProdutoSchema = new Schema({
    nome: {
        type: String
    },
    preco: {
        type: Number
    },
    user_id: {
        type: Schema.Types.ObjectId,
        ref: "usuarios"
    },
    data_registro: {
        type: Date,
        default: new Date()
    }
})

const modelo = model("produtos", ProdutoSchema);

module.exports = modelo;