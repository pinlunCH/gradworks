<?php
    include("classes/DB.php");
   $oWorks = DB::fetch("SELECT * FROM works ORDER BY id DESC LIMIT 1");
   print_r($oWorks);
?>