<?php
include_once('../controller/API.php');

$apiObj = new API();

$data = $apiObj->nowShowing();
    $item = $data["items"];
    $id = $item[0]["id"];
                $imgOg = $apiObj->searchDetail($id);
                $compress = $imgOg["image"]; 
                $res = $apiObj->compressImg($compress);
                $img = $res["dest"];
    echo "<pre>";
    print_r($data);
?>>

