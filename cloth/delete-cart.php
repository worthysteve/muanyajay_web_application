<?php require "../config/config.php";?>
<?php require "../libs/App.php";?>
<?php require "../includes/header.php";?>
<?php 

    if(!isset($_SERVER['HTTP_REFERER'])){
            // redirect users to index page
            header('location: http://localhost/muanyajays/index.php');
            exit;
        }
?>
<?php 


      $query = "DELETE FROM cart WHERE user_id='$_SESSION[user_id]'";
      $app = new App;

      $path = "cart.php";
      $app->delete($query, $path);
 
?>


