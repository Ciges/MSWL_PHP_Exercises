<?php
/**
 * @author José Manuel Ciges Regueiro
 * Class for user administration
 */
class User	{
	/**
	 * Associative array with private values for the class
	 * @var array
	 */
	private $data = array();

	/**
	 * Automagical setter for the class properties
	 * @param string $name
	 * @param mixed $value
	 */
	public function __set($name, $value)	{
		$this->data[$name] = $value;	
	}
	
	/**
	 * Automagical getter for class properties
	 * @param string $name
	 */
	public function __get($name)	{
		if (array_key_exists($name, $this->data))	{
			return $this->data[$name];
		}
		else	{
			trigger_error("Property ".$name." not defined in User class");
			return null;
		}
	}
	
	/**
	 * Class constructor
	 * @param string $username
	 * @param string $password
	 * @param string $name
	 */
	public function __construct($username, $password, $name)	{
		$this->username = $username;
		$this->password = $password;
		$this->name = $realname;
	}
}

?>