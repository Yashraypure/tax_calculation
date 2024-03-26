<?php
//error_reporting(0);
     $servername = "localhost";
     $username = "root";
     $password = "ayush";
     $dbname = "incometax";

     $con =new mysqli($servername,$username,$password,$dbname);

     if($con->connect_error)
     {
      echo "not Ok";
     }
     else
     {
      echo " ok";
     }
?>