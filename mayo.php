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
				<h1>Números | ¿Cual es mayor? .. <span>Declarar dos variables e imprimir su valor.. mostrar cual valor es mayor</h1>
				</header>
		</div><!-- /container -->

		<div class="ejercicio3">

		<form method="post"> 
		<input type="text" name="num1" placeholder="Primer Valor" required> 
		<input type="text" name="num2" placeholder="Segundo Valor" required>
		<br><br>
		<input type="submit" value="Calcular" id="botonz">
		</form>
		</div>

		<?php 
		$n1 = $_POST['num1'];
		$n2 = $_POST['num2'];
		
		 ?>
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>