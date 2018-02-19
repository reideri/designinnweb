<?php 

	require_once 'conection.model.php';

	class TemplateModel {
		static public function mdlPackageTemplate($table){
			$stmt = Conection::conect()->prepare("SELECT * FROM $table");
			$stmt->execute();

			return $stmt->fetchAll();
			$stmt->close();
		}
	}