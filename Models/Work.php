<?php
Class Work{
    var $id = "";
    var $name = "";
    var $coverimg = "";
    var $student = "";
    var $strDetail = "";
    var $programs = "";

    public function __construct($id,$name,$coverimg,$student,$strDetail,$programs)
    {
        $this->id = $id;
        $this->name = $name;
        $this->coverimg = $coverimg;
        $this->student = $student;
        $this->strDetail = $strDetail;
        $this->programs = $programs;
    }
    public static function findById($id)
    {
        $arrWork = DB::fetch("SELECT * FROM works WHERE id ='".$id."'");
        $work = $arrWork[0];
        
        return new Work($work["id"],$work["strName"],$work["strCoverImage"],$work["nStudentsId"],$work["strDetail"],$work["nPrograms"]);

    }
}