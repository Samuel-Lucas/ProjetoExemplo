<?php

    session_start();

    require_once "db_connect.php";

    if (isset($_POST['email']) && isset($_POST['senha'])) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(strlen($email) > 0 && strlen($senha) > 0) {
            $sql = "select * from autores where email = '$email' and senha = '$senha' limit 1;";
            $result = $conn->query($sql);

            while($row = mysqli_fetch_assoc($result)) {
                if ($row['id']) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];

                    header("Location: ../painel.php");
                }
            }
        } else {
            
            header("Location: ../../index.php");
        }
    } 
?>