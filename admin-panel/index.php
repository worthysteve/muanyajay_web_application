<?php require "../config/config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "layouts/header.php"; ?>
<?php 
    
    $app = new App;
    $app->validateSessionAdminInside();

       // count nuber of clothes in the database
    $query = "SELECT COUNT(*) AS count_clothes FROM clothes";
    $app = new App;
    $count_clothes = $app -> selectOne($query);

        // count nuber of orders in the database
    $query = "SELECT COUNT(*) AS count_orders FROM orders";
    $app = new App;
    $count_orders= $app -> selectOne($query);

        // count nuber of clothes in the database
    $query = "SELECT COUNT(*) AS count_bookings FROM bookings";
    $app = new App;
    $count_bookings = $app -> selectOne($query);

        // count nuber of clothes in the database
    $query = "SELECT COUNT(*) AS count_admins FROM admins";
    $app = new App;
    $count_admins = $app -> selectOne($query);

        // count nuber of clothes in the database
    $query = "SELECT COUNT(*) AS count_enquiries FROM enquiries";
    $app = new App;
    $count_enquiries = $app -> selectOne($query);

?>     
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Clothes</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">number of clothes: <?php echo $count_clothes-> count_clothes; ?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              
              <p class="card-text">number of orders: <?php echo $count_orders-> count_orders; ?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bookings</h5>
              
              <p class="card-text">number of bookings: <?php echo $count_bookings-> count_bookings; ?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              
              <p class="card-text">number of admins: <?php echo $count_admins-> count_admins; ?></p>
              
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Complaints and Enquiries</h5>
              
              <p class="card-text">number of enquiries: <?php echo $count_enquiries-> count_enquiries; ?></p>
              
            </div>
          </div>
        </div>
      </div>


<?php require "layouts/footer.php"; ?>