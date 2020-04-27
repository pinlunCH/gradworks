<?php
Class Works{
    public static function getAll()
    {
        $oarrWork = DB::fetch("SELECT * FROM works");

        foreach($oarrWork as $owork)
        {
            $oWorks = new Work($owork["id"],$owork["strName"],$owork["strCoverImage"],$owork["nStudentsId"],$owork["strDetail"],$owork["nPrograms"]);
            $oarroWork[] = $oWorks;
        }        

        return $oarroWork;
        
    }
}