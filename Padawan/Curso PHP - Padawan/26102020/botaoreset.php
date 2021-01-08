<!DOCTYPE html>
<html>
    <body>
        <h1>Botao de Reset</h1>
        <p>Clique no botão RESET para limpar o formulário</p>
        <form action="action_page.php">
            <label for="email">Digite seu e-mail:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="pin">Digite o PIN de validação:</label>
            <input type="text" id="pin" name="pin" maxlength="4"><br><br>  
            <input type="reset" value="Limpar Formulario">
            <input type="submit" value="Enviar Informacoes">
        </form>
    </body>
</html>