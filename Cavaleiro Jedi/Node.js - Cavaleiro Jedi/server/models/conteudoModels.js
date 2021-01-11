module.exports = ()=>{
    this.getConteudoIndex = (connection, callback)=>{
        connection.query("SELECT * FROM conteudo WHERE categoria = 'Geral'",callback)
    }

    this.getConteudoFront = (connection, callback)=>{
        connection.query("SELECT * FROM conteudo WHERE categoria = 'Front-End'",callback)
    }

    this.getConteudoBack = (connection, callback)=>{
        connection.query("SELECT * FROM conteudo WHERE categoria = 'Back-End'",callback)
    }

    this.salvarConteudo = (conteudo, connection, callback)=>{
        connection.query('INSERT INTO conteudo SET ?',conteudo)
    }

    return this;
}