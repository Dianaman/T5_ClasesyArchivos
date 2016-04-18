	<?php
		include 'empleado.php';

		var_dump($_POST);
		echo "<br><br>";
		var_dump($_FILES['foto']);
		echo "<br><br>";

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
		//echo $unEmpleado->("Inglés");
		echo $unEmpleado;

		$archivo = fopen("empleados.txt", "a");
		fwrite($archivo, $unEmpleado."\n");
		fclose($archivo);
	?>