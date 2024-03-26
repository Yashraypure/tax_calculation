<?php include("conn.php"); ?>

<?php 

$id =  $_GET['id'];
echo $_GET['first_name'];
echo $_GET['middle_name'];
echo $_GET['last_name'];
echo $_GET['gender'];
echo $_GET['mobile_number'];
echo $_GET['pancard_number'];
echo $_GET['email'];
echo $_GET['date_of_birth'];
echo $_GET['annual_income'];
echo $_GET['fixed_income'];
echo $_GET['occupation'];
echo $_GET['aadharcard_number'];
echo $_GET['address'];
echo $_GET['district'];
echo $_GET['state'];
echo $_GET['city'];
echo $_GET['zip'];
echo $_GET['nationality'];
echo $_GET['other_income'];

$query = "select * from form where id='$id'";

$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"type="text/css" href="D:\DBMSproject\asscet\css\style2.css">
    <title> INCOME TAX FORM </title>

	<style>
		nav{
			  flex: 1;
			  text-align: left;
			  background-color: 00ffffff(135, 250, 150, 0.275);
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
			  font-size: 20px;
			  color: black;
			  font-family: sans-serif;
			}
		 button{
			padding: 15px 25px;
			font-size: 20px;
			text-align: centre;
			cursor: pointer;
			outline: none;
			color: black;
			background-color: transparent;
			}
			button:active{
			background-color: grey;
			}
		</style>
	

</head>
	
	
<body> 
		<div class="topbar">
			  <div align="right">
				<div class="row">
				  <div class="col-sm-8 text-sm">
					<div class="site-info">
					  <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> teamsitu@gmail.com</a>
                        <a target="_blank" href="https://www.instagram.com/">
                            <img src="instagram.png"  height="30" width="30"></a>
                        <a target="_blank" href="https://www.facebook.com/">
                            <img src="fb.png"  height="30" width="30"></a>
                        <a target="_blank" href="https://www.twitter.com/">
                            <img src= "twitter.png"   height="30" width="30"></a>
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
				<li><button class="button" ><a href="ghomepage.html">Home</a></button></li>
				<li><button class="button"><a href="intro.html">Introduction</a></button></li>
				<li><button class="button"><a href="terms.html">Tax terms</a> </button></li>
				<li><button class=" button"><a href="taxrates.html">Tax rates</a></button></li>
				<li><button class="button"><a href="deduction.html">Tax deduction</a></button></li>
				<li><button class="button"><a href="register.php"> Login/Register </a></button></li>
				  
		
		  </nav>
		 
</body>


<body  class="g">
<div> 
	<style>
		.g{
			background-image:url("https://www.youngmoorelaw.com/wp-content/uploads/2018/12/TAX-Background-short.jpg");
			background-size:cover;
			height="1326";
			width="500";
			}
	</style>
   <form action="calculater.html" method="post">


	<table align="center" class="container1" > 
	
		 
		
		<tr> 
			
			<h2 class="th">UPDATE PERSONAL DETAILS  </h2>
			<td>
			<label>
			Salutation
			<br />
			<select name="salutation">
				<option>--None--</option>
				<option value="Mr.">Mr.</option>
				<option value="Ms.">Ms.</option>
				<option value="Mrs.">Mrs.</option>
			</select>
			</label>
		</td>
		</tr>
	
	
		
	
	 
		<tr>
			<label>
				<td> First name:</td>
				<td><input type="text" name="firstName" value="<?php echo $result['first_name']; ?>" /></td>
			</label> 
			
	
		 
		</tr>
	   <tr>
		
			<label>
				<td>Middle name:</td>
				<td><input type="text" name="middleName" value="<?php echo $result['middle_name']; ?>" /></td>
			</label>
		
	   </tr>
		
	
		<tr>
			<label>
				<td>Last name: </td>
				<td><input type="text" name="lastName" value="<?php echo $result['last_name']; ?>" /></td>
			</label>
			
		</tr>
	
	
		
	
		<tr>
			<td>
				Gender :
			</td>
			<td>
			<label><input type="radio" name="gender" value="male" /> Male</label>
			<label><input type="radio" name="gender" value="female" /> Female</label>
			<label><input type="radio" name="gender" value="others " /> others</label>
			</td>
			
		</tr>
	
	
		<tr>
			
				<label>
					<td>Mobile no :</td>
					<td><input type="number" name="mobileNo" value="<?php echo $result['mobile_number']; ?>" /></td>
				</label>
			
			
		</tr>
	
		<tr>
			<label>
				<td>Email:</td>
				<td><input type="email" name="email" value="<?php echo $result['email']; ?>" /></td>
			</label>
		</tr>
	
		
	
	
		<tr>
			<label>
				<td> PAN CARD NO:</td>
				<td><input type="text" name="pancard" value="<?php echo $result['pancard_number']; ?>" required></td>
			</label>
		</tr>
	    
       
		<tr>
			<label>
				<td> ADHARCARD NO:</td>
				<td><input type="text" name="aadharcard"  value="<?php echo $result['aadharcard_number']; ?>" required></td>
			</label>
		</tr>


		<tr>
			<label>
				<td>Date of Birth:</td>
				<td><input type="date" name="dob" value="<?php echo $result['date_of_birth']; ?>" required></td>
			</label>
		</tr>
	
	<tr>
		<label>
			<td>select your occupation:</td>
			<td>
	   <select name="occupation" id="occupation">
		<option value="occupaion" selected> none</option>
		<option value="goverment sector"
		<?php
		if($result['occupation'] == 'goverment sector')
		{
			echo "selected";
		} ?>
		> goverment sector</option>
		<option value="private bussness"
		<?php
		if($result['occupation'] == 'private bussness')
		{
			echo "selected";
		} ?>
		> private bussness</option>
		<option value="Private job"
		<?php
		if($result['occupation'] == 'Private job')
		{
			echo "selected";
		} ?>
		> private job </option>
		<option value="others"
<?php
		if($result['occupation'] == 'other')
		{
			echo "selected";
		} ?>
		> Others</option>
		</select>
			</td>
		</label>
	</tr>
		  <tr>
			<label>
				<td>Address : </td>
			<br />
			<td> <textarea name="address" cols="30" rows="3">
				<?php echo $result['address']; ?>
			</textarea> </td>
			</label>
		  </tr>
	
			<tr>
	
				<td>District: </td> <td> <input type="text" name=" district" value="<?php echo $result['district']; ?>"> </td>
				
				<td>State: </td> <td><input type="text" name=" state" value="<?php echo $result['state']; ?>"> </td>
				
	
				<td>City:  </td> <td> <input type="text"name="city" value="<?php echo $result['city']; ?>"> </td>
				
				
			</tr>
	
			 
			
	   <tr>
		<td>Zip:   </td> <td> <input type="number " name=" zip" value="<?php echo $result['zip']; ?>"> </td>
	
		<td>
		 Select your Nationality:: 
		</td>
		<td>
		<select name = "nation">
			<option value = "India" selected
			<?php
		if($result['nationality'] == 'India')
		{
			echo "selected";
		} ?>
		>INDIA</option>

			<option value = "other"
			<?php
		if($result['nationality'] == 'other')
		{
			echo "selected";
		} ?>
			>Others</option>
		 </select>
		</td>
	
		</tr>
	
		 <label>
			
			<td>ANNUAL INCOME: </td> <td> <input type="number" name="annualincome" required value="<?php echo $result['annual_income']; ?>"> </td>
			
			<td>FIXED INCOME:  </td> <td> <input type="number" name="fixedincome" required value="<?php echo $result['fixed_income']; ?>"> </td>
			
			<td>OTHER SOURCE OF INCOME:</td> <td> <input type="number" name="otherincome" value="<?php echo $result['other_income']; ?>"> </td>
			 
		 </label>

		
		</tr>
	
	   <tr >
		<td >
			<input type="submit" class="bu" name="submit">
		</td>
	
		</tr>
	
	
	
	</table>
	</form>
</div>
	
</body>
</html>


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
    
  }


?>