<?php 
//For form page
include("conn.php");
?>


<?php
//error_reporting(1);
  if($_POST['submit'])
  {
    $firstname   = $_POST['firstName'];
    $middlename   = $_POST['middleName'];
    $lastname   = $_POST['lastName'];
    $gender   = $_POST['gender'];
    $mobNo   = $_POST['mobileNo'];
    $email  = $_POST['email'];
    $pancard   = $_POST['pancard'];
    $aadharcard   = $_POST['aadharcard'];
    $dob   = $_POST['dob'];
    $occupation    = $_POST['occupation'];
    $address = $_POST['address'];
    $district   = $_POST['district'];
    $state   = $_POST['state'];
    $city   = $_POST['city'];
    $zip   = $_POST['zip'];
    $nation   = $_POST['nation'];
    $annualincome   = $_POST['annualincome'];
    $fixedincome   = $_POST['fixedincome'];
    $otherincome   = $_POST['otherincome'];

    $insert = "INSERT into form(first_name, middle_name, last_name, gender, mobile_number, pancard_number, email, date_of_birth, annual_income, fixed_income, occupation, aadharcard_number, address, district, state, city, zip, nationality, other_income) values('$firstname','$middlename','$lastname','$gender','$mobNo','$pancard','$email','$dob','$annualincome','$fixedincome','$occupation','$aadharcard','$address','$district','$state','$city','$zip','$nation','$otherincome')";

    

    $data = mysqli_query($con,$insert);


    if ($data) {
      echo "done";
    } else {
      echo "not";
    }

    header("Location:calculater.html");
    
  }


?>