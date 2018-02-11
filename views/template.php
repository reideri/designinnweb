<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php $Route = RouteModel::Route(); ?>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/gridsystem.min.css"> 
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/animate.css">
	<link rel="stylesheet" href="<?php echo $Route; ?>views/css/style.css">
	<script src="<?php echo $Route; ?>views/js/jquery.js"></script> 
	<title>Diseño Web | DesignningWeb</title>
</head>
<body>
	<?php include $Route.'views/modules/header.view.php'; ?>
	<?php include $Route.'views/modules/slider.view.php'; ?>
	<?php include $Route.'views/modules/feactures.view.php'; ?>
	<?php include $Route.'views/modules/information.view.php'; ?>
	<?php include $Route.'views/modules/services.view.php'; ?>
	<?php include $Route.'views/modules/portafolio.view.php'; ?>
	<?php include $Route.'views/modules/more.view.php'; ?>
	<?php include $Route.'views/modules/faqs.view.php'; ?>
	<?php include $Route.'views/modules/video.view.php'; ?>
	<?php include $Route.'views/modules/certificate.view.php'; ?>
	<?php include $Route.'views/modules/footer.view.php'; ?>

	<script src="<?php echo $Route; ?>views/js/main.js"></script> 
</body>
</html>