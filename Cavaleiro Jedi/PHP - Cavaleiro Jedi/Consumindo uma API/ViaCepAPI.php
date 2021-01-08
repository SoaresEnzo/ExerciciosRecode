<!--
Formulário recebendo somente CEP via GET;
Após o submit, consultar na VIACEP (API) os dados;
Converter para Array; 
retirar o IBGE e siafi e gia;
e imprimir em JSON e em Array;
-->
<?php
if (isset($_GET['cep'])) {
    if (strlen($_GET['cep']) != 8) {
        $_GET['cep'] = '00000000';
    };
    $cep = $_GET['cep'];
    $req = file_get_contents("https://viacep.com.br/ws/$cep/json/");

    $return = json_decode($req, true);
    if (isset($return['erro'])) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Este CEP não existe</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>';
    } else {
        $cep = $return['cep'];
        $rua = $return['logradouro'];
        $bairro = $return['bairro'];
        $cidade = $return['localidade'];
        $estado = $return['uf'];
        $ddd = $return['ddd'];
        unset($return['gia']);
        unset($return['ibge']);
        unset($return['siafi']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">


        <h1></h1>
        <Form action="#" method="GET" class="was-validated">
            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" name="cep" id="" aria-describedby="helpId" placeholder="Insira seu CEP (apenas números)" maxlength="8" required value="<?php if (isset($cep)) {
                                                                                                                                                                                    echo $cep;
                                                                                                                                                                                } ?>">
                <div class="invalid-feedback">
                    Digite algo no cep
                </div>
            </div>
            <div class="form-group">
                <label for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" name="logradouro" id="" aria-describedby="helpId" placeholder="" disabled value="<?php if (isset($rua)) {
                                                                                                                                                echo $rua;
                                                                                                                                            } ?>">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" name="bairro" id="" aria-describedby="helpId" placeholder="" disabled value="<?php if (isset($bairro)) {
                                                                                                                                            echo $bairro;
                                                                                                                                        } ?>">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="" aria-describedby="helpId" placeholder="" disabled value="<?php if (isset($cidade)) {
                                                                                                                                            echo $cidade;
                                                                                                                                        } ?>">
            </div>
            <div class="form-group">
                <label for="uf">Estado:</label>
                <input type="text" class="form-control" name="uf" id="" aria-describedby="helpId" placeholder="" disabled value="<?php if (isset($estado)) {
                                                                                                                                        echo $estado;
                                                                                                                                    } ?>">
            </div>
            <div class="form-group">
                <label for="ddd">DDD:</label>
                <input type="text" class="form-control" name="ddd" id="" aria-describedby="helpId" placeholder="" disabled value="<?php if (isset($ddd)) {
                                                                                                                                        echo $ddd;
                                                                                                                                    } ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>

        </Form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>