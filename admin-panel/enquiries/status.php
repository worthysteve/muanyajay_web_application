<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php

    // het the orders from the database
    $app = new App;
    $app->validateSessionAdminInside();

    if(isset($_GET['id'])) {

      $id = $_GET['id'];

      if(isset($_POST['submit'])) {

        $status = $_POST['status'];

        $query = "UPDATE enquiries SET status=:status WHERE id='$id'";

        $arr = [
          ":status" => $status
        ];

        $path = "show-enquiries.php";

        $app->update($query, $arr, $path);
      }

    }

?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Status</h5>
          <form method="POST" action="status.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <!-- Email input --> 
                <div class="form-outline mb-4 mt-4">

                  <select name="status" class="form-select  form-control" aria-label="Default select example">
                    <option selected>Update Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Confirmed">Confirmed</option>
                    <option value="Confirmed">Done</option>
                  </select>
                </div>

                <br>
          
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>

<?php require "../layouts/footer.php"; ?>