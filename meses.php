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
				<h1>Meses del año según la estación.. <span>Arreglo con los meses del año, e imprimirlos dependiendo la estacion del año.</h1>
				</header>
		</div><!-- /container -->
		<div class="ejercicio2">

			<?php 
					$dias = array("Enero "," Febrero "," Marzo "," Abril ","Mayo ","Junio ","Julio ","Agosto ","Septiembre ","Octubre ","Noviembre ","Diciembre <br><br>");
					echo "Los meses del año son: ";
					print implode(',',$dias);
     		 ?>

     		 <form method="post">
     		 <select name="estacion">
             <option value="2">Selecciona la estación</option>
             <option value="--Any--">----</option>
             <option value="Primavera">Primavera</option>
             <option value="Verano">Verano</option>
             <option value="Otoño">Otoño</option>
             <option value="Invierno">Invierno</option>
             </select>
             <input type="submit" value="Enter">
     		 </form>
     		 

             <?php
             $estaciones = $_POST['estacion'];
             switch ($estaciones) {
             	case "Primavera":
             		echo "Marzo - Abril - Mayo";
             		break;
             	case "Verano":
             		echo "Junio - Julio - Agosto";
             		break;
                case "Otoño":
             		echo "Septiembre - Octubre - Noviembre";
             		break;
             	case "Invierno":
             		echo "Diciembre - Enero - Febrero";
             		break;
             	case "Any":
             		echo "";
             		break;
             	case "2":
             		echo "";
             		break;
             	default:
             		echo "";
             		break;
             }

              ?>

     		 
			
		</div>
	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>