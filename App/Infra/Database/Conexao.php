<?php

namespace App\Infra\Database;

use PDO;
use PDOException;

class Conexao{

	private static $connection;

	public static function getConnection() {

			try {
				self::$connection = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
				self::$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			} catch (PDOException $e) {
				die($e->getMessage('Error - Conexão com o banco de dados recusada!'));
			}

			array(PDO::ATTR_PERSISTENT => true);
		
		return self::$connection;
	}
}


