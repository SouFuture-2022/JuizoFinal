<?php

	session_start();

    require __DIR__ . '/vendor/autoload.php';

	try {
		$data = rota(); 

	} catch (\Exception $e) {
		die($e->getMessage());
	}

