<?php

session_start();

require __DIR__ . '/vendor/autoload.php';
const FILE = __DIR__ . "/Views/";
const FILE_MENU = __DIR__ . "/Views/includes/Cabecalhos/";
const FILE_RODAPE = __DIR__ . "/Views/includes/Rodapes/";

try {
	$data = rota();

	extract($data['data']);
	#var_dump($data);

	if (!isset($data['data'])) {
		throw new Exception("O índice view não foi encontrado", 1);
	}

	if (!file_exists(FILE_MENU . $data['header'])) {
		throw new Exception("Essa view {$data['view']} não existe", 1);
	}

	$header = FILE_MENU . $data['header'];
	$body = FILE . $data['body'];
	$footer = FILE_RODAPE . $data['footer'];

	require FILE . 'Master.php';
} catch (\Exception $e) {
	die($e->getMessage());
}