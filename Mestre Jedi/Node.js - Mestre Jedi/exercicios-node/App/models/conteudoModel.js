module.exports = ()=>{
    this.getConteudo = (connection, callback)=>{
        connection.query("SELECT * FROM conteudo",callback)
    }
    this.getConteudoFront = (connection, callback)=>{
        connection.query("SELECT * FROM conteudo WHERE categoria = 'frontend'",callback)
    }
    this.getConteudoBack = (connection, callback)=>{
        connection.query("SELECT * FROM conteudo WHERE categoria = 'backend'",callback)
    }
    this.salvarConteudo = (conteudo, connection, callback)=>{
        connection.query("INSERT INTO conteudo SET ?",conteudo)
    }

    return this;
}