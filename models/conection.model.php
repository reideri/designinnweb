<?php 

	class Conection {
		static public function conect(){
			$conect = new PDO('mysql:host=localhost;dbname=designninweb', 'root', '', 
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			 	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			]);

			return $conect;
		}
	}