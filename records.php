<?php include("conn.php"); ?>



<?php 

$query = "select * from form";

$data = mysqli_query($con, $query);

$total = mysqli_num_rows($data);


if ($total != 0)
	{  
		?>

		<table border="2" width="100%">
			<tr>
				<th>id</th>
				<th>first_name</th>
				<th>middle_name </th>
				<th>last_name</th>
				<th>gender</th>
				<th>mobile_number</th>
				<th>pancard_number</th>
				<th>email</th>
				<th>date_of_birth</th>
				<th>annual_income</th>
				<th>fixed_income</th>
				<th>occupation </th>
				<th>aadharcard_number</th>
				<th>address</th>
				<th>district</th>
				<th>state</th>
				<th>city</th>
				<th>zip</th>
				<th> nationality</th>
				<th>other_income</th>
				<th>operations</th>
		    </tr>
		


	<?php

	while ($result = mysqli_fetch_assoc($data)) {

		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['first_name']."</td>
				<td>".$result['middle_name']."</td>
				<td>".$result['last_name']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['mobile_number']."</td>
				<td>".$result['pancard_number']."</td>
				<td>".$result['email']."</td>
				<td>".$result['date_of_birth']."</td>
				<td>".$result['annual_income']."</td>
				<td>".$result['fixed_income']."</td>
				<td>".$result['occupation']." </td>
				<td>".$result['aadharcard_number']."</td>
				<td>".$result['address']."</td>
				<td>".$result['district']."</td>
				<td>".$result['state']."</td>
				<td>".$result['city']."</td>
				<td>".$result['zip']."</td>
				<td>".$result['nationality']."</td>
				<td>".$result['other_income']."</td>
				<td><a href='update_record.php?id=$result[id]'>  update </a></td>
		    </tr>
		    ";


		    // &first_name=$result[first_name] &middle_name=$result[middle_name] &last_name=$result[last_name] &gender=$result[gender] &mobile_number=$result[mobile_number] &pancard_number=$result[pancard_number] &email=$result[email] &date_of_birth=$result[date_of_birth] &annual_income=$result[annual_income] &fixed_income=$result[fixed_income] &occupation=$result[occupation] &aadharcard_number=$result[aadharcard_number] &address=$result[address] &district=$result[district] &state=$result[state] &city=$result[city] &zip=$result[zip] &nationality=$result[nationality] &other_income=$result[other_income]




		//echo $result['id']." ".$result['first_name']." ".$result['middle_name']." ".$result['last_name']." ".$result['gender']." ".$result['mobile_number']." ".$result['pancard_number']." ".$result['email']." ".$result['date_of_birth']." ".$result['annual_income']." ".$result['fixed_income']." ".$result['occupation']." ".$result['aadharcard_number']." ".$result['address']." ".$result['district']." ".$result['state']." ".$result['city']." ".$result['zip']." ".$result['nationality']." ".$result['other_income']."<br>";
	}
} else {
	// code...
}


?>
</table>