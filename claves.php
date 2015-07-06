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
		<span>Ingresa tu usuario </span><input type="text" placeholder="usuario" name="acceso">
		<br><br>
		<input type="submit" value="Obtener">
		<?php 
		    error_reporting(0);
		    $acceso = $_POST['acceso'];
		    $usuarios = array('chubuntu' =>  123 , 'daniel' =>  456 , 'victor' =>  789 , 'diana' =>  101 , 'ricardo' =>  112);

		    switch ($acceso) {
		    	case "chubuntu":
		    		echo "Hola " . $acceso . " tu coontraseña es " . $usuarios['chubuntu'];
		    		break;
		    	case "daniel":
		    		echo "Hola " . $acceso . "tu coontraseña es " . $usuarios['daniel'];
		    		break;
		    	case "victor":
		    		echo "Hola " . $acceso . "tu coontraseña es " . $usuarios['victor'];
		    		break;
		    	case "diana":
		    		echo "Hola " . $acceso . "tu coontraseña es " . $usuarios['diana'];
		    		break;
		    	case "ricardo":
		    		echo "Hola " . $acceso . "tu coontraseña es " . $usuarios['ricardo'];
		    		break;
		    	default:
		    		echo "Usuario no registrado";
		    		break;
		    }
            ?>
		</form>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>