<?php
function autoload($name)
{
	if (file_exists("Controllers/".$name.".php"))
	{
		include("Controllers/".$name.".php");
	}
	if (file_exists("Models/".$name.".models.php"))
	{
		include("Models/".$name.".models.php");
	}
}

spl_autoload_register("autoload");

$route = (isset($_GET["route"])) ? $_GET["route"] : "default";


if (isset($_GET["controller"])){

	$controller = ucfirst($_GET["controller"])."Controllers";
} else {
	echo "no controller specificed";
	die;
}

$oController = new $controller();
$oController->$route();

?>