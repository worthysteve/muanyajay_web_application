<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 

    if(!isset($_SERVER['HTTP_REFERER'])){
            // redirect users to index page
            echo "<script>window.location.href='" .ADMINURL. "'</script>";
            exit;
        }
?>
<?php 

    if(isset($_GET['id'])){
      $id = $_GET['id'];

        //delete clothe image from the folder
      $query = "SELECT * FROM clothes WHERE id='$id'";
      $one = $app->selectOne($query);
      unlink("clothes-images/" . $one->image);

      $query = "DELETE FROM clothes WHERE id='$id'";
      $app = new App;
      $path = "show-clothes.php";
      $app->delete($query, $path);

    } 
?>


<?php require "../includes/footer.php"; ?>