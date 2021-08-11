<?php
	include_once('controller/API.php');
	include_once('layouts/head.php');

	$apiObj = new API();
	
	$res = "";
	$video = "";
	if (isset($_POST['cari'])) {
		$judul = $_POST['judul'];
		$data = $apiObj->searchTitle($judul);
		$id = $data["Search"][0]["imdbID"];
		$res = $apiObj->searchDetail($id);
		$yt = $apiObj->searchYoutube($judul);
		$video = $yt["items"];
	}

	include_once('components/navbar.php');

	if (isset($judul)) {
		include_once('contents/detail.php');
	}else {
		include_once('contents/home.php');
	}

	
	include_once('components/connect.php');
	include_once('components/backtotop.php');
	include_once('components/footer.php');
	include_once('layouts/script.php');
	include_once('layouts/end.php');
?>

