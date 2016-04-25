	<?php
		include 'empleado.php';

		var_dump($_POST);
		echo "<br><br>";
		var_dump($_FILES['foto']);
		echo "<br><br>";

		/*	Guardado de campos POST en variables nuevas	*/
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$dni = $_POST['dni'];
		$sexo = $_POST['sexo'];
		$legajo = $_POST['legajo'];
		$sueldo = $_POST['sueldo'];
		
		/*	Guardado de la foto en una variable nueva e inspección	*/
		$foto = $_FILES['foto'];
		echo "VAR DUMP foto";
		var_dump($foto);

		echo "<br><br>";

		/*	Guardado de la variable tipo para la validación	*/
		$fotoExt[] = array();
		$fotoExt = explode('/', $foto["type"]);
		echo "VAR DUMP fotoExt";
		var_dump($fotoExt);

		echo "<br><br>";

		/*	Validación de los campos tipo string   */
		if($nombre == "" || $apellido == "" || $sexo == "" || $legajo == "" || $sueldo == "")
		{
			echo "Error: Hay campos incompletos.";
			die();
		}

		/*	Validación de los campos de tipo numérico   */
		if(!ctype_digit($dni) || !ctype_digit($legajo) || !is_numeric($sueldo))
		{
			echo "Error: ingrese valores numéricos en dni, legajo y sueldo";
			die();
		}

		/*	Validación de tipo, extensión y tamaño de imagen   */
		if($fotoExt[0] != "image"  || $fotoExt[1] != "jpg" || $fotoExt[1] != "bmp" || 
			$fotoExt[1] != "gif" || $fotoExt[1] != "png" || $fotoExt[1] != "jpeg" || $foto['size']/1024/1024 > 1)
		{
			echo "Error: no ha subido una imagen válida o supera 1MB.";
			die();
		}

		/*	Verificación de preexistencia del archivo	*/
		$archivoDestino = "/fotos/".$dni."-"."apellido".".".$fotoExt[1];
		if(file_exists($archivoDestino))
		{
			echo "Error: el empleado ya existe";
			die();
		}

		/************** Procesamiento de los datos **************/
		/* Guardado de la foto en carpeta */
		move_uploaded_file($foto['tmp_name'], $archivoDestino);

		/*	Creación del empleado	*/
		$unEmpleado = new Empleado($nombre, $apellido, $dni, $sexo, $legajo, $sueldo, $archivoDestino);
		echo $unEmpleado;

		/* Guardado del empleado en archivo */
		$archivo = fopen("empleados.txt", "a");
		fwrite($archivo, $unEmpleado."\n");
		fclose($archivo);
	?>