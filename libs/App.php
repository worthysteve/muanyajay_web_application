<?php

    class App {
      public $host = HOST;
      public $dbname = DBNAME;
      public $user = USER;
      public $password = PASSWORD;

      public $link;

      // create a constructor
      public  function __construct(){
        $this -> connect();
      }

      public function connect(){
        $this -> link = new PDO("mysql:host=".$this -> host.";dbname=".$this ->dbname."", $this -> user, $this -> password);

        // if($this->link){
        //   echo "db connection is working";
        //   }
      }

      // select all rows from database
      public function selectAll($query) {
        $rows = $this -> link -> query($query);
        $rows -> execute();

        $allRows = $rows -> fetchAll(PDO::FETCH_OBJ);

        if($allRows){
          return $allRows;
        } else {
          return false;
        }
      }


      // select one row from database
      public function selectOne($query) {
        $row = $this -> link -> query($query);
        $row -> execute();

        $oneRow = $row -> fetch(PDO::FETCH_OBJ);

        if($oneRow){
          return $oneRow;
        } else {
          return false;
        }
      }

      public function validateCart($q) {
      $row = $this->link->query($q);
      $row->execute();
      $count = $row->rowCount();
      return $count;
    }


      // insert into table
      public function insert($query, $arr, $path) {
        if($this -> validate($arr) == "empty"){
          echo "<script>alert('one or more inputs are empty')</script>";
        }else {
          $insert_record = $this->link->prepare($query);
          $insert_record->execute($arr);

          header("location: " .$path. "");
        }
      }

      //update query
      public function update($query, $arr, $path) {
        if($this -> validate($arr) == "empty"){
          echo "<script>alert('one or more inputs are empty')</script>";
        }else {
          $update_record = $this->link->prepare($query);
          $update_record -> execute($arr);

          header("location: " .$path. "");
        }
      }

      // delete query
      public function delete($query, $path) {
        
          $delete_record = $this->link->query($query);
          $delete_record -> execute();

           echo "<script>window.location.href='" .$path. "'</script>";
        
      }

      public function validate($arr) {
        if(in_array("", $arr)) {
          echo "empty";
        }
      }


      // register 
      public function register($query, $arr, $path) {
        if($this -> validate($arr) == "empty"){
          echo "<script>alert('one or more inputs are empty')</script>";
        }else {
        $register_user = $this->link->prepare($query);
        $register_user -> execute($arr);

          header("location: " .$path. "");
        }
      }

      //login
      public function login($query, $data, $path){
        //email validaion
        $login_user = $this->link->query($query);
        $login_user->execute();

        $fetch = $login_user->fetch(PDO::FETCH_ASSOC);

        if($login_user -> rowCount() > 0){
          if (password_verify($data['password'], $fetch['password'])){
            // start session variables

              $_SESSION['email'] = $fetch['email'];
              $_SESSION['username'] = $fetch['username'];
              $_SESSION['user_id'] = $fetch['id'];

              // header("location: ".APPURL."");
              header("location: ".$path."");
           }
        }
      }

      // starting session
      public function startingSession(){
        session_start();
      }
      
      // validating session
      public function validateSession(){
        if(isset($_SESSION['user_id'])){
          echo "<script>window.location.href='" . APPURL . "'</script>";
          
        }
      }

      // validating Admin session
      public function validateSessionAdmin(){
        if(isset($_SESSION['email'])){
          echo "<script>window.location.href='" .ADMINURL. "/index.php'</script>";
          
        }
      }

       // validating Admin session
      public function validateSessionAdminInside(){
        if(!isset($_SESSION['email'])){
          echo "<script>window.location.href='" .ADMINURL. "/admins/login-admins.php'</script>";
          
        }
      }
    }