// const express = require('express');
// const mysql = require('mysql');
// const server = express();

// //middleware
// server.use(express.json());

// const connection = mysql.createConnection({
//     host: "localhost",
//     user: "root",
//     password: "",
//     database: "blog"
// })

// server.get("/postagens", (req,res)=>{
//     const query = "SELECT * FROM postagens";
//     connection.query(query,(error, result)=>{
//         if(error){
//             res.send(error)
//         } else {
//             res.json(result)
//         }
//     })
// })


// server.post("/postagens", (req,res)=>{
//     const { titulo, descricao } = req.body;

//     connection.query(`INSERT INTO postagens(titulo, descricao) VALUES ('${titulo}', '${descricao}')`, (error, result)=>{
//         if(error){
//             res.send(error)
//         } else {
//             res.status(201).send("Postagem cadastrada")
//         }
//     })
    
// })

// server.listen(5000);

// Monitoria 00:57:00