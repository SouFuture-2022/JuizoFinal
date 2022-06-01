<?php

    require __DIR__ . '/vendor/autoload.php';
	
	session_start();

	try {
		$data = rota(); 

	} catch (\Exception $e) {		
      die($e->getMessage());
	}
