<?php
// Create a connection
$conn = mysqli_connect("localhost", "root", "", "dnc");

if($conn) {
	echo "success";
}
else {
	die("Error". mysqli_connect_error());
}
?>