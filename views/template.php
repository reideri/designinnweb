<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php $Route = RouteModel::Route(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/gridsystem.min.css"> 
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/animate.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/slick.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/style.css">
	<script src="<?php echo $Route; ?>views/js/jquery.js"></script> 
	<script src="<?php echo $Route; ?>views/js/slick.min.js"></script> 
	<title>Diseño Web | DesignningWeb</title>
</head>
<body>
	<?php include 'modules/header.view.php'; ?>

	<?php 

		$routes = [];
		$route = null;
		if (isset($_GET['route'])) {
			$routes = explode('/', $_GET['route']);
			$item = 'route';
			$value = $routes[0];

			$components = SectionController::ctrShowSections($item, $value);

			if ($routes[0] == $components['route']) {
				$route = $routes[0];
			}

			$servicios = RouteModel::Directory($route, 'servicios');

		} else {
			 include 'modules/slider.view.php';
			 include 'modules/feactures.view.php';
			 include 'modules/information.view.php';
			 include 'modules/services.view.php';
			 include 'modules/portafolio.view.php';
			 include 'modules/more.view.php';
			 include 'modules/faqs.view.php';
			 include 'modules/video.view.php';
			 include 'modules/certificate.view.php';
		}

	 ?>

	 <?php include 'modules/footer.view.php'; ?>



	<script src="<?php echo $Route; ?>views/js/main.js"></script> 
</body>
</html>