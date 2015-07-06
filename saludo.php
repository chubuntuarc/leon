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
				<h1>Saludo en base a la hora .. <span>Script donde según la hora actual se imprime el saludo.</h1>
				</header>
		</div><!-- /container -->

		<div class="ejercicio3">
		<?php 
		date_default_timezone_set('America/Chihuahua');
		$tiempo =  date("g:i:s");
		if ($tiempo < 12) {
			echo "Buenos días son las: $tiempo";
		}
		else if ($tiempo >= 12 && $tiempo < 20) {
			echo "Buenas tardes son las: $tiempo";
		}
		else
		{
		echo "Buenas noches son las: $tiempo";
		}
		?>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>