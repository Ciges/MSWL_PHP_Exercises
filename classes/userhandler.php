<?php
/**
 * Abstract class used to define an interface to authenticate users
 * @author José Manuel Ciges Regeiro
 *
 */
abstract class UserHandler	{
	abstract public function validateUser($userid, $password);
}

?>