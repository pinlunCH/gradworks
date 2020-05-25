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

	function getDept2d3d()
	{
		$data = Departments::getDeptByPrograms(1);
		include("Views/json.php");
	}

	function getDeptActing()
	{
		$data = Departments::getDeptByPrograms(2);
		include("Views/json.php");
	}

	function getDeptRadio()
	{
		$data = Departments::getDeptByPrograms(3);
		include("Views/json.php");
	}

	function getDeptGame()
	{
		$data = Departments::getDeptByPrograms(4);
		include("Views/json.php");
	}

	function getDeptPhotography()
	{
		$data = Departments::getDeptByPrograms(5);
		include("Views/json.php");
	}

	function getDeptVfx()
	{
		$data = Departments::getDeptByPrograms(6);
		include("Views/json.php");
	}

	function getDeptWeb()
	{
		$data = Departments::getDeptByPrograms(7);
		include("Views/json.php");
	}

	

}

?>