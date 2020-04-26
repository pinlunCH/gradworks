<?php
    class Work 
    {
        public $id = "";
        public $workName = "";
        public $image = "";
        public $student = "";
        public $details = "";
        public $programs = "";

        public function __construct($id, $workName, $image, $details, $programs)
        {
            $this->id = $id;
            $this->workName = $workName;
            $this->image = $image;
            //$this->student = $student;
            //this is commented out because Nathan said more than one student can work on one project
            $this->details = $details;
            $this->programs = $programs;
        }
        public static function getWorkById($id)
        {
            $arrWork = DB::fetch("SELECT * FROM works WHERE id='".$id."'");
            $work = $arrWork[0];
            $oWork = new Work($work['id'], $work['strName'], $work['strCoverImage'], $work['strDetail'], $work['nProgramsID']);
           
            return $oWork; 
        }
    }
?>