<?php

	$url 		= $_SERVER['REQUEST_URI'];
	$urlArr = explode("videx.php", $url);

	if (count ($urlArr) >= 2) {
		$url = $urlArr [1];
	}


	if(strpos($url,"/") != 0){
		$url = "/$url";
	}


	// untuk menghandle url
	if ($url = '/' && $_SERVER['REQUEST_METHOD']== 'GET') {
		echo json_encode(array('service_name' => 'PHP Service App', 'status' => 'Running'));
	}
