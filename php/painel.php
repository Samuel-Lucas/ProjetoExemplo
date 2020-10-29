<?php
        require_once "actions/db_connect.php";

        session_start();

        if(isset($_SESSION['id']) && isset($_SESSION['nome']) && isset($_SESSION['email'])) {
            include_once "includes/header.php";

            $id = $_SESSION['id'];
            
            $sql = "select * from posts where autor = $id";
            $result = $conn->query($sql);
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                <table class="table table-responsive table-striped table-hover">
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {

                    ?>
                        <tr>
                            <td>
                                <?php echo $row['id']?>                   
                            </td>

                            <td>
                                <?php echo $row['titulo']?>                   
                            </td>

                            <td>
                                <?php echo $row['conteudo']?>                   
                            </td>
                        </tr>


                    <?php
                        }
                    ?>
            </table>

                </div>
            </div>
        </div>
            
<?php  
            include_once "includes/footer.php"; 
        } else {

            header("Location: ../index.php");
        }

        
?>