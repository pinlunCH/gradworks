<?php

Class WorkController
{	

	function findByID()
	{
		if (isset($_GET["id"]))
		{
			$data = WorksModel::findByID($_GET["id"]);
		} else {
			echo "you need to give me an id... hugs and lots of love :) ";
		}
		include("Views/json.php");
	}
