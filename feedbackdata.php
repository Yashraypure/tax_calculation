<?php include("conn.php"); ?>

<?php
error_reporting(0);
  if($_POST['submit'])
  {
    $name = $_POST['name'];
    $panno = $_POST['panno'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $insert = "INSERT into feedback(name,panno,email,contact,address,message) values('$name','$panno','$email','$contact','$address','$message')";

    

    $data = mysqli_query($con,$insert);

    if ($data) {
      echo "done";
    } else {
      echo "not";
    }
    header("Location:ghomepage.html");
  }

?>