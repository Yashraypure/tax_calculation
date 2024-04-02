<?php include("conn.php");  ?>

<?php  

$id = $_GET['id'];

$delete = "DELETE from form where id='$id'";

$data = mysqli_query($con,$delete);

if ($data) {
	echo "delete";
} else {
	echo "not delete";
}


?>