<?php
class User{

  private $id;
  private $fullname;
  private $username;
  private $email;
  private $password;
  

  private function _construct() {
  
  }

  //Setters
  public function setID($user_id) {
    $this->id = $user_id;
}

public function setUsername($username) {
  $this->username = $username;
}

public function setFullname($fullname) {
  $this->fullname = $fullname;
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

public function getFullname() {
  return $this->fullname;
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
      return true;
  }
  return false;
}

public function signup($dbclient) {
  $result = $dbclient->execute("INSERT INTO users (username, fullname, email, password) VALUES (" .
        "'" . $this->getUsername() . "', " .
        "'" . $this->getFullname() . "', " .
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
        return true;
    }
}
 
?>
