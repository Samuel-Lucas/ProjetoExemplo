<!--
        Tela de Login
        cadastro administradores (Autores)
        cadastro Usuario/Serviços/Produtos (Posts)
        Listagem Usuario/Serviços/Produtos (Listar Postagens)
-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title>Simples Blog - Login</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-4 mx-auto pt-4 container-login">
                <h3 class="mb-4">Login</h3>
                    <form action="php/actions/login.php" method="post">
                        <div class="form-group">
                            <label class="label-form" for="email">Email:</label>  
                            <input class="form-control" type="text" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="senha">Senha:</label>  
                            <input class="form-control" type="password" name="senha" id="senha">
                        </div>
                        
                        <button type="submit" name="logar" class="btn btn-primary mb-4">Entrar</button>
                        <a href="php/cadastro_autor.php" name="logar" class="btn btn-success mb-4">Cadastrar</a>
                    </form>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>