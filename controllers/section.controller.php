<?php 

	class SectionController {
		static public function ctrShowSections($item, $value){
			$table = 'routes';
			$response = SectionModel::mdlShowSections($table, $item, $value);
			return $response;
		}

		static public function ctrShowInfo($table){
			$table = $table;
			$response = SectionModel::mdlShowInfo($table);
			return $response;
		}

		static public function ctrShowFaqs($direccion){
			$table = 'faqs';
			$response = SectionModel::mdlShowFaqs($table, $direccion);
			return $response;
		}

	}