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
				<h1>Grado de estudios .. <span>Pedir nombre y mediante un radiobutton seleccionar grado de estudios y mostrar</h1>
				</header>
		</div><!-- /container -->

		<div class="ejercicio3">
		<form method="post">
		<input type="text" name="nombre" placeholder="Nombre">
		<p>Grado de estudios</p>
		<input type="radio" name="primaria"><span>Primaria</span>
		<input type="radio" name="secundaria"><span>Secundaria</span>
		<input type="radio" name="preparatoria"><span>Preparatoria</span>
		<input type="radio" name="universidad"><span>Universidad</span>
		<br><br>
		<input type="submit" value="Resultado">
		<?php 
		error_reporting(0);
			$nombre = $_POST['nombre'];
			if ($_POST['primaria']) {
				echo "<br><br>" . $nombre . " estudiaste hasta primaria";
            }
            elseif ($_POST['secundaria']) {
            	echo "<br><br>" . $nombre . " estudiaste hasta secundaria";
            }
            elseif ($_POST['preparatoria']) {
            	echo "<br><br>" . $nombre . " estudiaste hasta preparatoria";
            }
            else  {
            	echo "<br><br>" . $nombre . " estudiaste hasta universidad";
            }
            ?>
		</form>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>