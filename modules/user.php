<?php
  include 'constants.php';
class user{

	private $conn;

  private function _construct() {
    // Connect to the database
    $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  public function signup($username, $firstname, $lastname, $email, $password) {
    // Validate the name, email, and password
    if (empty($username) || empty($firstname) || empty($lastname) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8) {
      return false;
    }

    $result = $this->conn->query("SELECT * FROM users WHERE username='$username'");
  if ($result->num_rows > 0) {
    // The username is already taken, return false
    return false;
  }

    // Hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $result = $this->conn->query("INSERT INTO users (username, firstname, lastname, email, password) VALUES ('$username', '$firstname', '$lastname', '$email', '$password')");
    if ($result) {
      // The user was added successfully, return true
      return true;
    } else {
      // There was an error adding the user, return false
      return false;
    }
  }

  public function login($email, $password) {
    // Check if the email and password match a user in the database
    $result = $this->conn->query("SELECT * FROM users WHERE email='$email'");
    if ($result->num_rows > 0) {
      // The email matches a user in the database, check the password
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
        // The password is correct, log the user in and return true
        return true;
      } else {
        // The password is incorrect, return false
        return false;
      }
    } else {
      // The email does not match a user in the database, return false
      return false;
    }
  }
}


/*
$user = new User();

if ($user->signup('JohnSmith', 'John', 'Smith', 'john@example.com', 'password123')) {

} else {

}

if ($user->login('john@example.com', 'password123')) {

} else {

}
 */    	
    
?>
