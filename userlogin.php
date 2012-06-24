<?php

include("classes/util.php");
spl_autoload_register(array("Util","__autoload"));
$smarty = new mySmarty();

// We check here if we recive and user and a password
if (isset($_POST["username"]) and isset($_POST["password"]))	{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$userdb = new UserDBHandler("localhost", "mswl", "mswl", "master_practice");
	if ($userdb->validateUser($username, $_POST["password"]))	{
		$smarty->assign("validation", "Ok");
		$smarty->assign("status_message", "The user and password are correct :-)");
		// We keep the user in a cookie for 30 minutes
		setcookie("php_exercise1_user", $username, time() + 1800);
	}
	else	{
		$smarty->assign("validation", "Error");
		$smarty->assign("status_message", "The user and password are incorrect");
		// Delete the cookie in case it exists
		setcookie("php_exercise1_user", "", time() - 1800);
	}
}
// We check if the user is already logged in
elseif (isset($_COOKIE["php_exercise1_user"]))	{
	$user = $_COOKIE["php_exercise1_user"];
	$smarty->assign("validation", "Ok");
	$smarty->assign("status_message", "The user ".$user." is already logged in");
}
$smarty->display("userlogin.tpl");

?>