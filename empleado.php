<?php
	class Empleado extends Persona
	{
		protected $_legajo;
		protected $_sueldo;

		function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo){
			parent::__construct($nombre, $apellido, $dni, $sexo);
			$this->legajo = $legajo;
			$this->sueldo = $sueldo;
		}

		function getLegajo(){
			return $this->legajo;
		}

		function getSueldo(){
			return $this->sueldo;
		}

		function Hablar($idioma){
			return "El empleado habla $idioma";
		}
	}
?>