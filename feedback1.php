<?php include("conn.php"); ?>

<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
  <link rel="stylesheet" href="style2.css" /> 
  <title>Feedback</title> 
   
  <style>

    nav{
      flex: 1;
      text-align: left;
      
    }

    .navbar{
      display: flex;
      align-items: center;
      padding: none;
      padding-left: 50px;
      padding-right: 30ox;
      padding-top: none;
    }

    nav ul li{
      display: inline-block;
      margin-right: 70px;
    }

    a{
      text-decoration: none;
      font-size: 24px;
      color: black;
      font-family: sans-serif;
    }

  
.button { 
  background-color: transparent; 
  border: none; 
  color: white; 
  padding: 15px 32px; 
  text-align: center; 
  text-decoration: none; 
  display: inline-block; 
  font-size: 20px; 
  margin: 4px 2px; 
  transition-duration: 0.4s; 
  cursor: pointer; 
    } 
  
    .button:hover { 
  background-color: slateblue;
  color: white; 
} 

.container{
  border: 4px solid black;
  max-width: 500px;
  margin: auto;
  padding: 10px;
  background-color: 00ffffff;
  color: black;
  font-family: cursive;
}

.hr{
  font-size: 40;
  color: white;
}

.g{
  background-color: lightblue;
}

.img{
  padding-top: -10px;
}

.bg{
  background-image: url(https://www.youngmoorelaw.com/wp-content/uploads/2018/12/TAX-Background-short.jpg);
  background-size: cover;
}



</style> 
</head>

<body class="bg">

  <div class="topbar">
      <div align="right">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> teamsitu@gmail.com</a>
              <a target="_blank" href="https://www.instagram.com/">
              <img src="instagram.png" height="30" width="30"></a>
              <a target="_blank" href="https://www.facebook.com/">
              <img src="fb.png" height="30" width="30"></a>
              <a target="_blank" href="https://www.twitter.com/">
              <img src="twitter.png" height="30" width="30"></a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->

      </div> <!-- .container -->

    </div> <!-- .topbar --> 
 </div> 


   <img src="income1.png" class="img" height="100" width="350">
 



  <nav class="navbar">
   
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="">Introduction</a></li>
      <li><a href="#">Tax terms</a></li>
      <li><a href="taxrates.html">Tax rates</a></li>
      <li><a href="#">Tax deduction</a></li>
      <!-- <li><a href="#">Contact</a></li> -->
  </nav>
  <div>
  <form class="container" action="#" method="post"> 
    <table align="center">
  <h1 align="center">Feedback</h1> 
  <hr class="hr">
      <tr><td><h3>Full Name</h3></td>  
      <td><input type="text" placeholder="Enter full name" name="name" required></td> </tr>
        <tr><td><h3>Pan Card Number</h3> </td>
        <td><input type="text" placeholder="Enter Pancard Number"  name="panno" required></td></tr> 
         <tr><td> <h3>Email</h3> </td>
          <td><input type="email" placeholder="Enter your email" name="email" required> </td></tr>
          <tr><td> <h3>Contact Number</h3></td>
            <td><input type="Number" placeholder="Enter Contact Number" name="contact" required></td></tr> 
           <tr><td> <h3>Address</h3> </td>
           <td> <textarea rows="5" cols="20" placeholder="Enter Address" name="address" required></textarea> </td></tr>
           <tr><td> <h3>Message</h3> </td>
           <td> <textarea rows="5" cols="20" placeholder="Enter message" name="message" required></textarea> </td></tr>
         </table>
            <br><br>
             <table align="center">
           <tr><td> <input type="submit" class="button" name="submit" > </td></tr>
            </table>
              </form> 
            </div>
</body> 
 
</html>

<?php
error_reporting(1);
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
    
  }

?>