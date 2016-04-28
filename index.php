<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<script src="funciones.js"></script>
</head>
<body>
	<h1>La Fábrica S.H.</h1>
	<h2>Ingreso de empleados</h2>
	<!-- Para PHP -->
	<!--<form method="POST" action="administracion.php" enctype="multipart/form-data">-->

	<!-- Para JS -->
	<form method="POST" enctype="multipart/form-data" onsubmit="return false">
		<label>Nombre <span id="nombreErr" style="display:none">*</span><input type="text" name="nombre" id="nombre"></input></label>
		<label>Apellido <span id="apellidoErr" style="display:none">*</span><input type="text" name="apellido" id="apellido"></input></label>
		<label>Dni <span id="dniErr" style="display:none">*</span><input type="text" name="dni" id="dni"></input></label>
		<label><span style="padding-right:50px">Sexo </span><span id="sexoErr" style="display:none">*</span>
			Femenino<input type="radio" name="sexo" value="f" id="sexoF" checked></input>
			Masculino<input type="radio" name="sexo" value="m" id="sexoM"></input>
		</label>
		<label>Legajo <span id="legajoErr" style="display:none">*</span><input type="text" name="legajo" id="legajo"></input></label>
		<label>Sueldo <span id="sueldoErr" style="display:none">*</span><input type="text" name="sueldo" id="sueldo"></input></label>
		<Label>Foto <span id="fotoErr" style="display:none">*</span><input type="file" name="foto" id="foto"></input></label>
		<input type="submit" value="Enviar" class="button" onclick="EnviarDatos()"></input>
	</form>
	<a href="\mostrar.php" class="button">Ir a Mostrar</a>
</body>
<!--
	Está hecho hasta la validación de cadenas en javascript.
	Falta llamar a la función ValidarNumero para los campos numéricos,
	además de llamar a la función MostrarErrores. Y por último todo lo que falta del TP4.
-->
</html>


