<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php

    $query = "SELECT * FROM clothes";
    $app = new App;
    $app->validateSessionAdminInside();

    $clothes = $app->selectAll($query);

?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Clothes</h5>
              <a  href="create-clothes.php" class="btn btn-primary mb-4 text-center float-right">Create Clothes</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($clothes as $clothe) : ?>
                  <tr>
                    <th scope="row"><?php echo $clothe->id; ?></th>
                    <td><?php echo $clothe->name; ?></td>
                    <td><img style="width: 50px; height: 50px" src="../../img/<?php echo $clothe->image; ?>"</td>
                    <td>$ <?php echo $clothe->price; ?></td>
                     <td><a href="delete-clothes.php?id=<?php echo $clothe->id; ?>" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php require "../layouts/footer.php"; ?>