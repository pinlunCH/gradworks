<?php

Class Departments
{

	public static function getAll()
	{
		$data = DB::fetch("SELECT * FROM programs");
		return $data;
	}

	public static function getDeptByPrograms($programs)
	{
		$data = DB::fetch("SELECT works.*, works.strName AS programs FROM works LEFT JOIN programs ON programs.id=works.nPrograms WHERE nPrograms='".$programs."' ORDER BY strName");
		return $data;	
	}
}

?>