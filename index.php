<?php
    include("Classes/DB.php");
    include("Classes/Work.php");
    include("Classes/Works.php");

   print_r(Work::getWorkById(1));
?>