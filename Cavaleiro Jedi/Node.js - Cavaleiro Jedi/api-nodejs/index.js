import express from "express";
const server = express();
server.use(express.json())

//query param

// server.get("/usuarios", (req, res) => {
//     const valueParam = req.query.name;
//     res.send(`Bem vindo a rota ${valueParam}`)
// })

// //route param

// server.get("/usuarios/:id", (req, res) => {
//     const {id} = req.params
//     res.send(`O id é ${id}`)
// })

// //request body

// server.get("/usuarios/:id", (req, res) => {
//     const {id} = req.params
//     res.send(`O id é ${id}`)
// })


// Exemplo sem o conceito de REST
// https://localhost:3333/usuarios == GET
// https://localhost:3333/usuarios/salvar == POST
// https://localhost:3333/usuarios/atualizar == POST
// https://localhost:3333/usuarios/remover == POST
// Exemplo, utilizando o conceito de REST// https:
//localhost:3333/usuarios == GET
// https://localhost:3333/usuarios == POST
// https://localhost:3333/usuarios/:id == PUT
// https://localhost:3333/usuarios/:id == DELETE

let usuarios = ["Guilherme","José","Samuel","Elizeu"]

//SELECT * FROM usuarios;
server.get("/usuarios/", (req, res) => {
    res.json(usuarios)
})

//SELECT * FROM usuarios WHERE id = :index

server.get("/usuarios/:index", (req, res) => {
    res.json(usuarios[req.params.index])
})

//INSERT INTO usuarios (name) values (":name")
server.post("/usuarios", (req,res)=>{
    const { name } = req.body ;
    usuarios.push(name);
    res.json({"Mensagem":"Usuário cadastrado"});
})

server.put("/usuarios/:index", (req,res)=>{
    const { name } = req.body ;
    const index = req.params.index;

    usuarios[index] = name;
    res.json({"Mensagem":"Usuário atualizado"});
})

server.delete("/usuarios/:index", (req,res)=>{
    const index = req.params.index;
    usuarios.splice(index,1);
    res.json({"Mensagem":"Usuário deletado"});
})


server.listen(3333)