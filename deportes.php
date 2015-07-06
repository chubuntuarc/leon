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
				<h1>Deportes favoritos .. <span>Solicitar a travez de checkbox y una lista de 4 deportes, mostrar cuales se seleccionaron</h1>
				</header>
		</div>

		<div class="ejercicio3">
		<form method="post">
		<p>¿Que deportes te gustan?</p>
		<input type="checkbox" name="sport[]" value="Soccer"><span>Soccer</span>
		<input type="checkbox" name="sport[]" value="Basketball"><span>Basketball</span>
		<input type="checkbox" name="sport[]" value="Baseball"><span>Baseball</span>
		<input type="checkbox" name="sport[]" value="Volleyball"><span>Volleyball</span>
		<br><br>
		<input type="submit" value="Resultado">
		<?php 
			$deporte = $_POST['sport'];
			echo "<br><br>Te gustan los siguientes deportes:";
			if (count($deporte) > 0) {
			for ($i=0;$i<count($deporte);$i++) {
			echo "<li>$deporte[$i] \n";
            }
			}
            ?>
		</form>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>