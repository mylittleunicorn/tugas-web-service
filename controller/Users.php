<?php

	$url = $_SERVER['REQUEST_URI'];

	//if use folder path
	$urlArr = explode("index.php", $url);
	if (count($urlArr) >= 2 ) {
		$url = $urlArr[1];
	}

	//if use php -5 localhost:8000
	if (strpos($url, "/") !== 0) {
		$url = "/$url";
	}

	// untuk menghendel url /user
	if ($url == '/users' && $_SERVER['REQUEST_METHOD'] == 'GET') {
		$users =  array(
			array(
				'id' => 1, 
				'name' => 'Sumatrana', 
				'email' => 'sumatrana@gmail.com', 
				'address' => 'Padang',  
				'gender' => 'Laki-laki'
			);
			array(
				'id' => 1, 
				'name' => 'Sumatrana', 
				'email' => 'sumatrana@gmail.com', 
				'address' => 'Padang',  
				'gender' => 'Laki-laki'
			);
			array(
				'id' => 1, 
				'name' => 'Sumatrana', 
				'email' => 'sumatrana@gmail.com', 
				'address' => 'Padang',  
				'gender' => 'Laki-laki'
			);
			array(
				'id' => 1, 
				'name' => 'Sumatrana', 
				'email' => 'sumatrana@gmail.com', 
				'address' => 'Padang',  
				'gender' => 'Laki-laki'
			);
			array(
				'id' => 1, 
				'name' => 'Sumatrana', 
				'email' => 'sumatrana@gmail.com', 
				'address' => 'Padang',  
				'gender' => 'Laki-laki'
			);
		);
	}

	


?>