<?php
	include "persona.php";

	class Empleado extends Persona
	{
		protected $_legajo;
		protected $_sueldo;
		protected $_pathFoto;

		function __construct($nombre, $apellido, $dni, $sexo, $legajo, $sueldo){
			parent::__construct($nombre, $apellido, $dni, $sexo);
			$this->legajo = $legajo;
			$this->sueldo = $sueldo;
		}

		function getLegajo(){
			return $this->legajo;
		}

		function getPathFoto(){
			return $this->_pathFoto;
		}

		function getSueldo(){
			return $this->sueldo;
		}

		function setPathFoto($foto){
			$this->_pathFoto = $foto;
		}

		function Hablar($idioma){
			return "El empleado habla $idioma";
		}

		function __toString(){
			return parent::__toString()."-".$this->getLegajo()."-".$this->getSueldo()."-".$this->getPathFoto();
		}
	}
?>