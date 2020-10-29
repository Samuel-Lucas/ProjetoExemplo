<?php

    require_once "db_connect.php";

    session_start();

    if(isset($_POST['cadastrar'])) {
        $titulo = $_POST['titulo'];
        $conteudo = $_POST['conteudo'];

        $id = $_SESSION['id'];

        $sql = "insert into posts values (null, '$titulo', '$conteudo', '$id')";

        mysqli_query($conn, $sql);

        header("Location: ../painel.php");
    }


?>