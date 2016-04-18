<?php
	class Fabrica{
		private $_empleados[] = array();
		private $_razonSocial;

		function __construct($razonSocial){
			$this->razonSocial = $razonSocial;
		}

		public bool function AgregarEmpleado($persona){
			$num = array_push($this->_empleados, $persona);
			if($num > 0) return true;
			else return false;
		}

		public double function CalcularSueldos(){
			$num = 0;
			foreach($this->_empleados as empleado){
				$num += empleado->_sueldo;
			}
			return num;
		}

		public bool function EliminarEmpleado($empleado){
			$size = sizeof($this->_empleados);
			$this->_empleados = array_diff($this->_empleados, $empleado);
			if($size > sizeof($this->_empleados)) return true;
			return false;
		}

		private function EliminarEmpleadosRepetidos(){
			$this->_empleados = array_unique($this->_empleados);
		}

		public function __toString(){
			return $this->_razonSocial;
		}
	}
?>