<?php
// logout for admin
if ($_POST['Logout']) {
  	session_start();

  	session_unset();


  }  

header("Location:admin_login.php");
?>