<?php
	

    require __DIR__ . '/vendor/autoload.php';
	const FILE = __DIR__ . "/Views/";

	try {
		$data = rota(); 

	} catch (\Exception $e) {		
      die($e->getMessage());
	}
