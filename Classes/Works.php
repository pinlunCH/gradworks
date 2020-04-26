<?php
    class Works 
    {
        public static function getWorksHome() 
        { 
            $arrWorks = DB::fetch("SELECT * FROM works ORDER BY id DESC LIMIT 2");
        }
        public static function getAllWorks() 
        {
            //I think we might need a left join here because of nProgramsID and students info 
            $arrWorks = DB::fetch("SELECT * FROM works ORDER BY id DESC");
        }
    }
?>