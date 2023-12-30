<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php

    // het the orders from the database
    $query = "SELECT * FROM enquiries";
    $app = new App;
    $app->validateSessionAdminInside();

    $enquiries = $app->selectAll($query);

?>


          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Enquiries and Complaints</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date of Transaction</th>
                    <th scope="col">Status</th>
                    <th scope="col">Update Status</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($enquiries as $enquiry): ?>
                  <tr>
                    <th scope="row"><?php echo $enquiry->id; ?></th>
                    <td><?php echo $enquiry->name; ?></td>
                    <td><?php echo $enquiry->email; ?></td>
                    <td><?php echo $enquiry->subject; ?></td>
                    <td><?php echo $enquiry->message; ?></td>
                    <td><?php echo $enquiry->date_created; ?></td>
                    <td><?php echo $enquiry->status; ?></td>
                     <td><a href="status.php?id=<?php echo $enquiry->id; ?>" class="btn btn-primary  text-center ">Update Status</a></td>
                     <td><a href="delete-enquiries.php?id=<?php echo $enquiry->id; ?>" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
                  <?php endforeach; ?>
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

<?php require "../layouts/footer.php"; ?>