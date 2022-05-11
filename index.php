<?php

	session_start();

    require __DIR__ . '/vendor/autoload.php';

	try {
		$data = rota();

		extract($data['data']);

		if(!isset($data['view'])){
			throw new Exception("O índice view não foi encontrado", 1);
			
		}

		if(!file_exists('/home/daniel/juizo_final/JuizoFinal/Views/'. $data['view'])){
			throw new Exception("Essa view {$data['view']} não existe", 1);
		}

		$view = $data['view'];

		require '/home/daniel/juizo_final/JuizoFinal/Views/Master.php';
	} catch (\Exception $e) {
		var_dump($e->getMessage());
	}

