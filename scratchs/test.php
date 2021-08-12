<?php
include_once('../controller/API.php');

$apiObj = new API();

$q = "https://imdb-api.com/images/original/MV5BNDYxNjQyMjAtNTdiOS00NGYwLWFmNTAtNThmYjU5ZGI2YTI1XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_Ratio0.6791_AL_.jpg";
$res = $apiObj->compressImg($q);  
echo "<pre>";
print_r($res);
?>

