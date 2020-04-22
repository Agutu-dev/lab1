<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="lab1";
define('DB_SERVER', $servername);
define('DB_USER', $username);
define('DB_PASS', $password);
define('DB_NAME', $dbname);

/**
 * 
 */
class DBConnector
{
	public $conn;
	
	function __construct()
	{
		$this->conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Connection failed: ".mysqli_error());

		
	}

public function closeDatabase(){

	mysql_close($this->conn);
}

}


echo "Connected successfully";
?>