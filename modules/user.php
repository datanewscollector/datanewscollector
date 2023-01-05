<?php
  include 'constants.php';
class User{

  private $id;
  private $firstname;
  private $lastname;
  private $username;
  private $email;
  private $password;
  

  private function _construct() {
  
  }

  //Setters
  public function setID($user_id) {
    $this->id = $user_id;
}

public function setUsername($user_name) {
  $this->username = $user_name;
}

public function setFirstname($first_name) {
  $this->username = $first_name;
}

public function setLastname($last_name) {
  $this->username = $last_name;
}

public function setEmail($email) {
    $this->email = $email;
}

public function setPassword($password) {
    $this->password = $password;
}

//Getters
public function getID() {
    return $this->id;
}

public function getUsername() {
  return $this->username;
}

public function getFirstname() {
  return $this->firstname;
}

public function getLastname() {
  return $this->lastname;
}

public function getEmail() {
    return $this->email;
}

public function getPassword() {
    return $this->password;
}

public function checkLogin($dbclient) {
  $result = $dbclient->executeQuery("SELECT * FROM users WHERE username LIKE '" . $this->username . "' AND pass LIKE '" . $this->password . "'");
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      return $row;
  }
  return false;
}

public function signup($dbclient) {
  $result = $dbclient->execute("INSERT INTO users (username,firstname, lastname, email, pass) VALUES (" .
        "'" . $this->getUsername() . "', " .
        "'" . $this->getFirstname() . "', " .
        "'" . $this->getLastname() . "', " .
        "'" . $this->getEmail() . "', " .
        "'" . $this->getPassword() . "'" .
        ")");

        return $result;
    }

    public function isAvailable($dbclient, $column, $value) {
        $result = $dbclient->executeQuery("SELECT * FROM users WHERE " . $column . " LIKE '". $value . "'");
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            return false;
        }
        return $row;
    }
}
 
?>
