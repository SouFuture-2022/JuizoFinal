<?php

namespace App\Infra\Database;
require './global.php';
use PDO;
use PDOException;

const HOST = 'localhost';
const USER = 'root';
const PASS = '';
const DBNAME = 'db';

class Conexao{

	private static $connection;

	public static function getConnection() {

			try {
				self::$connection = new PDO('mysql:host=' . getenv('HOST') . ';dbname=' . getenv('DBNAME'), getenv('USER'), getenv('PASS'));
				self::$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			} catch (PDOException $e) {
				die($e->getMessage('Error - Conexão com o banco de dados recusada!'));
			}

			array(PDO::ATTR_PERSISTENT => true);
		
		return self::$connection;
	}
}


