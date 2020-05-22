<?php

Class DepartmentsModel
{

	public static function getAll()
	{

		$data = DB::fetch("SELECT * FROM `programs`");
		return $data;
	}
}

?>