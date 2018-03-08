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

		static public function ctrHosting(){
			$table = 'packages';
			$reply = TemplateModel::mdlHostingService($table);

			return $reply;
		}
	}