<?php include("conn.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2> LOGIN </h2>
        <form action="#" method="post">
        
        <input type="email" class="i" placeholder="Your Email Id" name="email" required>
        <input type="password" class="i" placeholder="Password" name="pwd" required>

      
        <input type="submit" name="submit" value="submit" class="button">

</body>
</html>


<?php
//error_reporting(1);
  if($_POST['submit'])
  {
   // $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pwd    = $_POST['pwd'];
   // $conpwd = $_POST['conpwd'];

    $s = "select * from admin where email = '$email' && password = '$pwd'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
      header("Location:records.php");
    } else {
      echo "<script>alert('Incorrect Password');</script>";
      //header("Location:register.php");
    }
    

  }

  

?>