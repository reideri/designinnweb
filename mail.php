<?php 


	$para = 'edsel.melendez.carv@gmail.com';
	$titulo = 'Enviando email desde PHP';
	$mensaje = '<html>'.
	'<head><title>Email con HTML</title></head>'.
	'<body><h1>Email con HTML</h1>'.
	'Esto es un email que se envía en el formato HTML'.
	'<hr>'.
	'Enviado por mi programa en PHP'.
	'</body>'.
	'</html>';
	$cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $cabeceras .= 'From: Designinnweb<developer@diw.com.mx>';

    $enviado = mail($para, $titulo, $mensaje, $cabeceras);


 ?>