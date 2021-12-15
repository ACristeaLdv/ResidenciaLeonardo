function modificarPai(){

	

	$form=$('#formulario-pai');

	let modoBusqueda = $('#ver-modificar-plan').find('.modoBusquedaResidente').val();

	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-plan'));

	let respuesta;

	let data;

	let datosSociosanitarios=new Object();

	let areaSocial=new Object();

	let areaSanitaria=new Object();

	let areaPsicologica=new Object();

	let areaFuncional = new Object();

	let areaAnimacion = new Object();

	let dolor = new Object;

	let fechaElaboracion= $form.find('[name="fecha-evaluacion-pai"]').val();

	let fechaConvertida = convertirFechaEspIngles(fechaElaboracion.substr(0,10))+(fechaElaboracion.substr(11));	

	let $datosSociosanitariosFormControl = $(".datosSociosanitarios .form-control.anadir");

	let $areaSocialFormControl = $(".areaSocial .form-control");

	let $areaSanitariaFormControl = $(".areaSanitaria .form-control");

	let $areaPsicologicaFormControl = $(".areaPsicologica .form-control");

	let $areaFuncionalFormControl = $(".areaFuncional .form-control");

	let $areaAnimacionFormControl = $(".areaAnimacion .form-control");

	

	$datosSociosanitariosFormControl.each(function(index){

		datosSociosanitarios[$(this).attr('name')] = $(this).val();

	});

	

	$areaSocialFormControl.each(function(index){

		areaSocial[$(this).attr('name')] = $(this).val();

	});

	

	$areaSanitariaFormControl.each(function(index){

		if($(this).hasClass("summernote"))

			areaSanitaria[$(this).attr('name')] = $(this).summernote('code');

		else if($(this).hasClass("dolor"))

			dolor[$(this).attr('name')] = $(this).val();

		else

			areaSanitaria[$(this).attr('name')] = $(this).val();

	});

	

	$areaPsicologicaFormControl.each(function(index){

		areaPsicologica[$(this).attr('name')] = $(this).val();

	});

	

	$areaFuncionalFormControl.each(function(index){

		areaFuncional[$(this).attr('name')] = $(this).val();

	});

	

	$areaAnimacionFormControl.each(function(index){

		areaAnimacion[$(this).attr('name')] = $(this).val();

	});

	

	var $creenciasCheckbox = $("[class~='creenciasCheckbox'] input[type=checkbox]");

	var $areaSanitariaCheckbox = $("[class~='areaSanitariaCheckbox'] input[type=checkbox]");

	var $dolorCheckbox = $("[class~='dolorCheckbox'] input[type=checkbox]");

	var $areaPsicologicaCheckbox = $("[class~='areaPsicologicaCheckbox'] input[type=checkbox]");

	var $areaFuncionalCheckbox = $("[class~='areaFuncionalCheckbox'] input[type=checkbox]");

	var $areaAnimacionCheckbox = $("[class~='areaAnimacionCheckbox'] input[type=checkbox]");

	



	$creenciasCheckbox.each(function(index, check ){

		areaSocial[check.id] = check.checked;		

	});

	

	$areaSanitariaCheckbox.each(function(index, check ){

		areaSanitaria[check.id] = check.checked;		

	});

	

	$dolorCheckbox.each(function(index, check ){

		dolor[check.id] = check.checked;		

	});

	

	$areaPsicologicaCheckbox.each(function(index, check ){

		areaPsicologica[check.id] = check.checked;		

	});

	

	$areaFuncionalCheckbox.each(function(index, check ){

		areaFuncional[check.id] = check.checked;		

	});

	

	$areaAnimacionCheckbox.each(function(index, check ){

		areaAnimacion[check.id] = check.checked;		

	});

	

	areaSanitaria['dolor']=dolor;

	var numero;

	$.ajax({
		url: '../controllers/residente.php?task=nMedicacion',
		type: "POST",
		data: {},
		async: false,
		dataType: "html",
		success: function(data1) {	
			let respuesta1 =  $.parseJSON(data1);
			numero = respuesta1.n_medicacion;
		}
	});

	//AQUI OBTENEMOS EL NÚMERO DE LA NUEVA MEDICACIÓN

	var datosResidente={

		pai_datos_sociosanitarios : JSON.stringify(datosSociosanitarios,escaparSaltosLinea),

		pai_area_social : JSON.stringify(areaSocial,escaparSaltosLinea),

		pai_area_sanitaria : JSON.stringify(areaSanitaria,escaparSaltosLinea),

		pai_area_psicologica : JSON.stringify(areaPsicologica,escaparSaltosLinea),

		pai_area_funcional : JSON.stringify(areaFuncional,escaparSaltosLinea),

		pai_area_animacion : JSON.stringify(areaAnimacion,escaparSaltosLinea),

		grado_dependencia : $form.find('[name="grado_dependencia"]').val(),

		incapacidad_legal : $form.find('[name="incapacidad_legal"]').val(),

		pai_fecha_elaboracion : fechaConvertida,

		kath: convKathPAI(),

		barthel: convBarthelPAI(),

		medicacion: numero

		//AQUI AÑADIMOS EL NUMERO DE LA NUEVA MEDICACION
	};

	

	var objetoCamposWhere = {			

		id_residente : idResidente		

	}



	if($("#otroFamiliar").prop('checked')){

		var datosOtroFamiliar={

			dni_familiar : $form.find('[name="dni-otros-pai"]').val(),

			nombre_familiar : $form.find('[name="nombre-otros-pai"]').val(),

			apellidos : $form.find('[name="apellidos-otros-pai"]').val(),

			telefono :  $form.find('[name="telefono-otros-pai"]').val(),

			parentesco : $form.find('[name="parentesco-otros-pai"]').val()				

		};

		

		data = {datosResidente,datosOtroFamiliar,objetoCamposWhere};

	

	}else{

		data = {datosResidente,objetoCamposWhere};

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
					var numeropai = respuesta1.n_medicacion;
					//Obtenida la medicacion de esta persona y su nuevo numero llamamos a modificarmedicacion
					var n_medicacion_persona = medicamentos[0].n_medicacion;
					var n_medicacion_nuevo = numeropai;
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
				if($("#tabla-medicacion-res-pai tbody tr").length > 0){
					$("#tabla-medicacion-res-pai tbody tr").each(function(e){
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

		url: '../controllers/residente.php?task=modificarPai',

		type: "POST",

		async: false,

		data: data,

		dataType: "html",

		success: function(data) {

			let respuesta =  $.parseJSON(data);

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

					text:  "Modificado correctamente",

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

function cargarDatosPai(){

	

	let modoBusqueda = $('#ver-modificar-plan').find('.modoBusquedaResidente').val();

	let idResidente = busquedaIdResidente(modoBusqueda,$('#ver-modificar-plan'));

	let respuesta;

	let datosResidente;

	let datosOtroFamiliar;

	$form=$('#formulario-pai');

		

	var postObj = {			

		id_residente : idResidente

	}



    $.ajax({

        url: '../controllers/residente.php?task=consultarPai',

        type: "POST",

        async: false,

        data: postObj,

		dataType: "html",

        success: function(data) {	

			respuesta = $.parseJSON(data);

			datosResidente =  respuesta.datosResidente;

			if(respuesta.datosOtroFamiliar!=null)

				datosOtroFamiliar =  respuesta.datosOtroFamiliar;

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

		rellenarPai(datosResidente);

		if(datosOtroFamiliar != undefined && Object.keys(datosOtroFamiliar).length > 0){

			$("#otroFamiliar").prop('checked', true);

			$('.datosOtroFamiliar').prop('disabled', false);

			$form.find('[name="nombre-otros-pai').val(datosOtroFamiliar.nombre_familiar);

			$form.find('[name="apellidos-otros-pai').val(datosOtroFamiliar.apellidos);

			$form.find('[name="dni-otros-pai').val(datosOtroFamiliar.dni_familiar);

			$form.find('[name="telefono-otros-pai').val(datosOtroFamiliar.telefono);

			$form.find('[name="parentesco-otros-pai').val(datosOtroFamiliar.parentesco);



			

		}else{

			$("#otroFamiliar").prop('checked', false);

			$('.datosOtroFamiliar').prop('disabled', true);			

		}

        //Mostrar indice katz en el PAI

		if(datosResidente.kath != undefined){

			$("#B[name='B']")[parseInt(datosResidente.kath.charAt(0)) + 2].click();

			$("#V[name='V']")[parseInt(datosResidente.kath.charAt(1)) + 2].click();

			$("#WC[name='WC']")[parseInt(datosResidente.kath.charAt(2)) + 2].click();

			$("#M[name='M']")[parseInt(datosResidente.kath.charAt(3)) + 2].click();

			$("#C[name='C']")[parseInt(datosResidente.kath.charAt(4)) + 2].click();

			$("#A[name='A']")[parseInt(datosResidente.kath.charAt(5)) + 2].click();



			katzpai();

		}else{

			var radio = document.querySelectorAll('#alerta input[type=radio]:checked');

			radio.forEach(element => {

    			element.checked = false;

			});

			$("#IKpai").val("");

        	$("#Jpai").val("");

		}



		//Mostrar indice de barthel en PAI



		if(datosResidente.barthel != undefined){

			marcarSelectsBarthelPAI(datosResidente.barthel);



			calcularPAI();

		}else{

			$("[name='unopai']").val('nada').change();

			$("[name='dospai']").val('nada').change();

			$("[name='trespai']").val('nada').change();

			$("[name='cuatropai']").val('nada').change();

			$("[name='cincopai']").val('nada').change();

			$("[name='seispai']").val('nada').change();

			$("[name='sietepai']").val('nada').change();

			$("[name='ochopai']").val('nada').change();

			$("[name='nuevepai']").val('nada').change();

			$("[name='diezpai']").val('nada').change();



			$("#resultadopai").val("");

        	$("#resultado1pai").val("");

		}



		

	}else{

		$('#seccionPai').find($('.form-control')).each(function(index){

			$(this).val("");

		});		

	}

	$("#tabla-medicacion-pai").addClass("d-none");
	$("#btn-empty-medic-pai").addClass("d-none");
	$("#tabla-medicacion-res-pai tbody").remove();

	if(datosResidente.arrayMedicacion != "nada"){
		$("#tabla-medicacion-res-pai").append("<tbody></tbody>");

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
			$("#tabla-medicacion-res-pai tbody").append(fila);
		});

		$("#tabla-medicacion-pai").removeClass("d-none");
		$("#btn-empty-medic-pai").removeClass("d-none");
		$('#form-medic-1-pai').addClass("d-none");
		$('#form-medic-2-pai').addClass("d-none");
		$("#btn-new-medic-pai").removeClass("d-none");
	}else{
		$("#tabla-medicacion-pai").addClass("d-none");
	}

}

function rellenarPai(datosResidente){

	

	$form=$('#formulario-pai');

	let fechaActual = new Date();

	let fechaIngreso = new Date(datosResidente.fecha_alta);

	

	$form.find('[name="fecha-alta-pai').val(fechaIngreso.toLocaleString('en-GB'));

	$form.find('[name="fecha-evaluacion-pai').val(fechaActual.toLocaleString('en-GB'));

	

	if(datosResidente.pai_fecha_elaboracion!=null){

		let fechaElaboracion = new Date(datosResidente.pai_fecha_elaboracion);

		$form.find('[name="fecha-elaboracion-pai').val(fechaElaboracion.toLocaleString('en-GB'));

	}

	

	$form.find('[name="nombre-familiar-pai"]').val(datosResidente.apellidos + ", " + datosResidente.nombre_familiar);

	$form.find('[name="nombre-residente-pai"]').val(datosResidente.apellido1 + " " + datosResidente.apellido2 + ", " + datosResidente.nombre);



	//recuperamos los datos del residente, familiar, otro familiar...

	Object.entries(datosResidente).forEach(([clave, valor]) => {

		let name= "[name='" + clave +"']";

		$form.find(name).val(valor);

	});

	//Se oye?

	//añadimos el responable, si lo tuviera	

	if(datosResidente.id_habitacion != null && datosResidente.id_habitacion != "" && datosResidente.id_personal_responsable != null &&  datosResidente.id_personal_responsable != ""){

		$form.find('[name="responasable-pai"]').empty();

		mostrarResponsablesPlanta(datosResidente.id_habitacion);

		$form.find('[name="responasable-pai"] option').each(function(){

			if ($(this).val() != datosResidente.id_personal_responsable )        

				$(this).remove();	    

		});

	}else{

		$form.find('[name="responasable-pai"]').empty();

		$form.find('[name="responasable-pai"]').append($('<option>').text("No tiene responsable asignado").attr('value', ""));

	}



	//Recuperamos los diferentes JSON de la base de datos (de las diferentes áreas)

	let respuestaDatosSociosanitarios= $.parseJSON(datosResidente.pai_datos_sociosanitarios);

	let respuestaAreaSocial= $.parseJSON(datosResidente.pai_area_social);

	let respuestaAreaSanitaria= $.parseJSON(datosResidente.pai_area_sanitaria);	

	let respuestaAreaPsicologica= $.parseJSON(datosResidente.pai_area_psicologica);

	let respuestaAreaFuncional= $.parseJSON(datosResidente.pai_area_funcional);

	let respuestaAreaAnimacion= $.parseJSON(datosResidente.pai_area_animacion);

	

	//por otro lado, obtenemos los campos del formulario (por áreas) 

	let $datosSociosanitariosFormControl = $(".datosSociosanitarios .form-control.anadir");

	let $areaSocialFormControl = $(".areaSocial .form-control");

	let $creenciasCheckbox = $("[class~='creenciasCheckbox'] input[type=checkbox]");

	

	let $areaSanitariaFormControl = $(".areaSanitaria .form-control");

	let $areaSanitariaCheckbox = $("[class~='areaSanitariaCheckbox'] input[type=checkbox]");

	let $dolorCheckbox = $("[class~='dolorCheckbox'] input[type=checkbox]");

	

	let $areaPsicologicaFormControl = $(".areaPsicologica .form-control");

	let $areaPsicologicaCheckbox = $("[class~='areaPsicologicaCheckbox'] input[type=checkbox]");

	

	let $areaFuncionalFormControl = $(".areaFuncional .form-control");

	let $areaFuncionalCheckbox = $("[class~='areaFuncionalCheckbox'] input[type=checkbox]");

	

	let $areaAnimacionFormControl = $(".areaAnimacion .form-control");

	let $areaAnimacionCheckbox = $("[class~='areaAnimacionCheckbox'] input[type=checkbox]");

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área SOCIOSANITARIA

	if(respuestaDatosSociosanitarios != undefined && Object.keys(respuestaDatosSociosanitarios).length > 0){

		$datosSociosanitariosFormControl.each(function(index){

			if(respuestaDatosSociosanitarios[$( this ).attr('name')] != undefined)

				$(this).val(respuestaDatosSociosanitarios[$( this ).attr('name')]);

		});

		

	}

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área SOCIAL

	if(respuestaAreaSocial != undefined && Object.keys(respuestaAreaSocial).length > 0){

		$areaSocialFormControl.each(function(index){

			if(respuestaAreaSocial[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaSocial[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$creenciasCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaSocial[check.id]);

			if(check.id == "acudeServicios"){

				if(respuestaAreaSocial[check.id]!=false){

					$("[name='frecuenciaServicio']").val(respuestaAreaSocial['frecuenciaServicio']);

					$("#frecuenciaServicioSelect").removeClass("d-none");

				}else{

					$("#frecuenciaServicioSelect").addClass('d-none');

					$("[name='frecuenciaServicio']").val("");

				}

			}

		});

	}

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área SANITARIA

	if(respuestaAreaSanitaria != undefined && Object.keys(respuestaAreaSanitaria).length > 0){

		$areaSanitariaFormControl.each(function(index){

			if(respuestaAreaSanitaria[$(this).attr('name')] != undefined || respuestaAreaSanitaria['dolor'][$(this).attr('name')] != undefined){

				if($(this).hasClass("summernote"))

					$(this).summernote('code',respuestaAreaSanitaria[$(this).attr('name')]);

				else if($(this).hasClass("dolor"))

					$(this).val(respuestaAreaSanitaria['dolor'][$(this).attr('name')]);

				else

					$(this).val(respuestaAreaSanitaria[$(this).attr('name')]);

				

				

			}

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaSanitariaCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaSanitaria[check.id]);

			if(check.id == "ulcerasPiel"){

				if(respuestaAreaSanitaria[check.id]!=false){

					$("#camposUlcera").removeClass("d-none");

				}else{

					$("#camposUlcera").addClass('d-none');

					$('#gradoUlceraVascular').val('');

					$('#tratamientosUlceraVascular').val('');

					$('#otrosDatosUlceraVascular').val('');

				}

			}

			if(check.id == "ayudasTécnicas"){

				if(respuestaAreaSanitaria[check.id]!=false)

					$("#camposAyudasTecnicas").removeClass("d-none");

				else

					$("#camposAyudasTecnicas").addClass('d-none');

			}

			if(check.id == "encamamiento"){

				if(respuestaAreaSanitaria[check.id]!=false)

					$("#camposEncamamiento").removeClass("d-none");

				else

					$("#camposEncamamiento").addClass('d-none');

			}

		});

		

		$dolorCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaSanitaria['dolor'][check.id]);

		});

		

	}

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área Psicologica

	if(respuestaAreaPsicologica != undefined && Object.keys(respuestaAreaPsicologica).length > 0){

		$areaPsicologicaFormControl.each(function(index){

			if(respuestaAreaPsicologica[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaPsicologica[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaPsicologicaCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaPsicologica[check.id]);

			if(check.id == "antecedentesPsiquiatricos"){

				if(respuestaAreaPsicologica[check.id]!=false)

					$("#antecedentesPsiquiatricosArea").removeClass("d-none");

				else

					$("#antecedentesPsiquiatricosArea").addClass('d-none');

			}

		});

	}

	

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área Funcional

	if(respuestaAreaFuncional != undefined && Object.keys(respuestaAreaFuncional).length > 0){

		$areaFuncionalFormControl.each(function(index){

			if(respuestaAreaFuncional[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaFuncional[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaFuncionalCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaFuncional[check.id]);

		});

	}

	

	

	//Si ya hay datos en la BD, asignamos estos valores a los campos del área Animacion Sociocultural

	if(respuestaAreaAnimacion != undefined && Object.keys(respuestaAreaAnimacion).length > 0){

		$areaAnimacionFormControl.each(function(index){

			if(respuestaAreaAnimacion[$( this ).attr('name')] != undefined)

				$(this).val(respuestaAreaAnimacion[$( this ).attr('name')]);

		});

		

		//Hacemos lo propio con los checkboxes, y si están seleccionados aquellos que tienen campos ocultos, los mostramos

		$areaAnimacionCheckbox.each(function(index, check ){		

			$(check).prop('checked',respuestaAreaAnimacion[check.id]);

		});

	}



	//por último, activamos los campos ocultos que tengan información

	let $camposOcultos = $form.find($(".d-none"));

		

		$camposOcultos.each(function(index){

			if($( this ).val()!="")

				$(this).removeClass("d-none");

			else 

				$(this).addClass("d-none");

		});

		

	//Lo mismo con los disabled

	let $camposDisabled = $form.find(":disabled");

		

		$camposDisabled.each(function(index){

			if($( this ).val()!="")

				$(this).prop('disabled', false);

			else 

				$(this).prop('disabled', true);

		});

		

	//rellenamos la tabla de tratamientos

	tablaTratamientos(datosResidente.id_residente);

	

}

function escaparSaltosLinea(key, value) {

	let resultado = value;

  if (typeof value === "string") {

	resultado = value.replace(/\n/g, "\\n").replace(/\"/g, '\\"');

  }

  return resultado;

}

function limpiarPai(){

	$form=$('#formulario-pai');

	$form.find($(".form-control")).each(function(index){

		$( this ).val("");

		if($(this).hasClass("summernote"))

			$(this).summernote('code',"");

		if($(this).hasClass("dolor") && $(this).hasClass("selectConOtras"))

			$(this).prop('disabled', true);

	});

	

	$form.find($("input[type=checkbox]")).each(function(index){

			$( this ).prop('checked',false);

	});

	

	$form.find($(".ocultable")).each(function(index){

		$(this).addClass("d-none");

	});

}

function marcarSelectsBarthelPAI(stringNumeroBarthel){

	switch(stringNumeroBarthel.charAt(0)){

		case '1': $("[name='unopai']").val('valuno').change();

				break;

		case '2': $("[name='unopai']").val('valdos').change();

		break;

		case '3': $("[name='unopai']").val('valtres').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(1)){

		case '1': $("[name='dospai']").val('valuno').change();

				break;

		case '2': $("[name='dospai']").val('valdos').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(2)){

		case '1': $("[name='trespai']").val('valuno').change();

				break;

		case '2': $("[name='trespai']").val('valdos').change();

		break;

		case '3': $("[name='trespai']").val('valtres').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(3)){

		case '1': $("[name='cuatropai']").val('valuno').change();

				break;

		case '2': $("[name='cuatropai']").val('valdos').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(4)){

		case '1': $("[name='cincopai']").val('valuno').change();

				break;

		case '2': $("[name='cincopai']").val('valdos').change();

		break;

		case '3': $("[name='cincopai']").val('valtres').change();

		break;

		default:

		break;

	}



	switch(stringNumeroBarthel.charAt(5)){

		case '1': $("[name='seispai']").val('valuno').change();

				break;

		case '2': $("[name='seispai']").val('valdos').change();

		break;

		case '3': $("[name='seispai']").val('valtres').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(6)){

		case '1': $("[name='sietepai']").val('valuno').change();

				break;

		case '2': $("[name='sietepai']").val('valdos').change();

		break;

		case '3': $("[name='sietepai']").val('valtres').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(7)){

		case '1': $("[name='ochopai']").val('valuno').change();

				break;

		case '2': $("[name='ochopai']").val('valdos').change();

		break;

		case '3': $("[name='ochopai']").val('valtres').change();

		break;

		case '4': $("[name='ochopai']").val('valcuatro').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(8)){

		case '1': $("[name='nuevepai']").val('valuno').change();

				break;

		case '2': $("[name='nuevepai']").val('valdos').change();

		break;

		case '3': $("[name='nuevepai']").val('valtres').change();

		break;

		case '4': $("[name='nuevepai']").val('valcuatro').change();

		break;

		default: 

		break;

	}



	switch(stringNumeroBarthel.charAt(9)){

		case '1': $("[name='diezpai']").val('valuno').change();

				break;

		case '2': $("[name='diezpai']").val('valdos').change();

		break;

		case '3': $("[name='diezpai']").val('valtres').change();

		break;

		default: 

		break;

	}

}

function calcularPAI(){

	var comer;

    var lavarse;

    var vestirse;

    var arreglarse="";

    var deposiciones="";

    var miccion="";

    var retrete="";

    var trasladarse="";

    var deambular="";

    var escaleras="";

    var relleno=true;

    var mensaje="";

    var contador = 0;

    var texto;



    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia

    if($("[name='unopai']").val() == "valuno"){

        comer = "Totalmente independiente";

        contador += 10;

    }else if($("[name='unopai']").val()=="valdos"){ 

        comer = "Necesita ayuda para cortar carne, el pan, etc.";

        contador += 5;

    }else if($("[name='unopai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        comer = "Dependiente.";

    }



    



    if($("[name='dospai']").val() == "valuno"){

        lavarse = "Independiente, entra y sale solo del baño.";

        contador += 5;

    }else if($("[name='dospai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        lavarse = "Dependiente.";

    }







    if($("[name='trespai']").val() == "valuno"){

        vestirse = "Independiente. Capaz de ponerse y quitarse la ropa, abotonarse y atarse los zapatos.";

        contador += 10;

    }else if($("[name='trespai']").val()=="valdos"){

        vestirse = "Necesita ayuda.";

        contador += 5;

    }else if($("[name='trespai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        vestirse = "Dependiente.";

    }







    if($("[name='cuatropai']").val() == "valuno"){

        arreglarse = "Independiente para lavarse la cara, las manos, peinarse, afeitarse, maquillarse, etc...";

        contador += 5;

    }else if($("[name='cuatropai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        arreglarse = "Dependiente.";

    }







    if($("[name='cincopai']").val() == "valuno"){

        deposiciones = "Continencia normal.";

        contador += 10;

    }else if($("[name='cincopai']").val()=="valdos"){

        deposiciones = "Ocasionalmente algún episodio de incontinencia, o necesita ayuda para administrarse supositorios o lavativas.";

        contador += 5;

    }else if($("[name='cincopai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        deposiciones = "Incontinencia.";

    }







    if($("[name='seispai']").val() == "valuno"){

        miccion = "Continencia normal, o es capaz de cuidarse de la sondsa si tiene una puesta.";

        contador += 10;

    }else if($("[name='seispai']").val()=="valdos"){

        miccion = "1 episodio diario como máximo de incontinencia, o necesita ayuda para cuidar de la sonda.";

        contador += 5;

    }else if($("[name='seispai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        miccion = "Incontinencia";

    }







    if($("[name='sietepai']").val() == "valuno"){

        retrete = "Independiente para ir al cuardo de aseo, quitarse y ponerse la ropa.";

        contador += 10;

    }else if($("[name='sietepai']").val()=="valdos"){

        retrete = "Necesita ayuda para ir al retrete, pero se limpia solo.";

        contador += 5;

    }else if($("[name='sietepai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        retrete = "Dependiente.";

    }







    if($("[name='ochopai']").val() == "valuno"){

        trasladarse = "Independiente para ir del sillón a la cama.";

        contador += 15;

    }else if($("[name='ochopai']").val()=="valdos"){

        trasladarse = "Mínima ayuda física o supervisión para hacerlo.";

        contador += 10;

    }else if($("[name='ochopai']").val()=="valtres"){

        trasladarse = "Necesita gran ayuda, pero es capaz de mantenerse sentado solo.";

        contador += 5;

    }else if($("[name='ochopai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        trasladarse = "Dependiente.";

    }







    if($("[name='nuevepai']").val() == "valuno"){

        deambular = "Independiente, camina solo 50 metros.";

        contador += 15;

    }else if($("[name='nuevepai']").val()=="valdos"){

        deambular = "Necesita ayuda física o supervisión para andar 50 metros.";

        contador += 10;

    }else if($("[name='nuevepai']").val()=="valtres"){

        deambular = "Independiente en silla de ruedas sin ayuda.";

        contador += 5;

    }else if($("[name='nuevepai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        deambular = "Dependiente.";

    }







    if($("[name='diezpai']").val() == "valuno"){

        escaleras = "Independiente para bajar y subir escaleras.";

        contador += 10;

    }else if($("[name='diezpai']").val()=="valdos"){

        escaleras = "Necesita ayuda física o supervisión para hacerlo.";

        contador += 5;

    }else if($("[name='diezpai']").val() == "nada"){

        relleno = false;

        mensaje += "Tienes que seleccionar una opción\n";

    }else{

        escaleras = "Dependiente.";

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



    if(relleno){

        $("#resultadopai").val(contador);

        $("#resultado1pai").val(texto);

    }

}

function convKathPAI(){

	var result = "";

	if($("#B[name='B']")[2].checked){

        result+="0";

    }else if($("#B[name='B']")[3].checked){ 

        result+="1";

    }



    if($("#V[name='V']")[2].checked){

        result+="0";

    }else if($("#V[name='V']")[3].checked){ 

        result+="1";

    }



    if($("#WC[name='WC']")[2].checked){

        result+="0";

    }else if($("#WC[name='WC']")[3].checked){ 

        result+="1";

    }



    if($("#M[name='M']")[2].checked){

        result+="0";

    }else if($("#M[name='M']")[3].checked){ 

        result+="1";

    }



    if($("#C[name='C']")[2].checked){

		result+="0";

    }else if($("#C[name='C']")[3].checked){

        result+="1";

    }



    if($("#A[name='A']")[2].checked){

		result+="0";

    }else if($("#A[name='A']")[3].checked){

        result+="1";

    }

	if(result.length != 6){

		result = null;

	}



	return result;

}

function convBarthelPAI(){

	var relleno = true;



	var result = "";

	if($("[name='unopai']").val() == "valuno"){

        result += "1";

    }else if($("[name='unopai']").val()=="valdos"){ 

        result+="2";

    }else if($("[name='unopai']").val() == "nada"){

		relleno = false;

    }else{

        result+="3";

    }



    



    if($("[name='dospai']").val() == "valuno"){

		result += "1";

    }else if($("[name='dospai']").val() == "nada"){

        relleno = false;

    }else{

        result+="2";

    }







    if($("[name='trespai']").val() == "valuno"){

        result += "1";

    }else if($("[name='trespai']").val()=="valdos"){

        result += "2";

    }else if($("[name='trespai']").val() == "nada"){

        relleno = false;

    }else{

        result += "3";

    }







    if($("[name='cuatropai']").val() == "valuno"){

        result += "1";

    }else if($("[name='cuatropai']").val() == "nada"){

        relleno = false;

    }else{

        result += "2";

    }







    if($("[name='cincopai']").val() == "valuno"){

        result += "1";

    }else if($("[name='cincopai']").val()=="valdos"){

        result += "2";

    }else if($("[name='cincopai']").val() == "nada"){

        relleno = false;

    }else{

        result += "3";

    }







    if($("[name='seispai']").val() == "valuno"){

        result += "1";

    }else if($("[name='seispai']").val()=="valdos"){

        result += "2";

    }else if($("[name='seispai']").val() == "nada"){

        relleno = false;

    }else{

        result += "3";

    }







    if($("[name='sietepai']").val() == "valuno"){

        result += "1";

    }else if($("[name='sietepai']").val()=="valdos"){

        result += "2";

    }else if($("[name='sietepai']").val() == "nada"){

        relleno = false;

    }else{

        result += "3";

    }







    if($("[name='ochopai']").val() == "valuno"){

        result += "1";

    }else if($("[name='ochopai']").val()=="valdos"){

        result += "2";

    }else if($("[name='ochopai']").val()=="valtres"){

        result += "3";

    }else if($("[name='ochopai']").val() == "nada"){

        relleno = false;

    }else{

        result += "4";

    }







    if($("[name='nuevepai']").val() == "valuno"){

        result += "1";

    }else if($("[name='nuevepai']").val()=="valdos"){

        result += "2";

    }else if($("[name='nuevepai']").val()=="valtres"){

        result += "3";

    }else if($("[name='nuevepai']").val() == "nada"){

        relleno = false;

    }else{

        result += "4";

    }







    if($("[name='diezpai']").val() == "valuno"){

        result += "1";

    }else if($("[name='diezpai']").val()=="valdos"){

        result += "2";

    }else if($("[name='diezpai']").val() == "nada"){

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

//VERSION PAI FUNCIONES TABLA Y AÑADIR Y BORRAR

function mostrarNewMedicacion_pai(){
	$('#form-medic-1-pai').removeClass("d-none");
	$('#form-medic-2-pai').removeClass("d-none");
	$("#btn-new-medic-pai").addClass("d-none");
}

function cancelarNuevaMedicacion_pai(){
	$('#form-medic-1-pai').addClass("d-none");
	$('#form-medic-2-pai').addClass("d-none");
	$("#btn-new-medic-pai").removeClass("d-none");
}

function addMedicacionTabla_pai(){

	//Aqui comprobamos si es la primera medicación que se añade
	var a = $("#tabla-medicacion-res-pai tbody");
	if($("#tabla-medicacion-res-pai tbody").length == 0){
		$("#tabla-medicacion-res-pai").append("<tbody></tbody>");
	}

	//Por aqui añadimos cada campo a su columna
	var fila = "";
	fila+= "<tr>";
	fila += "<td>" + $("#nombreMedicamento-pai").val() + "</td>";
	fila += "<td>" + $("#medicacion-pai").val() + "</td>";
	fila += "<td>" + $("#seleccionVia-pai").val() + "</td>";
	fila += "<td>" + $("#listadoUnidades-pai").val() + "</td>";
	fila += "<td>" + $("#desayuno-pai").val() + "</td>";
	fila += "<td>" + $("#comida-pai").val() + "</td>";
	fila += "<td>" + $("#merienda-pai").val() + "</td>";
	fila += "<td>" + $("#cena-pai").val() + "</td>";
	fila+= "</tr>";
	$("#tabla-medicacion-res-pai tbody").append(fila);


	//Ocultamos formulario y mostramos boton añadir, botón vaciar tabla y tabla

	$("#tabla-medicacion-pai").removeClass("d-none");
	$("#btn-empty-medic-pai").removeClass("d-none");
	$('#form-medic-1-pai').addClass("d-none");
	$('#form-medic-2-pai').addClass("d-none");
	$("#btn-new-medic-pai").removeClass("d-none");
}

function limpiarTablaMedic_pai(){
	$("#tabla-medicacion-pai").addClass("d-none");
	$("#btn-empty-medic-pai").addClass("d-none");

	$("#tabla-medicacion-res-pai tbody").remove();
}

function validarNewMedicacion_pai(){
	return $("#medicacion-pai").val() != "" && $("#nombreMedicamento-pai").val() != "" && $("#seleccionVia-pai").val() != "" && $("#listadoUnidades-pai").val() != "" && $("#desayuno-pai").val() != "" && $("#comida-pai").val() != "" && $("#merienda-pai").val() != "" && $("#cena-pai").val() != "";
}