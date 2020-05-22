<?php

Class Departments
{

	public static function getAll()
	{
		$data = DB::fetch("SELECT * FROM programs");
		return $data;
	}

	public static function getDeptByPrograms()
	{
		$data = DB::fetch("");
		return $data;	
	}
}

?>