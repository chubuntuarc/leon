<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Desarrollo de Aplicaciones Web</title>
		<meta name="description" content="Responsive Animated Border Menus with CSS Transitions" />
		<meta name="keywords" content="navigation, menu, responsive, border, overlay, css transition" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="codrops-header">
				<h1>Arreglo con claves .. <span>Arreglo asociativo donde se almacenen las claves de acceso de 5 usuarios de un sistema</h1>
				</header>
		</div>

		<div class="ejercicio3">
		<form method="post">
		<span>Ingresa una clave de usuario </span><input type="text" placeholder="Clave de acceso" name="acceso">
		<br><br>
		<input type="submit" value="Ingresar">
		<?php 
		    error_reporting(0);
		    $claves[4] = array();
		    $contador = 0;
		    array_splice( $claves, 2, 0, $_POST['acceso'] );
		    ++$contador;
		    var_dump($claves)
            ?>
		</form>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>