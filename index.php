<?php

session_start();

require __DIR__ . '/vendor/autoload.php';
const FILE = __DIR__ . "/Views/";

try {
	$data = rota();

	extract($data['data']);
	#var_dump($data);

	if (!isset($data['view'])) {
		throw new Exception("O índice view não foi encontrado", 1);
	}

	if (!file_exists(FILE . $data['view'])) {
		var_dump(FILE);
		die();
		throw new Exception("Essa view {$data['view']} não existe", 1);
	}

	$view = $data['view'];

	require '../JuizoFinal/Views/Master.php';
} catch (\Exception $e) {
	die($e->getMessage());
}