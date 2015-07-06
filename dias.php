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
				<h1>Días de la semana | Hoy es .. <span>Crear arreglo con los dias de la semana, e imprimir el dia de hoy</h1>
				</header>
		</div><!-- /container -->
		<div class="ejercicio1">

			<?php 
					$dias = array("Lunes "," Martes"," Miércoles"," Jueves"," Viernes"," Sábado"," Domingo.");
					echo "Los dias de la semana son: ";
					print implode(',',$dias);
					echo strftime("<br><br>Hoy es %A ");
					echo date("d ") . "de " . date("M ") . "del " . date("Y"); 
			 ?>
			
		</div>
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>