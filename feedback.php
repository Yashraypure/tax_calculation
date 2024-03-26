<?php
if($_POST['submit'])
{
	$email = $_POST['email'];
	$message = $_POST['message'];

$conn = new mysqli('127.0.0.1:3307', 'root', '', 'incometax');
if ($conn->connect_error) {
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into feedback values('$email', '$message')");
	$stmt->bind_param("ss", $email, $message);
	$stmt->execute();
	echo "Registered";
	$stmt->close();
	$conn->close();
}}

?>