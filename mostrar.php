<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "empleado.php";

		$archivo = fopen("empleados.txt", "r");
		while(!feof($archivo)){
			$linea = fgets($archivo);
			if($linea!=""){
				$empleado = explode("-", $linea);
				$unEmpleado = new Empleado($empleado[0], $empleado[1], $empleado[2], $empleado[3], $empleado[4], $empleado[5], $empleado[6]);
				echo $unEmpleado;
			}
		}
		fclose($archivo);
	?>
</body>
</html>