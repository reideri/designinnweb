<?php 

	require_once 'conection.model.php';

	class SectionModel {
		static public function mdlShowSections($table, $item, $value){
			if ($item != null) {
				$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE $item = :$item");
				$stmt->bindParam(':'.$item, $value, PDO::PARAM_STR);
				$stmt->execute();
				return $stmt->fetch();
			} else {
				$stmt = Conection::conect()->prepare("SELECT * FROM $table ORDER BY id");
				$stmt->execute();
				return $stmt->fetchAll();
			}

			$stmt->close();
			$stmt = null;
		}


		static public function mdlShowInfo($table){
			$stmt = Conection::conect()->prepare("SELECT * FROM $table ORDER BY id_$table DESC LIMIT 1");
			$stmt->execute();
			return $stmt->fetchAll();
		}

		static public function mdlShowFaqs($table, $direccion){
			$stmt = Conection::conect()->prepare("SELECT * FROM $table WHERE direccion = $direccion");
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}