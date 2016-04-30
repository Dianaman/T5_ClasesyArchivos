<?php
	class Fabrica{
		private $_empleados[] = array();
		private $_razonSocial;

		function __construct($razonSocial){
			$this->razonSocial = $razonSocial;
			$this->ObtenerEmpleadosTxt();
		}

		public function AgregarEmpleado($persona){
			$num = array_push($this->_empleados, $persona);
			$this->EliminarEmpleadosRepetidos();
			if($num > 0) return true;
			else return false;
		}

		public function CalcularSueldos(){
			$num = 0;
			foreach($this->_empleados as empleado){
				$num += empleado->_sueldo;
			}
			return num;
		}

		public function EliminarEmpleado($empleado){
			$size = sizeof($this->_empleados);
			$this->_empleados = array_diff($this->_empleados, $empleado);
			if($size > sizeof($this->_empleados)) return true;
			return false;
		}

		private function EliminarEmpleadosRepetidos(){
			$this->_empleados = array_unique($this->_empleados);
		}

		public static function Guardar($fabrica){
			$archivo = fopen("empleados.txt", "a");
			for($fabrica->_empleados as $empleado){
				if(!fwrite($archivo, $empleado."\n")){
					return false;
				}
			}
			fclose($archivo);
			return true;
		}

		private function ObtenerEmpleadosTxt(){
			$archivo = fopen("empleados.txt", r);
			while(!feof($archivo)){
				$linea = fgets($archivo);
				if($linea != ""){
					$arrLinea = explode("-", $linea);
					$unEmpleado = new Empleado($arrLinea[0], $arrLinea[1], $arrLinea[2], $arrLinea[3], $arrLinea[4], $arrLinea[5]);
					AgregarEmpleado($unEmpleado);
				}
			}
			fclose($archivo);
		}

		public static function ToArray(){
			return self::$_empleados;
		}

		public function __toString(){
			return $this->_razonSocial;
		}
	}
?>