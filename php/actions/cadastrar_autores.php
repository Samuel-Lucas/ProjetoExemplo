<?php
    require_once "db_connect.php";

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "insert into autores values (null, '$nome', '$email', '$senha')";

        mysqli_query($conn, $sql);

        header("Location: ../../index.php");
    }



    


?>