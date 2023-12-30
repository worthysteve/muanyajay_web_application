<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php

    $query = "SELECT * FROM bookings";
    $app = new App;
    $app->validateSessionAdminInside();

    $bookings = $app->selectAll($query);

?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date Booked</th>
                    <th scope="col">Number of People</th>
                    <th scope="col">Special Request</th>
                    <th scope="col">Date of Transaction</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update Status</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($bookings as $booking): ?>
                  <tr>
                    <!-- <th scope="row"><?php echo $booking->id; ?></th> -->
                    <td><?php echo $booking->name; ?></td>
                    <td><?php echo $booking->email; ?></td>
                    <td><?php echo $booking->booking_date; ?></td>
                    <td><?php echo $booking->num_people; ?></td>
                    <td><?php echo $booking->special_request; ?></td>
                    <td><?php echo $booking->date_created; ?></td>
                    <td><?php echo $booking->status; ?></td>
                     <td><a href="status.php?id=<?php echo $booking->id; ?>" class="btn btn-primary  text-center ">Update Status</a></td>
                     <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
                  <tr>
                    <?php endforeach; ?>
                   
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php require "../layouts/footer.php"; ?>