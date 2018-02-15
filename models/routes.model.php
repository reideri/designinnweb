<?php 

	class RouteModel {
		static public function Route(){
			return 'http://localhost/designning/';
		}

		static public function Directory($route, $template){
			if ($route == $template) {
				include 'views/modules/page/'.$template.'.view.php';
			}
		}

		static public function ErrorRoute($route){
			if ($route == null) {
				include 'views/404.view.php';
			}
		}
	}