<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "simplesblog";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);

    if(!$conn) {
        echo "Erro na conexão ".mysqli_connect_error();
    }
?>