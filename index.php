<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<h1>La Fábrica S.H.</h1>
	<h2>Ingreso de empleados</h2>
	<form method="POST" action="administracion.php" enctype="multipart/form-data">
		<label>Nombre<input type="text" name="nombre"></input></label>
		<label>Apellido<input type="text" name="apellido"></input></label>
		<label>Dni<input type="text" name="dni"></input></label>
		<label><span style="padding-right:50px">Sexo</span>
			Femenino<input type="radio" name="sexo" value="f"></input>
			Masculino<input type="radio" name="sexo" value="m"></input>
		</label>
		<label>Legajo<input type="text" name="legajo"></input></label>
		<label>Sueldo<input type="text" name="sueldo"></input></label>
		<Label>Foto<input type="file" name="foto"></input></label>
		<input type="submit" value="Ingresar" class="button"></input>
	</form>
	<a href="\mostrar.php" class="button">Ir a Mostrar</a>
</body>
</html>