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
		<form method="post"> 
		<input type="text" name="num1" placeholder="Primer Valor" required> 
		<input type="text" name="num2" placeholder="Segundo Valor" required>
		<br><br>
		<input type="submit" value="Calcular" id="botonz">
		</form>

		<?php 
		echo "<br><br>El valor del primer número es: " . "{$_POST['num1']}" . " y el valor del segundo es: " . "{$_POST['num2']}";
		$n1 = (int)$_POST['num1'];
		$n2 = (int)$_POST['num2'];		
		if ($n1 > $n2) {
			echo "<br>El mayor es : $n1";
		}
		else
		{
			echo "<br>El mayor es : $n2";
		}
		
		 ?>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>