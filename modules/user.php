<?php
// Create a connection
$conn = mysqli_connect("localhost", "root", "", "dnc");

if($conn) {
	echo "success";
}
else {
	die("Error". mysqli_connect_error());
}
user{

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username=$_POST["UserName"];
		$firstname=$_POST["FirstName"];
		$lastname=$_POST["LastName"];
		$email=$_POST["email"];
		$password=$_POST["password"];
	}
}
?>
