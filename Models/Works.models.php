<?php
Class Works{
    public static function getAll()
    {
        $data = DB::fetch("SELECT * FROM works");
        return $data;
    }
    public static function getLatest()
    {
        $data = DB::fetch("SELECT * FROM works ORDER BY id DESC LIMIT 5");
        return $data;
        
    }
    public static function findById($id)
    {
        $data = DB::fetch("SELECT * FROM works WHERE id ='".$id."'");

        return $data;

    }
    public static function getByDepartments($id)
    {
        $data = DB::fetch("SELECT strCoverImage FROM `works` WHERE id = $id");
        return $data;
        
    }
    public static function getCover($id)
    {
        $data = DB::fetch("SELECT strCoverImage FROM `works` WHERE `id` = $id");
        return $data;
    }
}