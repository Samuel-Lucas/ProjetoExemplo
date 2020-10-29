<?php
        session_start();

        if(isset($_SESSION['id']) && isset($_SESSION['nome']) && isset($_SESSION['email'])) {
            include_once "includes/header.php"; 
?>

<div class="container">
            <div class="row">
                <div class="col-8 mx-auto pt-4 container-login">
                <h3 class="mb-4">Cadastro de Posts</h3>
                    <form action="actions/cadastrar_posts.php" method="post">
                        <div class="form-group">
                            <label class="label-form" for="tiulo">Título:</label>  
                            <input class="form-control" type="text" name="titulo" id="titulo">
                        </div>

                        <div class="form-group">
                            <label class="label-form" for="conteudo">Conteúdo:</label>  
                            <textarea class="form-control" type="text" name="conteudo" id="conteudo"></textarea>
                        </div>
                        
                        <button type="submit" name="cadastrar" id="cadastrar-posts" class="btn btn-success mb-4">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

<?php   
            include_once "includes/footer.php"; 
        } else {

            header("Location: ../index.php");
        }

        
?>