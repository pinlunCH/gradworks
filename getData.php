<?php
include("classes/DB.php");
include("classes/Work.php");
include("classes/Works.php");

$arrAll = Works::getAll();

header('Content-Type: application/json');
$json = json_encode($arrAll);
echo $json;

