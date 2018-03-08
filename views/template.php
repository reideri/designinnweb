<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php $Route = RouteModel::Route(); ?>
	<link rel="icon" href="<?php echo $Route; ?>views/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/animate.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/slick.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/style.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/style.caracteristic.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/style.contact.css">
	<script src="<?php echo $Route; ?>views/js/jquery.js"></script> 
	<script src="<?php echo $Route; ?>views/js/slick.min.js"></script> 
	<?php if (!empty($_GET['route'])): ?>
		<title><?php echo $_GET['route']; ?> | DesignningWeb</title>
	<?php else: ?>
		<title>Diseño Web | DesignningWeb</title>	
	<?php endif ?>
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

			$caracteristicas = RouteModel::Directory($route, 'caracteristicas');
			$servicios = RouteModel::Directory($route, 'servicios');
			$servicios = RouteModel::Directory($route, 'contacto');
			$mail = RouteModel::OwnRoute($route, 'mail', 'b69a989affdd83fa2daff706ae23f79004ac52bea8ca0fd4fdce384346c5ee912f3a161c5eb8b3b5b33bcad5153cd4a3e28efd33ef3629b41b964ced2c057a58');

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