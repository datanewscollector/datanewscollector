<?php
	include '../db.php';
user{
	//signup
	// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	exit('Please complete the registration form');
}

//email validation
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}

//invalid characters validation
if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    exit('Username is not valid!');
}

//characters length check
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 8) {
	exit('Password must be between 8 and 20 characters long!');
}

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesnt exists, insert new account
if ($stmt = $con->prepare('INSERT INTO users (username, firstname, lastname, email, password) VALUES (?, ?, ?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('sss', $_POST['username'],$_POST['fistname'], $_POST['lastname'], $_POST['email'], $password);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 5 fields.
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 5 fields.
	echo 'Could not prepare statement!';
}

//create login function in php that get data from db

if(isset($_POST['login'])){

    // new data
    $user = $_POST['your name of email input'];
    $password = $_POST['password'];

    if($user == '') {
        $errmsg_arr[] = 'You must enter your Username';
        $errflag = true;
    }
    if($password == '') {
        $errmsg_arr[] = 'You must enter your Password';
        $errflag = true;
    }

    // query
    $result = $conn->prepare("SELECT * FROM login WHERE username= :u AND password= :p");
    $result->bindParam(':u', $user);
    $result->bindParam(':p', $password);
    $result->execute();
    $rows = $result->fetch(PDO::FETCH_NUM);
    if($rows > 0) {
        $_SESSION['username'] = $user;
        header("location: ./pages/home.php");
    }
    else{
        $errmsg_arr[] = 'Username and Password are not found';
        $errflag = true;
    }

}










	
}
?>
