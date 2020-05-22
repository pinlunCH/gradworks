<?php

Class DepartmentsController
{	

	function default(){
		echo "dep controller. in the default method of the controller";
	}
	function getAll()
	{
		$data = DepartmentsModel::getAll();
		
		include("Views/json.php");
		
	}

}

?>