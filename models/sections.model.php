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
				$stmt = Conection::conect()->prepare("SELECT * FROM $table");
				$stmt->execute();
				return $stmt->fetchAll();
			}

			$stmt->close();
			$stmt = null;
		}
	}