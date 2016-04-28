function EnviarDatos(){
	console.log("llego a enviar datos");

	var nombre = document.getElementById('nombre').value;
	var apellido = document.getElementById('apellido').value;
	var dni = document.getElementById('dni').value;

	var sexo;
	if(document.getElementById('sexoM').checked){
		sexo = 'm';
	}
	else sexo = 'f';

	var legajo = document.getElementById('legajo').value;
	var sueldo = document.getElementById('sueldo').value;
	var foto = document.getElementById('foto').value;

	var arrErrores = [];

	if(!ValidarCadena(nombre)) arrErrores.push("nombre");
	if(!ValidarCadena(apellido)) arrErrores.push("apellido");
	if(!ValidarCadena(dni)) arrErrores.push("dni");
	if(!ValidarCadena(legajo)) arrErrores.push("legajo");
	if(!ValidarCadena(sueldo)) arrErrores.push("sueldo");
	if(!ValidarCadena(foto)) arrErrores.push("foto");

	console.log(arrErrores);

	if(arrErrores.length != 0){
		var strErrores="";
		for (var i = arrErrores.length - 1; i >= 0; i--) {
			console.log("iteracion: " + i + ": " +arrErrores[i]);
			strErrores = strErrores.concat("El campo ", arrErrores[i].toUpperCase(), " es requerido.\n");
		};
		console.log(strErrores);

		alert(strErrores);
		MostrarErrores(arrErrores);
	}
}

function ValidarCadena(cadenaAValidar){
	console.log("llego a validar cadena");

	if(cadenaAValidar != null && cadenaAValidar != "") return true;
	return false;
}

function ValidarNumero(valor){
	console.log("llego a validar numero");

	if(!isNaN(valor)) return true;
	return false;
}

function MostrarErrores(arrIdErrores){
	console.log("llego a mostrar errores");

	var IdError = "";
	for (var i = arrIdErrores.length - 1; i >= 0; i--) {
		IdError = arrIdErrores[i].concat("Err");
		console.log(IdError);
		document.getElementById(IdError).style.display = "inline";
		document.getElementById(IdError).style.color = "red";
		IdError = "";
	};
}