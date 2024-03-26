<?php include("conn.php"); ?>

<?php
//error_reporting(1);
  if($_POST['submit'])
  {
   // $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pwd    = $_POST['pwd'];
   // $conpwd = $_POST['conpwd'];

    $s = "select * from register where email = '$email' && password = '$pwd'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
      header("Location:form.php");
    } else {
      echo "<script>alert('Incorrect Password');</script>";
      //header("Location:register.php");
    }
    

  }

  

?>