<?php
        session_start();

        if(isset($_SESSION['id']) && isset($_SESSION['nome']) && isset($_SESSION['email'])) {
            include_once "includes/header.php"; 
?>

           
    



<?php   
            include_once "includes/footer.php"; 
        } else {

            header("Location: ../index.php");
        }

        
?>