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
				<h1>Función rand | Números aleatorios .. <span>Imprimir utilizando la función rand un número entre el 1 y el 100 y decir si es mayor, menor o igual a 50</h1>
				</header>
		</div><!-- /container -->

		<div class="ejercicio3">
		    <?php
            $a=rand(1,100);
            echo "Número aleatorio " . $a ;
            if ($a < 50) {
            	echo "<br> El número es menor a 50";
            }
            elseif ($a == 50) {
            	echo "<br> El número es igual a 50";
            }
            else
            {
            	echo "<br> El número es mayor a 50";
            }
            
            ?>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>