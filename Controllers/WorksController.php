<?php

Class WorksController
{	

	function getAll()
	{
		$data = WorksModel::getAll();
		
		include("Views/json.php");
	}

}
