var mysql = require('mysql');
var connMySQL = ()=>{
    console.log('Conexão com o BD estabelecida!')
    return mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '',
        database: 'projeto_node'
    });
}

module.exports = ()=>{
    return connMySQL;
}