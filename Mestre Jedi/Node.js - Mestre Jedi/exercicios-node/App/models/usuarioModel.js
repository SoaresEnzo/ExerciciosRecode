module.exports = ()=>{
    this.getUsuarios = (connection, callback)=>{
        connection.query("SELECT * FROM usuario",callback)
    }
    this.getUsuarioId = (id, connection, callback)=>{
        connection.query("SELECT * FROM usuario WHERE id ="+id.id,callback)
    }
    this.getUsuarioEmail = (email, connection, callback)=>{
        connection.query("SELECT * FROM usuario WHERE email ='"+email.email+"'",callback)
    }
    this.setUsuario = (usuario, connection, callback)=>{
        connection.query("INSERT INTO usuario SET ?",usuario)
    }

    return this;
}