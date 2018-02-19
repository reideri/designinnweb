<?php 

	class TemplateController {
		static public function Template(){
			include 'views/template.php';
		}

		static public function ctrPackages(){
			$table = 'packages';
			$reply = TemplateModel::mdlPackageTemplate($table);

			return $reply;
		}
	}