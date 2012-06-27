<?php
include("classes/util.php");
spl_autoload_register(array("Util","__autoload"));
$smarty = new mySmarty();

if (isset($_FILES["filepath"]))  {
	$file = $_FILES["filepath"];
	if ($file["type"] != "image/gif" and $file["type"] != "image/jpeg" and $file["type"] != "image/png")	{
		$smarty->assign("error_message", "Only gif, jpg and png types are allowed");
		$smarty->display("readshowimage.tpl");
	}
	elseif ($file["error"] > 0)	  {		
		$smarty->assign("error_message", $file["error"]);
		$smarty->display("readshowimage.tpl");
	}
	
	// Send the image to the user
	$img_data = file_get_contents($file["tmp_name"]);
	header("Content-type: ".$file["type"]);
	echo $img_data;
}
else {
	// Show the form to load the image
	$smarty->display("readshowimage.tpl");
}

?>