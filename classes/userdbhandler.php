<?php
class UserDBHandler extends UserHandler	{
	/**
	 * MySQL connector
	 * @var mysqli
	 */
	private $mysqlcon;

	/**
	 * Class constructor, opens a connection to MySQL databse
	 * @param string $dbhost
	 * @param string $dbuser
	 * @param string $dbpassword
	 * @param string $dbdatabase
	 */
	public function __construct($dbhost, $dbuser, $dbpassword, $dbdatabase)	{
		$this->mysqlcon = new mysqli($dbhost,$dbuser,$dbpassword, $dbdatabase);
		if ($this->mysqlcon->connect_errno)	{
			die("Connection to MySQL has not been possible, error code ".$this->mysqlcon->connect_errno." (".$this->mysqlcon->connect_error.")");
		}
	}
	
	/**
	 * Class destructors, closes database connection
	 */
	public function __destruct()	{
		$this->mysqlcon->close();		
	}
	
	/**
	 * This function adds a user to the database. Passwords are saved hidden with md5() function
	 * 
	 * @param string $username
	 * @param string $password
	 * @param string $firstname
	 * @return boolean
	 */
	public function addUser($username, $password, $firstname)	{
		$query = "insert into users (username,password,firstname) values ('".$username."', '".sha1($password)."', '".$firstname."')";
		if (!$this->mysqlcon->query($query) === TRUE)	{
			die("Inserting data in MySQL has not been possible, error code ".$this->mysqlcon->errno." (".$this->mysqlcon->error.")");	
		}
	}
	
	/**
	 * Verifies if the user exists in the database and if the password given is correct
	 * 
	 * @param string $username
	 * @param string $password
	 */
	public function validateUser($username, $password)	{
		$query = "select password from users where username = '".$username."'";
		if (!$result = $this->mysqlcon->query($query))	{
			die("Error sending query: ".$query."(".$this->mysqlcon->error.")");
		}
		if ($result->num_rows == 0)	{
			$result->close();
			return false;	// The user does not exists
		}
		else  {
			$record = $result->fetch_assoc();
			$bd_password = $record["password"];
			$result->close();
			if (sha1($password) == $bd_password)	{
				return true;
			}
			else {
				return false;
			}
		}
		
	}
	
}

?>