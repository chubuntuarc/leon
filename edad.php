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
				<h1>Mayor o menor de edad .. <span>Solicitar nombre y edad; validar mandar mensaje si es menor o mayor de edad</h1>
				</header>
		</div><!-- /container -->

		<div class="ejercicio3">
		<form method="post">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="edad" placeholder="Edad">
		<input type="submit" value="Identificar">
		<?php 
            $n = $_POST['nombre'];
            $e = $_POST['edad'];
            if ($e < 18) {
            	echo "<br>" . $n . " eres menor de edad";
            }
            else
            {
            	echo "<br>" . $n . " eres mayor de edad";
            }
            ?>
		</form>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>