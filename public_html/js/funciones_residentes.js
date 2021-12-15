
function altaResidente(){
	
	var datosDiscapacidad=new Object();
	var datosSitMedica=new Object();
	
	var $discapacidadCheckBoxes = $("[class~='discapacidadAlta'] input[type=checkbox]");
	var $sitMedicaCheckBoxes = $("[class~='sitMedicaAlta'] input[type=checkbox]");
	
	$discapacidadCheckBoxes.each(function(index, check ){
		datosDiscapacidad[check.id] = check.checked;
		if(check.id == "otraDiscapacidad" && check.checked)
			datosDiscapacidad['otraDiscapacidadTexto'] = $("[name='otraDiscapacidadTexto']").val();			
	});
	
	$sitMedicaCheckBoxes.each(function(index, check ){
		datosSitMedica[check.id] = check.checked;
		if(check.id == "otraSitMedica" && check.checked)
			datosSitMedica['otraSitMedicaTexto'] = $("[name='otraSitMedicaTexto']").val();			
	});
	
	if($(".habIndividual").is(':checked')) 
		id_habitacion = $('#habitacionIndivAsignada').val();
	else
		id_habitacion = $('#habitacionDobleAsignada').val();
	var nExpediente= obtenerNumeroExpediente($('#apellido1Residente').val(),$('#nombreResidente').val());
	var varkath = resulkath();
	var varbarthel = resulbarthel();
	
	var datosFamiliar={
		
		dni_familiar : $('#dniFamiliar').val(),
        nombre_familiar : $('#nombreFamiliar').val(),
        apellidos : $('#apellidosFamiliar').val(),
        direccion_postal : $('#direccionFamiliar').val(),
		codigo_postal : $('#codigoPostalFamiliar').val(),
		parentesco : $('#parentescoFamiliar').val(),
        telefono : $('#telefonoFamiliar').val(),
        email : $('#emailFamiliar').val()
	};

	var numeroMedicacion = null;

	var medicamentos = $("#tabla-medicacion-res tbody tr");
	if(medicamentos.length >= 1){
		$.ajax({
			url: '../controllers/residente.php?task=nMedicacion',
			type: "POST",
			data: {},
			async: false,
			dataType: "html",
			success: function(data1) {	
				let respuesta1 =  $.parseJSON(data1);
				var numero = respuesta1.n_medicacion;
				numeroMedicacion = respuesta1.n_medicacion;
				$("#tabla-medicacion-res tbody tr").each(function(i){
					var fila = $(this);
					var columnas = fila.find("td");
					var datosMedicacion = {
						nombre: columnas[0].textContent,
						tipo: columnas[1].textContent,
						via: columnas[2].textContent,
						unidad: columnas[3].textContent,
						desayuno: columnas[4].textContent,
						comida: columnas[5].textContent,
						merienda: columnas[6].textContent,
						cena: columnas[7].textContent,
						n_medicacion: numero
					};
					$.ajax({
						url: '../controllers/residente.php?task=altaMedicacion',
						type: "POST",
						data: {datosMedicacion, numero},
						async: false,
						dataType: "html",
						success: function(data) {	
							let respuesta =  $.parseJSON(data);
							if(respuesta.status == "WARNING"){
								swal({
									title: "INSERTADA CON WARNING",
									text:  respuesta.message,
									buttons: false,
									icon:  "warning",
									timer: 2500,
								});
								
							}else{
								swal({
									title: "INSERTADA",
									text:  "Medicación insertada correctamente",
									buttons: false,
									icon:  "success",
									timer: 1500,
								});
							}
							setTimeout('location.reload()',2000); 
						},
						error: function(data) {
							let respuesta =  $.parseJSON(data.responseText);
							swal({
								title: "ERROR",
								text:  respuesta.message,
								buttons: false,
								icon:  "error",
								timer: 2500,
							});
						}
					});	
				});
			},
			error: function(data) {
				let respuesta =  $.parseJSON(data.responseText);
				swal({
					title: "ERROR",
					text:  respuesta.message,
					buttons: false,
					icon:  "error",
					timer: 2500,
				});
			}
		});	

		//Aquí va a ir un for y se va a repetir 1 vez por cada medicamento en la medicación
		
		//Con esto tenemos todos los medicamentos en un array, en el que cada posición es un json convertido en cadena, que luego deserializaremos en php

		//Hasta aquí el for

		//TABLA MEDICACION

		
	}

	var datosResidente ={

        dni_residente : $('#dniResidente').val(),
		n_expediente : nExpediente,
        nombre : $('#nombreResidente').val(),
        apellido1 : $('#apellido1Residente').val(),
        apellido2 : $('#apellido2Residente').val(),
        fecha_nacimiento : $('#fechaNacimiento').val(),
        sexo: $('#sexo').val(),
        grado_dependencia : $('#gradoDependencia').val(),
		discapacidad : JSON.stringify(datosDiscapacidad,escaparComillas),
		situacion_medica : JSON.stringify(datosSitMedica,escaparComillas),
		id_personal_responsable : $('#responsableResidente').val(),
		id_habitacion : id_habitacion,
		kath: varkath,
		barthel: varbarthel,
		medicacion: numeroMedicacion
	};
	

    //TABLA RESIDENTE
    $.ajax({
        url: '../controllers/residente.php?task=altaResidente',
        type: "POST",
        data: {datosResidente,datosFamiliar},
		async: false,
        dataType: "html",
		success: function(data) {	
			let respuesta =  $.parseJSON(data);
			if(respuesta.status == "WARNING"){
				swal({
					title: "INSERTADO CON WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
				
			}else{
				swal({
					title: "INSERTADO",
					text:  "Residente insertado correctamente",
					buttons: false,
					icon:  "success",
					timer: 1500,
				});
			}
			setTimeout('location.reload()',2000); 
		},
		error: function(data) {
			let respuesta =  $.parseJSON(data.responseText);
			swal({
				title: "ERROR",
				text:  respuesta.message,
				buttons: false,
				icon:  "error",
				timer: 2500,
			});
		}
    });	
}

function traductkatz(katzbinario){
	if(katzbinario == null || katzbinario == undefined){
		return "?";
	}
	var bano;
    var vestido;
    var wc;
    var movilidad;

    var contador = 0;
    var clasificacion;
    var texto;

    var todos = true;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia

    if(katzbinario.charAt(0) == '0'){

        bano = false;

    }else if(katzbinario.charAt(0) == '1'){ 

        bano = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(1) == '0'){

        vestido = false;

    }else if(katzbinario.charAt(1) == '1'){ 

        vestido = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(2) == '0'){

        wc = false;

    }else if(katzbinario.charAt(2) == '1'){ 

        wc = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(3) == '0'){

        movilidad = false;

    }else if(katzbinario.charAt(3) == '1'){ 

        movilidad = true;

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(4) == '0'){

    }else if(katzbinario.charAt(4) == '1'){

        contador++;

    }else{

        todos = false;

    }



    if(katzbinario.charAt(5) == '0'){

    }else if(katzbinario.charAt(5) == '1'){

        contador++;

    }else{

        todos = false;

    }



    if(contador == 0 || contador == 1){

        texto = "Ausencia de incapacidad o incapacidad leve";

    }else if(contador == 2 || contador == 3){

        texto = "Incapacidad moderada";

    }else{

        texto = "Incapacidad severa";

    }





    //If final que te saca la clasificación por letras



    if(contador == 0){

        clasificacion = "A";

    }else if(contador == 1){

        clasificacion = "B";

    }else if(contador == 2){

        if(bano){

            clasificacion = "C";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 3){

        if(bano && vestido){

            clasificacion = "D";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 4){

        if(bano && vestido && wc){

            clasificacion = "E";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 5){

        if(bano && vestido && wc && movilidad){

            clasificacion = "F";

        }else{

            clasificacion = "H";

        }

    }else if(contador == 6){

        clasificacion = "G";

    }

	return contador + " " + clasificacion;
}

function traductbarthel(barthelnumero){
	if(barthelnumero == null || barthelnumero == undefined || barthelnumero == "0000000000"){
		return "?";
	}
	var contador = 0;
	var texto = "";
	switch(barthelnumero.charAt(0)){
		case '1': contador += 10;
				break;
		case '2': contador += 5;
		break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(1)){
		case '1': contador += 5;
			break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(2)){
		case '1': contador += 10;
				break;
		case '2': contador += 5;
		break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(3)){
		case '1': contador += 5;
				break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(4)){
		case '1': contador += 10;
				break;
		case '2': contador += 5;
		break;
		default:
		break;
	}

	switch(barthelnumero.charAt(5)){
		case '1': contador += 10;
				break;
		case '2': contador += 5;
		break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(6)){
		case '1': contador += 10;
				break;
		case '2': contador += 5;
		break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(7)){
		case '1': contador += 15;
				break;
		case '2': contador += 10;
		break;
		case '3': contador += 5;
		break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(8)){
		case '1': contador += 15;
				break;
		case '2': contador += 10;
		break;
		case '3': contador += 5;
		break;
		default: 
		break;
	}

	switch(barthelnumero.charAt(9)){
		case '1': contador += 10;
				break;
		case '2': contador += 5;
		break;
		default: 
		break;
	}

	if(contador < 20){
        texto = "Total ";
    }else if(contador >= 20 && contador <= 35){
        texto = "Grave";
    }else if(contador >= 40  && contador <= 55){
        texto = "Incaacidad moderada";
    }else if(contador >= 60 && contador != 100 ){
        texto = "Leve";
    }else{
        texto = "Independiente";
    }

	return texto + " (" + contador + ")";
}

function resulkath(){
	var result = "";
	if($("#B[name='B']")[0].checked){
        result+="0";
    }else if($("#B[name='B']")[1].checked){ 
        result+="1";
    }

    if($("#V[name='V']")[0].checked){
        result+="0";
    }else if($("#V[name='V']")[1].checked){ 
        result+="1";
    }

    if($("#WC[name='WC']")[0].checked){
        result+="0";
    }else if($("#WC[name='WC']")[1].checked){ 
        result+="1";
    }

    if($("#M[name='M']")[0].checked){
        result+="0";
    }else if($("#M[name='M']")[1].checked){ 
        result+="1";
    }

    if($("#C[name='C']")[0].checked){
		result+="0";
    }else if($("#C[name='C']")[1].checked){
        result+="1";
    }

    if($("#A[name='A']")[0].checked){
		result+="0";
    }else if($("#A[name='A']")[1].checked){
        result+="1";
    }
	if(result.length != 6){
		result = null;
	}

	return result;
}

function resulkathmodificar(){
	var result = "";
	if($("#BM[name='BM']")[0].checked){
        result+="0";
    }else if($("#BM[name='BM']")[1].checked){ 
        result+="1";
    }

    if($("#L[name='L']")[0].checked){
        result+="0";
    }else if($("#L[name='L']")[1].checked){ 
        result+="1";
    }

    if($("#BC[name='BC']")[0].checked){
        result+="0";
    }else if($("#BC[name='BC']")[1].checked){ 
        result+="1";
    }

    if($("#T[name='T']")[0].checked){
        result+="0";
    }else if($("#T[name='T']")[1].checked){ 
        result+="1";
    }

    if($("#Z[name='Z']")[0].checked){
		result+="0";
    }else if($("#Z[name='Z']")[1].checked){
        result+="1";
    }

    if($("#O[name='O']")[0].checked){
		result+="0";
    }else if($("#O[name='O']")[1].checked){
        result+="1";
    }

	if(result.length != 6){
		result = null;
	}

	return result;
}
//En pruebas
function resulbarthel(){

	var relleno = true;

	var result = "";
	if($("[name='uno']").val() == "valuno"){
        result += "1";
    }else if($("[name='uno']").val()=="valdos"){ 
        result+="2";
    }else if($("[name='uno']").val() == "nada"){
		relleno = false;
    }else{
        result+="3";
    }

    

    if($("[name='dos']").val() == "valuno"){
		result += "1";
    }else if($("[name='dos']").val() == "nada"){
        relleno = false;
    }else{
        result+="2";
    }



    if($("[name='tres']").val() == "valuno"){
        result += "1";
    }else if($("[name='tres']").val()=="valdos"){
        result += "2";
    }else if($("[name='tres']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='cuatro']").val() == "valuno"){
        result += "1";
    }else if($("[name='cuatro']").val() == "nada"){
        relleno = false;
    }else{
        result += "2";
    }



    if($("[name='cinco']").val() == "valuno"){
        result += "1";
    }else if($("[name='cinco']").val()=="valdos"){
        result += "2";
    }else if($("[name='cinco']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='seis']").val() == "valuno"){
        result += "1";
    }else if($("[name='seis']").val()=="valdos"){
        result += "2";
    }else if($("[name='seis']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='siete']").val() == "valuno"){
        result += "1";
    }else if($("[name='siete']").val()=="valdos"){
        result += "2";
    }else if($("[name='siete']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='ocho']").val() == "valuno"){
        result += "1";
    }else if($("[name='ocho']").val()=="valdos"){
        result += "2";
    }else if($("[name='ocho']").val()=="valtres"){
        result += "3";
    }else if($("[name='ocho']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='nueve']").val() == "valuno"){
        result += "1";
    }else if($("[name='nueve']").val()=="valdos"){
        result += "2";
    }else if($("[name='nueve']").val()=="valtres"){
        result += "3";
    }else if($("[name='nueve']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='diez']").val() == "valuno"){
        result += "1";
    }else if($("[name='diez']").val()=="valdos"){
        result += "2";
    }else if($("[name='diez']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }


	if(!relleno){
		result = "0000000000";
	}

	return result;
}

function resulbarthel2(){

	var relleno = true;

	var result = "";
	if($("[name='unouno']").val() == "valuno"){
        result += "1";
    }else if($("[name='unouno']").val()=="valdos"){ 
        result+="2";
    }else if($("[name='unouno']").val() == "nada"){
		relleno = false;
    }else{
        result+="3";
    }

    

    if($("[name='dosdos']").val() == "valuno"){
		result += "1";
    }else if($("[name='dosdos']").val() == "nada"){
        relleno = false;
    }else{
        result+="2";
    }



    if($("[name='trestres']").val() == "valuno"){
        result += "1";
    }else if($("[name='trestres']").val()=="valdos"){
        result += "2";
    }else if($("[name='trestres']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='cuatrocuatro']").val() == "valuno"){
        result += "1";
    }else if($("[name='cuatrocuatro']").val() == "nada"){
        relleno = false;
    }else{
        result += "2";
    }



    if($("[name='cincocinco']").val() == "valuno"){
        result += "1";
    }else if($("[name='cincocinco']").val()=="valdos"){
        result += "2";
    }else if($("[name='cincocinco']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='seisseis']").val() == "valuno"){
        result += "1";
    }else if($("[name='seisseis']").val()=="valdos"){
        result += "2";
    }else if($("[name='seisseis']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='sietesiete']").val() == "valuno"){
        result += "1";
    }else if($("[name='sietesiete']").val()=="valdos"){
        result += "2";
    }else if($("[name='sietesiete']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='ochoocho']").val() == "valuno"){
        result += "1";
    }else if($("[name='ochoocho']").val()=="valdos"){
        result += "2";
    }else if($("[name='ochoocho']").val()=="valtres"){
        result += "3";
    }else if($("[name='ochoocho']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='nuevenueve']").val() == "valuno"){
        result += "1";
    }else if($("[name='nuevenueve']").val()=="valdos"){
        result += "2";
    }else if($("[name='nuevenueve']").val()=="valtres"){
        result += "3";
    }else if($("[name='nuevenueve']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='diezdiez']").val() == "valuno"){
        result += "1";
    }else if($("[name='diezdiez']").val()=="valdos"){
        result += "2";
    }else if($("[name='diezdiez']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }


	if(!relleno){
		result = "0000000000";
	}

	console.log(result);

	return result;
}

function resulbarthelpai(){

	var relleno = true;

	var result = "";
	if($("[name='uno']").val() == "valuno"){
        result += "1";
    }else if($("[name='uno']").val()=="valdos"){ 
        result+="2";
    }else if($("[name='uno']").val() == "nada"){
		relleno = false;
    }else{
        result+="3";
    }

    

    if($("[name='dos']").val() == "valuno"){
		result += "1";
    }else if($("[name='dos']").val() == "nada"){
        relleno = false;
    }else{
        result+="2";
    }



    if($("[name='tres']").val() == "valuno"){
        result += "1";
    }else if($("[name='tres']").val()=="valdos"){
        result += "2";
    }else if($("[name='tres']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='cuatro']").val() == "valuno"){
        result += "1";
    }else if($("[name='cuatro']").val() == "nada"){
        relleno = false;
    }else{
        result += "2";
    }



    if($("[name='cinco']").val() == "valuno"){
        result += "1";
    }else if($("[name='cinco']").val()=="valdos"){
        result += "2";
    }else if($("[name='cinco']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='seis']").val() == "valuno"){
        result += "1";
    }else if($("[name='seis']").val()=="valdos"){
        result += "2";
    }else if($("[name='seis']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='siete']").val() == "valuno"){
        result += "1";
    }else if($("[name='siete']").val()=="valdos"){
        result += "2";
    }else if($("[name='siete']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }



    if($("[name='ocho']").val() == "valuno"){
        result += "1";
    }else if($("[name='ocho']").val()=="valdos"){
        result += "2";
    }else if($("[name='ocho']").val()=="valtres"){
        result += "3";
    }else if($("[name='ocho']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='nueve']").val() == "valuno"){
        result += "1";
    }else if($("[name='nueve']").val()=="valdos"){
        result += "2";
    }else if($("[name='nueve']").val()=="valtres"){
        result += "3";
    }else if($("[name='nueve']").val() == "nada"){
        relleno = false;
    }else{
        result += "4";
    }



    if($("[name='diez']").val() == "valuno"){
        result += "1";
    }else if($("[name='diez']").val()=="valdos"){
        result += "2";
    }else if($("[name='diez']").val() == "nada"){
        relleno = false;
    }else{
        result += "3";
    }


	if(!relleno){
		result = "0000000000";
	}

	console.log(result);

	return result;
}

function obtenerNumeroExpediente(apellido1,nombre){
	
	var nExpediente="";
	var prefijo= (apellido1.substring(0,2) + nombre.substring(0,1)).toUpperCase();
	
	var postObj = {			
		prefijo : prefijo
	}
	
	$.ajax({
        url: '../controllers/residente.php?task=getExpediente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {		
			nExpediente =  $.parseJSON(data).nExpediente;	
		}
	});
	
	return nExpediente;

}

function bajaResidente(){
	
	let modoBusqueda = $('#ver-baja-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-baja-residente'));
	let motivoBaja;
	let fechaEng= convertirFechaEspIngles($('#fechaBajaResidente').val());
	let resultadoBusqueda = $('#busquedaBajaResidente').val();
	
	motivoBaja = $('#motivoBajaResidente').val();
	
	if(motivoBaja == "otras")
		motivoBaja = $('#textoOtrasBajaResidente').val();
			
	var objetoCamposUpdate = {			
		fecha_baja : fechaEng,
		motivo_baja : motivoBaja
	}
	
	var objetoCamposWhere = {			
		id_residente : idResidente
	}
	           
    $.ajax({
		url: '../controllers/residente.php?task=bajaResidente',
		type: "POST",
		async: false,
		data: {objetoCamposUpdate,objetoCamposWhere},
		dataType: "html",
		success: function(data) {
			swal({
				title: "ACTUALIZADO",
				text:  "Residente dado de baja correctamente",
				buttons: false,
				icon:  "success",
				timer: 2500,
			});
			
			setTimeout('location.reload()',2000); 
		},
		error: function(data) {
			let respuesta =  $.parseJSON(data.responseText);
			swal({
				title: "ERROR",
				text:  respuesta.message,
				buttons: false,
				icon:  "error",
				timer: 2500,
			});
		}
	});
}

function marcarSelectsBarthel(stringNumeroBarthel){
	
	switch(stringNumeroBarthel.charAt(0)){
		case '1': $("[name='unouno']").val('valuno').change();
				break;
		case '2': $("[name='unouno']").val('valdos').change();
		break;
		case '3': $("[name='unouno']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(1)){
		case '1': $("[name='dosdos']").val('valuno').change();
				break;
		case '2': $("[name='dosdos']").val('valdos').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(2)){
		case '1': $("[name='trestres']").val('valuno').change();
				break;
		case '2': $("[name='trestres']").val('valdos').change();
		break;
		case '3': $("[name='trestres']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(3)){
		case '1': $("[name='cuatrocuatro']").val('valuno').change();
				break;
		case '2': $("[name='cuatrocuatro']").val('valdos').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(4)){
		case '1': $("[name='cincocinco']").val('valuno').change();
				break;
		case '2': $("[name='cincocinco']").val('valdos').change();
		break;
		case '3': $("[name='cincocinco']").val('valtres').change();
		break;
		default:
		break;
	}

	switch(stringNumeroBarthel.charAt(5)){
		case '1': $("[name='seisseis']").val('valuno').change();
				break;
		case '2': $("[name='seisseis']").val('valdos').change();
		break;
		case '3': $("[name='seisseis']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(6)){
		case '1': $("[name='sietesiete']").val('valuno').change();
				break;
		case '2': $("[name='sietesiete']").val('valdos').change();
		break;
		case '3': $("[name='sietesiete']").val('valtres').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(7)){
		case '1': $("[name='ochoocho']").val('valuno').change();
				break;
		case '2': $("[name='ochoocho']").val('valdos').change();
		break;
		case '3': $("[name='ochoocho']").val('valtres').change();
		break;
		case '4': $("[name='ochoocho']").val('valcuatro').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(8)){
		case '1': $("[name='nuevenueve']").val('valuno').change();
				break;
		case '2': $("[name='nuevenueve']").val('valdos').change();
		break;
		case '3': $("[name='nuevenueve']").val('valtres').change();
		break;
		case '4': $("[name='nuevenueve']").val('valcuatro').change();
		break;
		default: 
		break;
	}

	switch(stringNumeroBarthel.charAt(9)){
		case '1': $("[name='diezdiez']").val('valuno').change();
				break;
		case '2': $("[name='diezdiez']").val('valdos').change();
		break;
		case '3': $("[name='diezdiez']").val('valtres').change();
		break;
		default: 
		break;
	}

	
}

function cargarDatosResidente(){
	
	let modoBusqueda = $('#ver-modificar-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-residente'));
	let respuesta;
	let datosResidente;
	let $form = $('#seccionModificarResidente');
	let $discapacidadCheckBoxes = $("[class~='discapacidadModif'] input[type=checkbox]");
	let $sitMedicaCheckBoxes = $("[class~='sitMedicaModif'] input[type=checkbox]");
	
	let postObj = {			
		id_residente : idResidente
	}

    $.ajax({
        url: '../controllers/residente.php?task=consultarResidente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			datosResidente =  respuesta.datosResidente;
			if(respuesta.status == "WARNING"){
				swal({
					title: "WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
			}
		}
	});
	if(datosResidente != undefined && Object.keys(datosResidente).length > 0){
		
		//recuperamos los datos del residente, familiar...
		Object.entries(datosResidente).forEach(([clave, valor]) => {
			let name= "[name='" + clave +"']";
			$form.find(name).val(valor);
		});

		//recuperamos los datos de la habitación y del responsable
		if(datosResidente.id_habitacion != null && datosResidente.id_habitacion != ""){
			$('#responsableResidenteModif').empty();
			$('#listadoResponsablesLabelModif').show();
			$('#listadoResponsablesSelectModif').show();
			$('#habitacionResidenteModif').val(datosResidente.id_habitacion);
			mostrarResponsablesPlanta(datosResidente.id_habitacion);
			$('#responsableResidenteModif').val(datosResidente.id_personal_responsable);
		}else{
			$('#habitacionResidenteModif').val("No tiene habitacion asignada");
			$('#responsableResidenteModif').empty();
			$('#listadoResponsablesLabelModif').hide();
			$('#listadoResponsablesSelectModif').hide();
		}
		
		//recuperamos los datos de DISCAPACIDAD y SITUACION MEDICA
		var respuestaDiscapacidad = $.parseJSON(datosResidente.discapacidad);
		var respuestaSitMedica = $.parseJSON(datosResidente.situacion_medica);
		
		
		
		$discapacidadCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',respuestaDiscapacidad[check.id]);
			if(check.id == "otraDiscapacidad"){
				if(respuestaDiscapacidad[check.id]!=false){
					$("[name='otraDiscapacidadTextoModif']").val(respuestaDiscapacidad['otraDiscapacidadTexto']);
					$("#otraDiscapacidadTextoModif").show();
				}else{
					$("#otraDiscapacidadTextoModif").hide();
					$("[name='otraDiscapacidadTextoModif']").val("");
				}
			}
		});
		
		$sitMedicaCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',respuestaSitMedica[check.id]);
			if(check.id == "otraSitMedica"){
				if(respuestaSitMedica[check.id]!=false){
					$("[name='otraSitMedicaTextoModif']").val(respuestaSitMedica['otraSitMedicaTexto']);
					$("#otraSitMedicaTextoModif").show();
				}else{
					$("#otraSitMedicaTextoModif").hide();
					$("[name='otraSitMedicaTextoModif']").val("");
				}
			}
		});
		
		//calculamos la edad
		$form.find($('[name="edad"]')).val(calcularEdad(datosResidente.fecha_nacimiento));

		//Marcamos los checks del test de katz

		if(datosResidente.kath != undefined){
			$("[name='BM']")[parseInt(datosResidente.kath.charAt(0))].click();
			$("[name='L']")[parseInt(datosResidente.kath.charAt(1))].click();
			$("[name='BC']")[parseInt(datosResidente.kath.charAt(2))].click();
			$("[name='T']")[parseInt(datosResidente.kath.charAt(3))].click();
			$("[name='Z']")[parseInt(datosResidente.kath.charAt(4))].click();
			$("[name='O']")[parseInt(datosResidente.kath.charAt(5))].click();
			
			katz2();
		}else{
			var radio = document.querySelectorAll('input[type=radio]:checked');
			radio.forEach(element => {
    			element.checked = false;
			});
			$("#IK2").val("");
        	$("#J2").val("");
		}
		
		

		//marcamos las opciones del test de Barthel
		if(datosResidente.barthel != undefined && datosResidente.barthel != null){
			marcarSelectsBarthel(datosResidente.barthel);

			calcular2();
		}else{
			
			$("[name='unouno']").val('nada').change();
			$("[name='dosdos']").val('nada').change();
			$("[name='trestres']").val('nada').change();
			$("[name='cuatrocuatro']").val('nada').change();
			$("[name='cincocinco']").val('nada').change();
			$("[name='seisseis']").val('nada').change();
			$("[name='sietesiete']").val('nada').change();
			$("[name='ochoocho']").val('nada').change();
			$("[name='nuevenueve']").val('nada').change();
			$("[name='diezdiez']").val('nada').change();

			$("#result").val("");
    		$("#result1").val("");
		}
		
		//RELLENAMOS AQUI LA TABLA DE MEDICACIÓN
		$("#tabla-medicacion-mod").addClass("d-none");
		$("#btn-empty-medic-mod").addClass("d-none");
		$("#tabla-medicacion-res-mod tbody").remove();

		if(datosResidente.arrayMedicacion != "nada"){
			$("#tabla-medicacion-res-mod").append("<tbody></tbody>");

			datosResidente.arrayMedicacion.forEach(element => {
				var fila = "";
					fila+= "<tr>";
					fila += "<td>" + element.nombreMed + "</td>";
					fila += "<td>" + element.tipoMed + "</td>";
					fila += "<td>" + element.viaMed + "</td>";
					fila += "<td>" + element.unidadMed + "</td>";
					fila += "<td>" + element.desayunoMed + "</td>";
					fila += "<td>" + element.comidaMed + "</td>";
					fila += "<td>" + element.meriendaMed + "</td>";
					fila += "<td>" + element.cenaMed + "</td>";
					fila+= "</tr>";
				$("#tabla-medicacion-res-mod tbody").append(fila);
			});

			$("#tabla-medicacion-mod").removeClass("d-none");
			$("#btn-empty-medic-mod").removeClass("d-none");
			$('#form-medic-1-mod').addClass("d-none");
			$('#form-medic-2-mod').addClass("d-none");
			$("#btn-new-medic-mod").removeClass("d-none");
		}else{
			$("#tabla-medicacion-mod").addClass("d-none");
		}
		

		
		
	}else{
		$form.find($('.form-control')).each(function(index){
			$(this).val("");
		});	
		$discapacidadCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',false);
		});
		$sitMedicaCheckBoxes.each(function(index, check ){		
			$(check).prop('checked',false);
		});
		$('#habitacionResidenteModif').val("");
		$('#responsableResidenteModif').empty();
		$('#gradoDependenciaModif').val("0");
		
	}

}

function  busquedaIdResidente(modobusqueda,seccionMenu){

	let idResidente;
		
	if(modobusqueda=="busquedaDni")
		idResidente = $(seccionMenu).find($('.dni-residente')).val();
	else if(modobusqueda=="busquedaApellidos")
		idResidente = $(seccionMenu).find($('.apellidos-residente')).val();
	else if(modobusqueda=="busquedaExpediente")
		idResidente = $(seccionMenu).find($('.expediente-residente')).val();
	else
		idResidente = $(seccionMenu).find($('.habitacion-residente')).val();
		
	return idResidente;
}

function modificarResidente(){
	
	let modoBusqueda = $('#ver-modificar-residente').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-residente'));
	let respuesta;
	let datosDiscapacidad=new Object();
	let datosSitMedica=new Object();
	
	let $discapacidadCheckBoxes = $("[class~='discapacidadModif'] input[type=checkbox]");
	let $sitMedicaCheckBoxes = $("[class~='sitMedicaModif'] input[type=checkbox]");
	
	$discapacidadCheckBoxes.each(function(index, check ){
		datosDiscapacidad[check.id] = check.checked;
		if(check.id == "otraDiscapacidad"){
			if(check.checked)
				datosDiscapacidad['otraDiscapacidadTexto'] = $("[name='otraDiscapacidadTextoModif']").val();	
			else
				datosDiscapacidad['otraDiscapacidadTexto']="";
		}
	});
	
	$sitMedicaCheckBoxes.each(function(index, check ){
		datosSitMedica[check.id] = check.checked;
		if(check.id == "otraSitMedica"){
			if(check.checked)
				datosSitMedica['otraSitMedicaTexto'] = $("[name='otraSitMedicaTextoModif']").val();	
			else
				datosSitMedica['otraSitMedicaTexto']="";
		}
	});
	
	var datosResidente;

	$.ajax({
		url: '../controllers/residente.php?task=nMedicacion',
		type: "POST",
		data: {},
		async: false,
		dataType: "html",
		success: function(data1) {	
			let respuesta1 =  $.parseJSON(data1);
			var numero = respuesta1.n_medicacion;

			datosResidente ={
				id_residente : idResidente,
				dni_residente : $('#dniResidenteModif').val(),
				nombre : $('#nombreResidenteModif').val(),
				apellido1 : $('#apellido1ResidenteModif').val(),
				apellido2 : $('#apellido2ResidenteModif').val(),
				fecha_nacimiento: $('#fechaNacimientoModif').val(),
				grado_dependencia : $('#gradoDependenciaModif').val(),
				discapacidad : JSON.stringify(datosDiscapacidad,escaparComillas),
				situacion_medica : JSON.stringify(datosSitMedica,escaparComillas),
				id_personal_responsable : $('#responsableResidenteModif').val(),
				kath: resulkathmodificar(),
				barthel: resulbarthel2(),
				medicacion: numero
			};
		}
	});
			
	
	
	
	
	var datosFamiliar={
		
		dni_familiar : $('#dniFamiliarModif').val(),
        nombre_familiar : $('#nombreFamiliarModif').val(),
        apellidos : $('#apellidosFamiliarModif').val(),
        direccion_postal : $('#direccionFamiliarModif').val(),
		codigo_postal : $('#codigoPostalFamiliarModif').val(),
		parentesco : $('#parentescoFamiliarModif').val(),
        telefono : $('#telefonoFamiliarModif').val(),
        email : $('#emailFamiliarModif').val()
	};
				
	var objetoCamposWhere = {			
		id_residente : idResidente		
	}
	
	

	let postObj = {			
		id_residente : idResidente
	}
	$.ajax({
        url: '../controllers/residente.php?task=consultarResidente',
        type: "POST",
        async: false,
        data: postObj,
		dataType: "html",
        success: function(data) {	
			respuesta = $.parseJSON(data);
			var medicamentos =  respuesta.datosResidente.arrayMedicacion;
			//Obtenidos los datos de la medicación de esta persona, llamamos a nMedicacion Para obtener el numero de medicacion para la nueva medicacion
			$.ajax({
				url: '../controllers/residente.php?task=nMedicacion',
				type: "POST",
				data: {},
				async: false,
				dataType: "html",
				success: function(data1) {	
					let respuesta1 =  $.parseJSON(data1);
					var numero = respuesta1.n_medicacion;
					//Obtenida la medicacion de esta persona y su nuevo numero llamamos a modificarmedicacion
					var n_medicacion_persona = medicamentos[0].n_medicacion;
					var n_medicacion_nuevo = numero;
				$.ajax({
					url: '../controllers/residente.php?task=modificarMedicacion',
					type: "POST",
					async: false,
					data: {n_medicacion_persona},
					dataType: "html",
					success: function(data) {	
						respuesta = $.parseJSON(data);
					}
				});
				if($("#tabla-medicacion-res-mod tbody tr").length > 0){
					$("#tabla-medicacion-res-mod tbody tr").each(function(e){
						var fila = $(this);
						var columnas = fila.find("td");
						var datosMedicacion = {
							nombre: columnas[0].textContent,
							tipo: columnas[1].textContent,
							via: columnas[2].textContent,
							unidad: columnas[3].textContent,
							desayuno: columnas[4].textContent,
							comida: columnas[5].textContent,
							merienda: columnas[6].textContent,
							cena: columnas[7].textContent,
							n_medicacion: n_medicacion_nuevo
						};

						$.ajax({
							url: '../controllers/residente.php?task=altaMedicacion',
							type: "POST",
							data: {datosMedicacion, n_medicacion_nuevo},
							async: false,
							dataType: "html",
							success: function(data) {	
								let respuesta =  $.parseJSON(data);
								if(respuesta.status == "WARNING"){
									swal({
										title: "INSERTADA CON WARNING",
										text:  respuesta.message,
										buttons: false,
										icon:  "warning",
										timer: 2500,
									});
									
								}else{
									swal({
										title: "INSERTADA",
										text:  "Medicación insertada correctamente",
										buttons: false,
										icon:  "success",
										timer: 1500,
									});
								}
								setTimeout('location.reload()',2000); 
							},
							error: function(data) {
								let respuesta =  $.parseJSON(data.responseText);
								swal({
									title: "ERROR",
									text:  respuesta.message,
									buttons: false,
									icon:  "error",
									timer: 2500,
								});
							}
						});	


					});
				}
					
				}
			});

			
			
		}
	});
	$.ajax({
		url: '../controllers/residente.php?task=modificarResidente',
		type: "POST",
		async: false,
		data: {datosResidente,datosFamiliar,objetoCamposWhere},
		dataType: "html",
		success: function(data) {
			let respuesta =  $.parseJSON(data);
			console.log(respuesta.sql);
			if(respuesta.status == "WARNING"){
				swal({
					title: "MODIFICADO CON WARNING",
					text:  respuesta.message,
					buttons: false,
					icon:  "warning",
					timer: 2500,
				});
				
			}else{
				swal({
					title: "MODIFICADO",
					text:  "Residente modificado correctamente",
					buttons: false,
					icon:  "success",
					timer: 1500,
				});
			}
			setTimeout('location.reload()',2000); 
		},
		error: function(data) {
			let respuesta =  $.parseJSON(data.responseText);
			swal({
				title: "ERROR",
				text:  respuesta.message,
				buttons: false,
				icon:  "error",
				timer: 2500,
			});
		}
	});
}

function cargarDatosContacto(){
	
	let modoBusqueda = $('#ver-datos-contacto').find('.modoBusquedaResidente').val();
	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-datos-contacto'));
	
	if(idResidente != undefined && idResidente != ""){
		$('#ver-tabla-datos').show(); //tabla-horario
		tablaDatosContacto(idResidente);		
	}else
		$('#ver-tabla-datos').hide();	
}

function calcularEdad(fechaNacimiento){
	let hoy = new Date();
	let fechaArray= fechaNacimiento.split("/");
    let cumpleanos = new Date(fechaArray[2],fechaArray[1]-1,fechaArray[0]);
    let edad = hoy.getFullYear() - cumpleanos.getFullYear();
    let mes = hoy.getMonth() - cumpleanos.getMonth();

    if(edad <= 0)
		edad = 0;
	else if (mes < 0 || (mes == 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    return edad;	
}

function escaparComillas(key, value) {
	let resultado = value;
  if (typeof value === "string") {
	resultado = value.replace(/\"/g, '\\"');
  }
  return resultado;
}

function activarResidente(idResidente){

	var objetoCamposUpdate = {			
		fecha_baja : "null",
		motivo_baja : "null"
	}
	
	var objetoCamposWhere = {			
		id_residente : idResidente
	}

    $.ajax({
        url: '../controllers/residente.php?task=activarResidente',
        type: "POST",
        async: false,
        data: {objetoCamposUpdate,objetoCamposWhere},
		dataType: "html",
        success: function(data) {
			swal({
				title: "ACTUALIZADO",
				text:  "Residente activado correctamente",
				buttons: false,
				icon:  "success",
				timer: 2500,
			});
		},
		error: function(data) {
			swal({
				title: "ERROR",
				text:  "No ha sido posible realizar la activación",
				buttons: false,
				icon:  "error",
				timer: 2500,
			});
		}
	});
	
	
}

//FUNCION QUE GENERA TABLA CON DATOS DE CONTACTO DEL RESIDENTE
var tablaDatosContacto = function(id){
    var table = $('#tabla-datos').DataTable({
       dom: '', //dom: 'Bfrtip',
       buttons: [
             /*'excel', 'pdf', 'print'*/
       ],
        "destroy":true, //para que la tabla la pueda volver a cargar en cada consulta
        "ajax":{
			"method":"POST",
			"url":"../controllers/tablas.php?funcion=datoscontacto&idResidente="+id+""
        },
        "columns":[
            {"data":"nombre_familiar"},
            {"data":"apellidos"},
            {"data":"direccion_postal"},
			{"data":"codigo_postal"},
            {"data":"telefono"},
            {"data":"email"},
			{"data":"parentesco"}
        ]
    });
}

//FUNCION QUE GENERA TABLA DE LOS RESIDENTES HISTORICOS (NO ACTIVOS)
var tablaResidenteHistorico = function(){
    var table = $('#tabla-residente-historico').DataTable({
        dom: 'Bfrtip',
        buttons:[
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                pageSize: 'A3'
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',
				titleAttr: 'Imprimir',
                className: 'btn btn-info'
            }
        ],
        "order": [ 0, 'desc' ],
        "destroy":true,
        "ajax":{
          "method":"POST",
          "url":"../controllers/tablas.php?funcion=residentehistorico"
        },
        "columns":[
			{"data":"fecha_alta",visible: false},
			{"data":"n_expediente"},
			{"data":"dni_residente"},
			{"data":"nombre"},
			{"data":"apellido1"},
			{"data":"apellido2"},
			{"data": "fecha_nacimiento",render: function(fecha){
				return calcularEdad(fecha);
				}
			},
			{"data":"discapacidad"},
			{"data":"situacion_medica"},
			{"data":"grado_dependencia"},
			{"data":"fecha_alta", "orderData": 0, render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"fecha_baja", render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"motivo_baja"},
			{"data":"id_residente", render: function(idResidente){
				return '<div style="text-align: center;" ><input class="btn btn-outline-primary botonActivar botonActivarResidente" type="button" value="Activar" id='+idResidente+'></div>'
				}
			},
			{"data":"kath", render: function(katz){
				return traductkatz(katz);
			}},
			{"data":"barthel", render: function(barthel){
				return traductbarthel(barthel);
			}}
        ]
    });
	table.on( 'draw', function () {
		   $('.botonActivarResidente').click(function(){
				swal({
					title: "CAMBIAR A RESIDENTE EN ACTIVO",
					text:  "¿Está seguro de que quiere cambiar el estado a ACTIVO?",
					buttons: {
						Cancelar: {text: "Cancelar"},
						Confirmar: {text: "Confirmar"},
					},
					icon:  "warning"
				})
				.then((value) => {
					switch (value) {
						case "Confirmar":
							activarResidente($(this).attr("id"));
							tablaResidenteHistorico();
							if($('#de-alta-residente').is(':checked'))
								tablaResidenteDeAlta();
							setTimeout('location.reload()',2000);
							break;
						case "Cancelar":
							break;
					}
				});
			});
	   });
}

//FUNCION QUE GENERA TABLA CON TODOS LOS RESIDENTES ACTIVOS ACTUALES
var tablaResidenteDeAlta = function(){
      var table = $('#tabla-residente-de-alta').DataTable({
          dom: 'Bfrtip',
          buttons:[
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o" style="font-size: 1.25rem"></i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o" style="font-size: 1.25rem"></i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger',
                pageSize: 'A3'
            },
            {
                extend:    'print',
                text:      '<i class="fa fa-print" style="font-size: 1.25rem"></i> ',
                titleAttr: 'Imprimir',
                className: 'btn btn-info'
            }
        ],
        "order": [ 0, 'desc' ],
        "destroy":true,
        "ajax":{
            "method":"POST",
            "url":"../controllers/tablas.php?funcion=residentealta"
        },
        "columns":[
			{"data":"fecha_alta",visible: false},
            {"data":"n_expediente"},
			{"data":"dni_residente"},
			{"data":"nombre"},
			{"data":"apellido1"},
			{"data":"apellido2"},
			{"data": "fecha_nacimiento",render: function(fecha){
				return calcularEdad(fecha);
				}
			},
			{"data":"discapacidad"},
			{"data":"situacion_medica"},
			{"data":"grado_dependencia"},
			{"data":"fecha_alta", "orderData": 0, render: function(date){
				return dateFns.format(date, 'DD/MM/YYYY HH:mm')
				}
			},
			{"data":"kath", render: function(katz){
				return traductkatz(katz);
			}},
			{"data":"barthel", render: function(barthel){
				return traductbarthel(barthel);
			}}
        ]
    });
}

function mostrarNewMedicacion(){
	$('#form-medic-1').removeClass("d-none");
	$('#form-medic-2').removeClass("d-none");
	$("#btn-new-medic").addClass("d-none");
}

function cancelarNuevaMedicacion(){
	$('#form-medic-1').addClass("d-none");
	$('#form-medic-2').addClass("d-none");
	$("#btn-new-medic").removeClass("d-none");
}

function addMedicacionTabla(){

	//Aqui comprobamos si es la primera medicación que se añade
	var a = $("#tabla-medicacion-res tbody");
	if($("#tabla-medicacion-res tbody").length == 0){
		$("#tabla-medicacion-res").append("<tbody></tbody>");
	}

	//Por aqui añadimos cada campo a su columna
	var fila = "";
	fila+= "<tr>";
	fila += "<td>" + $("#nombreMedicamento").val() + "</td>";
	fila += "<td>" + $("#medicacion").val() + "</td>";
	fila += "<td>" + $("#seleccionVia").val() + "</td>";
	fila += "<td>" + $("#listadoUnidades").val() + "</td>";
	fila += "<td>" + $("#desayuno").val() + "</td>";
	fila += "<td>" + $("#comida").val() + "</td>";
	fila += "<td>" + $("#merienda").val() + "</td>";
	fila += "<td>" + $("#cena").val() + "</td>";
	fila+= "</tr>";
	$("#tabla-medicacion-res tbody").append(fila);


	//Ocultamos formulario y mostramos boton añadir, botón vaciar tabla y tabla

	$("#tabla-medicacion").removeClass("d-none");
	$("#btn-empty-medic").removeClass("d-none");
	$('#form-medic-1').addClass("d-none");
	$('#form-medic-2').addClass("d-none");
	$("#btn-new-medic").removeClass("d-none");
}

function limpiarTablaMedic(){
	$("#tabla-medicacion").addClass("d-none");
	$("#btn-empty-medic").addClass("d-none");

	$("#tabla-medicacion-res tbody").remove();
}

function validarNewMedicacion(){
	return $("#medicacion").val() != "" && $("#nombreMedicamento").val() != "" && $("#seleccionVia").val() != "" && $("#listadoUnidades").val() != "" && $("#desayuno").val() != "" && $("#comida").val() != "" && $("#merienda").val() != "" && $("#cena").val() != "";
}

//VERSION MODIFICAR

function mostrarNewMedicacion_mod(){
	$('#form-medic-1-mod').removeClass("d-none");
	$('#form-medic-2-mod').removeClass("d-none");
	$("#btn-new-medic-mod").addClass("d-none");
}

function cancelarNuevaMedicacion_mod(){
	$('#form-medic-1-mod').addClass("d-none");
	$('#form-medic-2-mod').addClass("d-none");
	$("#btn-new-medic-mod").removeClass("d-none");
}

function addMedicacionTabla_mod(){

	//Aqui comprobamos si es la primera medicación que se añade
	var a = $("#tabla-medicacion-res-mod tbody");
	if($("#tabla-medicacion-res-mod tbody").length == 0){
		$("#tabla-medicacion-res-mod").append("<tbody></tbody>");
	}

	//Por aqui añadimos cada campo a su columna
	var fila = "";
	fila+= "<tr>";
	fila += "<td>" + $("#nombreMedicamento-mod").val() + "</td>";
	fila += "<td>" + $("#medicacion-mod").val() + "</td>";
	fila += "<td>" + $("#seleccionVia-mod").val() + "</td>";
	fila += "<td>" + $("#listadoUnidades-mod").val() + "</td>";
	fila += "<td>" + $("#desayuno-mod").val() + "</td>";
	fila += "<td>" + $("#comida-mod").val() + "</td>";
	fila += "<td>" + $("#merienda-mod").val() + "</td>";
	fila += "<td>" + $("#cena-mod").val() + "</td>";
	fila+= "</tr>";
	$("#tabla-medicacion-res-mod tbody").append(fila);


	//Ocultamos formulario y mostramos boton añadir, botón vaciar tabla y tabla

	$("#tabla-medicacion-mod").removeClass("d-none");
	$("#btn-empty-medic-mod").removeClass("d-none");
	$('#form-medic-1-mod').addClass("d-none");
	$('#form-medic-2-mod').addClass("d-none");
	$("#btn-new-medic-mod").removeClass("d-none");
}

function limpiarTablaMedic_mod(){
	$("#tabla-medicacion-mod").addClass("d-none");
	$("#btn-empty-medic-mod").addClass("d-none");

	$("#tabla-medicacion-res-mod tbody").remove();
}

function validarNewMedicacion_mod(){
	return $("#medicacion-mod").val() != "" && $("#nombreMedicamento-mod").val() != "" && $("#seleccionVia-mod").val() != "" && $("#listadoUnidades-mod").val() != "" && $("#desayuno-mod").val() != "" && $("#comida-mod").val() != "" && $("#merienda-mod").val() != "" && $("#cena-mod").val() != "";
}