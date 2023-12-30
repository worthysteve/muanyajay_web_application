<?php require "config/config.php";?>
<?php require "libs/App.php";?>
<?php require "includes/header.php";?>
<?php

     if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $booking_date = $_POST['booking_date'];
            $num_people = $_POST['num_people'];
            $special_request = $_POST['special_request'];
            $status = "Pending";
            $user_id = $_SESSION['user_id'];


            if($booking_date > date("m/d/y h:i:sa")) {
               $query = "INSERT INTO bookings (name, email, booking_date, num_people, special_request, status, user_id) VALUES (:name, :email, :booking_date, :num_people, :special_request, :status, :user_id)";

                $arr = [
                ":name" => $name,
                ":email" => $email,
                ":booking_date" => $booking_date,
                ":num_people" => $num_people,
                ":special_request" => $special_request,
                ":status" => $status,
                ":user_id" => $user_id
                ];

                $path = "index.php";
                echo "<script>window.location.href='" .$path. "'</script>";

                $app->insert($query, $arr, $path);

            } else {
                echo "<script>alert('Invalid date, pick a date one day ahead')</script>";
                 echo "<script>window.location.href='" .APPURL."/index.php'</script>";
            }

        }


?>

<?php require "includes/footer.php"; ?>