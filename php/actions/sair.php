<?php
    session_start();

    $_SESSION['id'] = "";
    $_SESSION['email'] = "";
    $_SESSION['nome'] = "";

    header("Location: ../../index.php");
?>