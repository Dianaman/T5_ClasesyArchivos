<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<h1>La Fábrica S.H.</h1>
	<h2>Ingreso de empleados</h2>
	<form method="POST">
		<label>Nombre<input type="text" name="nombre"></input></label>
		<label>Apellido<input type="text" name="apellido"></input></label>
		<label>Dni<input type="text" name="dni"></input></label>
		<label><span style="padding-right:50px">Sexo</span>
			Femenino<input type="radio" name="sexo" value="f"></input>
			Masculino<input type="radio" name="sexo" value="m"></input>
		</label>
		<label>Legajo<input type="text" name="legajo"></input></label>
		<label>Sueldo<input type="text" name="sueldo"></input></label>

		<input type="submit" value="Ingresar" class="button"></input>
	</form>
	<?php
		include 'persona.php';
		include 'empleado.php';

		//var_dump($_POST);

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$dni = $_POST['dni'];
		$sexo = $_POST['sexo'];
		$legajo = $_POST['legajo'];
		$sueldo = $_POST['sueldo'];

		if($nombre == "" || $apellido == "" || $sexo == "" || $legajo == "" || $sueldo == "")
		{
			echo "Error: Hay campos incompletos.";
			die();
		}

		if(!ctype_digit($dni) || !ctype_digit($legajo) || !is_numeric($sueldo))
		{
			echo "Error: ingrese valores numéricos en dni, legajo y sueldo";
			die();
		}

		$unEmpleado = new Empleado($nombre, $apellido, $dni, $sexo, $legajo, $sueldo);
		echo $unEmpleado->Hablar("Inglés");
	?>
</body>
</html>