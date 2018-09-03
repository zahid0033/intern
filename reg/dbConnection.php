<?php

class DBConn{
	public $servername;
	public $username;
	public $password;
	public $dbname;
    public $conn;
    
    public function connect()
		   {
		      $this->conn= new mysqli($this->servername, $this->username, $this->password,$this->dbname);
		      // Check connection
		      if ($conn->connect_error) {
		                   die("Connection failed: " . $conn->connect_error);
		           } 
		       return 1;

		   }
  

}



?>