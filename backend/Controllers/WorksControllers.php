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
	function pager()
	{
		if(isset($_GET['pageon'])){
			$pageno = $_GET['pageon'];
		} else{
			$pageno = 1;
		}			
		$no_of_records_per_page = 6;
		$offset = ($pageno-1) * $no_of_records_per_page;
		$total_page = Works::count();
		$total_rows = $total_page[0]['num'];
		$total_pages = ceil($total_rows/$no_of_records_per_page);
		$data = Works::page($offset,$no_of_records_per_page);
		include("Views/json.php");
	}

}

?>