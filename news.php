<?php require "config/config.php";?>
<?php require "libs/App.php";?>
<?php require "includes/header.php"; ?>

 <?php
 $app = new App;
     if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $status = "Pending";
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

                
               $query = "INSERT INTO newsletters (email, status, user_id) VALUES (:email, :status, :user_id)";

                $arr = [
                ":email" => $email,
                ":status" => $status,
                ":user_id" => $user_id
                ];

                $path = "index.php";
                echo "<script>window.location.href='" .$path. "'</script>";

                $app->insert($query, $arr, $path);

        }


?>
 
<?php require "includes/footer.php"; ?>