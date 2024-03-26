<?php 
//For register page
include("conn.php");
?>

<?php
//error_reporting(1);
  if($_POST['submit'])
  {
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pwd    = $_POST['pwd'];
    $conpwd = $_POST['conpwd'];

    $s = "select * from register where email = '$email'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num != 0) {
      echo "email already exists";
    } else {
      $insert = "INSERT into register(name,email,password,confirm_password) values('$name','$email','$pwd','$conpwd')";

      $data = mysqli_query($con,$insert);

      if ($data) {
        echo "done";
    } else {
        echo "not";
    } 

    header("Location:login.php");
      
    }
    

  }

  

?>