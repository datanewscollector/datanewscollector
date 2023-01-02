<?php
    include 'constants.php';
class DB_Client {
    
  //  private static DB_Client client;
    private $conn;
    private $db;

    private function __construct(){
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public static function getInstance() {
        static $instance = null;
        if ($instance === null) {
          $instance = new DB_Client();
        }
        return $instance;
      }
      
}  

// the getInstance() method is defined as a public static method. 
//This allows you to call the method using the class name and the :: operator, like this:
// $db = DB_Client::getInstance();
?>