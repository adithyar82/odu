<?php
   require_once("connect_db_remodeled.php");
   session_start();
   $id=$_GET['username'];
   $pass=$_GET['password'];
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
      $result = $conn->query($sql);
      // echo $sql;
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result->num_rows>0) {
        //  session_register("myusername");
        //  $_SESSION['login_user'] = $myusername;
        // alert('login successful');
         header("location: index.php?id=18");
      }else {
        alert('User Id and Password doesnot Match!!! Try Again');
        echo "<script>
        alert('User Id and Password doesnot Match!!! Try Again');
        window.location.href='index.php';
        </script>";
      }
   }
?>
