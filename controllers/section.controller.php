<?php 

	class SectionController {
		static public function ctrShowSections($item, $value){
			$table = 'routes';
			$response = SectionModel::mdlShowSections($table, $item, $value);
			return $response;
		}
	}