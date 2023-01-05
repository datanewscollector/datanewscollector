<?php
class DB_Client {

  private $servername = "localhost";
  private $portnumber = 8000;
  private $dbname = "dnc";
  private $username = "root";
  private $password = "";
  private static $dbclient = null;
  private $conn;
 

    private function __construct(){
        
    }

    public static function getDBClient() {
			if (DB_Client::$dbclient == null) {
				DB_Client::$dbclient = new DB_Client();
			}
			return DB_Client::$dbclient;
		}

    public static function getInstance() {
        static $instance = null;
        if ($instance === null) {
          $instance = new DB_Client();
        }
        return $instance;
      }
      	public function connect () {
			try {
				
				$this->conn = new PDO("mysql:host=" . $this->servername . ":" . $this->portnumber . ";dbname=" . $this->dbname, $this->username, $this->password);
				
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				return true;
				
			} catch(PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
				return false;
			}
		}	

		public function execute($query) {
			try {

				$this->conn->exec($query);

				return true;

			} catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
				return false;
			}
		}

		public function executeQuery($query) {
			try {

				$stmt = $this->conn->prepare($query);

				$stmt->execute();

				return $stmt;

			  } catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
			  }
			  $conn = null;
		}
	}


?>