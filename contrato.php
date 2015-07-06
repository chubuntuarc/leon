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
				<h1>Contrato .. <span>Interfaz en la que el usuario llena los datos y al final muestra la información completa</h1>
				</header>
		</div>

		<div class="ejercicio">
		<form method="post">
		<span>En la ciudad de </span><input type="text" placeholder="Ciudad" name="ciudad">
		<span> se acuerdan entre la empresa </span><input type="text" placeholder="UTCH" name="empresa">
		<span> representada por el señor@ </span><input type="text" placeholder="Representante" name="representante">
		<span> en su caracter de apoderado, con domicilio en la calle </span><input type="text" placeholder="Calle" name="calle">
		<span> y la señora / el señor </span><input type="text" placeholder="Empleado" name="empleado">
		<span> futuro emplead@ con domicilio en </span><input type="text" placeholder="Domicilio" name="domicilio">
		<span> .Celebran el presente contrato, deacuerdo a la ley del trabajo. </span>
		<br><br>
		<input type="submit" value="Resultado">
		<?php 
		    error_reporting(0);
			$ciudad = $_POST['ciudad'];
			$empresa = $_POST['empresa'];
			$representante = $_POST['representante'];
			$calle = $_POST['calle'];
			$empleado = $_POST['empleado'];
			$domicilio = $_POST['domicilio'];
			echo "<br><br>En la ciudad de " . $ciudad . " se acuerdan entre la empresa " . $empresa . " representada por el señor@ " . $representante . " en su caracter de apoderado, con domicilio en la calle " . $calle . " y la señora / el señor " . $empleado . "futuro emplead@ con domicilio en " . $domicilio . " .Celebran el presente contrato, deacuerdo a la ley del trabajo.";
            ?>
		</form>
		</div>

		
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>