<html lang="es">
	<head>
	<title>LogIn SPDV</title>
	<meta charset="utf-8">
	<meta name="author" content="Alfredo Guevara">
	<meta name="description" content="Sistema PDV COMPUTO">
	<link rel="stylesheet" type="text/css" href="css/css.css" />
	</head>
	<body>
		<?php
			if (isset($_GET['errorLogIn'])){
			echo "<h1>Debes Loguearte para poder ingresar al sistema</h1>";
			}
		?>
	<div id="principal">
	<div id="cabecera">
	<div id="logo">
		<img src="imagenes/redes2.jpg" alt="logotipo" width="100px" height="100px" />
	</div>
	</div>
	<div id="lateral">
					<div id="menu">
						<ul>
							<li><a href="sesionAdmin.php">Administrador</a></li>
							<li><a href="planeacion.php" target ="cont">Planeacion de la auditoria</a></li>
							<li><a href="AUDITORIA EQUIPO-7/index.html">Interpretacion de la Informacion</a></li>
							<!--Aqui debes poner los links para cada tema el efecto se hace automáticamente -->
						</ul>
					</div>
	</div>
	<div id="contenido">
	<iframe name ="cont" width="927px" height="700" scrolling="yes"></iframe>
	<!--Aqui debes colocar todo lo relacionado a tu tema -->
	<!-- Comienzo equipo 7 -->
	<ul>
   <li><a href="AUDITORIA EQUIPO-7/infocap3.php"><input type="button" value="INFORMACION SOBRE CAPITULO 3" class="boton"></a>   
   <li><a href=""><input type="button" value="INFORMACION SOBRE CAPITULO 4" class="boton"></a>
   <li><a href=""><input type="button" value="INFORMACION SOBRE CAPITULO 5" class="boton"></a>
   <li><a href=""><input type="button" value="INFORMACION SOBRE CAPITULO 6" class="boton"></a>
   <li><a href="AUDITORIA EQUIPO-7/dictamenfinal.php"><input type="button" value="DICTAMEN FINAL" class="boton"></a>
   <li><a href="AUDITORIA EQUIPO-7/fundamentoteoricoequipo7.php"><input type="button" value="FUNDAMENTO TEORICO EQUIPO 7" class="boton"></a>
</ul>
	<!-- fin equipo 7 -->
	
	</div>	
	<div class="nofloat">
	</div>
	<div class="pie">
	<h2>Ingenio y Creacion en Movimiento</h2>
	</div>
	</div>
	</body>
	</html>
