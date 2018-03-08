<?php 

	require_once 'conection.model.php';

	class TemplateModel {
		static public function mdlPackageTemplate($table){
			$stmt = Conection::conect()->prepare("SELECT * FROM $table");
			$stmt->execute();

			return $stmt->fetchAll();
			$stmt->close();
		}

		static public function mdlHostingService($table){
			$stmt = Conection::conect()->prepare("SELECT * FROM $table ORDER BY id_$table LIMIT 3");
			$stmt->execute();

			return $stmt->fetchAll();
			$stmt->close();
		}
	}