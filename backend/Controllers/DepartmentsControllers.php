<?php

Class DepartmentsControllers
{	

	function default(){
		echo "dep controller. in the default method of the controller";
	}

	function getAll()
	{
		$data = Departments::getAll();
		
		include("Views/json.php");
		
	}

}

?>