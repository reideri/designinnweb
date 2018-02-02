<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php $route = RouteModel::Route(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $route; ?>views/css/gridsystem.min.css"> 
	<link rel="stylesheet" href="<?php echo $route; ?>views/css/style.css">
	<script src="<?php echo $route; ?>views/js/jquery.js"></script> 
	<title>Diseño Web | DesignningWeb</title>
</head>
<body>
	<?php include 'modules/header.view.php'; ?>
	<?php include 'modules/slider.view.php'; ?>
	<?php include 'modules/feactures.view.php'; ?>
	<?php include 'modules/information.view.php'; ?>
	<?php include 'modules/services.view.php'; ?>
	<?php include 'modules/portafolio.view.php'; ?>
	<?php include 'modules/more.view.php'; ?>
	<?php include 'modules/faqs.view.php'; ?>
	<?php include 'modules/video.view.php'; ?>
	<?php include 'modules/certificate.view.php'; ?>
	<?php include 'modules/footer.view.php'; ?>
	<script src="<?php echo $route; ?>views/js/main.js"></script> 
</body>
</html>