<?php

Class WorksControllers
{	

	function default(){
		echo "works controller. in the default method of the controller";
	}

	function getAll()
	{
		// model... get all 
		$data = Works::getAll();
		
		include("Views/json.php");
	}

	function getLatest()
	{
		// model... get all 
		$data = Works::getLatest();
		
		include("Views/json.php");
	}

	function findById()
	{
		// model... get all 
		if (isset($_GET["id"]))
		{
			$data = Works::findById($_GET["id"]);
		} else {
			echo "no id ";
		}
		include("Views/json.php");
	}

}

?>