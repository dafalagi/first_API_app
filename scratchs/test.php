<?php
include_once('../controller/API.php');

$apiObj = new API();

$q = "the avengers";
$res = $apiObj->searchTitle($q);  
echo "<pre>";
print_r($res);
?>

