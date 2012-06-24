<?php
require_once("Smarty/libs/Smarty.class.php");

/**
 * Class which extends Smarty to centralize configuration in one place
 * @author ciges
 */
class mySmarty extends Smarty	{
	public function __construct()	{
		parent::__construct();
		$this->setTemplateDir("./templates/");
		$this->setCompileDir("./templates_c/");
		$this->setCacheDir("./cache/");
		$this->setConfigDir("./configs/");
	}
}
?>