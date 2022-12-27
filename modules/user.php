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

	if(isset($_POST['m_login_signup_submit'])){
		$username=$_POST["UserName"];
		$firstname=$_POST["FirstName"];
		$lastname=$_POST["LastName"];
		$email=$_POST["email"];
		$password=$_POST["password"];
	}
}
?>
