const express = require('express');

const app = express();
app.use(express.json())

const port = 5500;
app.listen(port,()=>{
    console.log(`Server rodando em http://localhost:${port}`)
});

module.exports = app;