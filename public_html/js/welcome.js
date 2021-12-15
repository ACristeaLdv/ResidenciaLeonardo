$(document).ready(function(){

   

    var rol = "";

  

    //GENERO EL CHART CON LOS DATOS

    var ctx = document.getElementById("myPieChart");

    var myPieChart = new Chart(ctx, {

      type: 'doughnut',

      data: {

        labels: ["Personal", "Residente", "Camas"],

        datasets: [{

          data: [totalPersonal,totalResidente,habitacionesOcupadas],

          backgroundColor: ['#ffc107', '#1cc88a', '#36b9cc'],

          hoverBackgroundColor: ['#eab106', '#17a673', '#2c9faf'],

          hoverBorderColor: "rgba(234, 236, 244, 1)",

        }],

      },

      options: {

        maintainAspectRatio: false,

        tooltips: {

          backgroundColor: "rgb(255,255,255)",

          bodyFontColor: "#858796",

          borderColor: '#dddfeb',

          borderWidth: 1,

          xPadding: 15,

          yPadding: 15,

          displayColors: false,

          caretPadding: 10,

        },

        legend: {

          display: false

        },

        cutoutPercentage: 80,

      },

    });



    $('#cerrar-sesion').click(function(){

      window.location.replace('../controllers/logout.php');

    });

	

	

////////////////////FUNCIONALIDAD BUSQUEDA PERSONAL///////////////////////////

	

	//SELECCION MODO DE BUSQUEDA DEL PERSONAL (GENERAL A TODAS LAS VISTAS)

	$('.modoBusquedaPersonal').change(function(){

		var modo=$(this).val();

		$('.listadoPersonal').val("");

		$('.seccionOcultable').hide();

		$('#boton-ver-horario').hide();

		$('#ver-tabla-horario').hide();

		$('.selectPersonalOcultable').each(function() {

			if($(this).hasClass(modo))

				$(this).show();

			else

				$(this).hide();

		});

	});





	// BÚSQUEDA DE CATEGORÍA - UPDATE

	$('.modoBusquedaCategoria').change(function(){

		var modo=$(this).val();

		$('.selecCategoriaOcultable').each(function() {

			if($(this).hasClass(modo))

				$(this).show();

			else

				$(this).hide();

				$('#visualCarnitas').hide();

				$('#visualFrutas').hide();

				$('#visualVerduras').hide();

				$('#visualPescado').hide();

				$('#visualPastarroz').hide();

				$('#visualMercadona').hide();

				$('#visualHigiene').hide();

				$('#visualLimpieza').hide();

		});



		if($('.modoBusquedaCategoria option:selected').val() == "busquedaHigiene") {

			$('.selecCategoriaHiguieneOcultable').show();

		}else{

			$('.selecCategoriaHiguieneOcultable').hide();

		}



		if($('.modoBusquedaCategoria option:selected').val() == "busquedaLimpieza") {

			$('.selecCategoriaLimpiezaOcultable').show();

		}else{

			$('.selecCategoriaLimpiezaOcultable').hide();

		}

	});





	

	//LIMPIAMOS CAMPOS CUANDO SE SELECCIONA OTRO TRABAJADOR (EN BAJA PESONAL)

	$('#apellidos-baja').change(function(){

		$('#fechaBaja').val("");

		$('#motivo-baja').val("");

		$('#textoOtrasBajaPersonal').val("");

		$('#otrasBajaPersonal').hide();					

	});

	

	//LIMPIAMOS CAMPOS CUANDO SE SELECCIONA OTRO TRABAJADOR (EN BAJA PESONAL)

	$('#dni-baja').change(function(){

		$('#fechaBaja').val("");

		$('#motivo-baja').val("");

		$('#textoOtrasBajaPersonal').val("");

		$('#otrasBajaPersonal').hide();					

	});

	

	//OCULTAMOS EL RESTO DEL FORMULARIO SI NO SE SELECCIONA NINGUN TRABAJADOR

	$('.listadoPersonal').change(function(){

		$('#ver-tabla-horario').hide();

		if($(this).val() == ""){

			$('.seccionOcultable').hide();

			$('#boton-ver-horario').hide();

		}

		else{

			$('.seccionOcultable').show();	

			$('#boton-ver-horario').show();			

		}

	});

	

	

//////////////////FUNCIONALIDAD BUSQUEDA RESIDENTES///////////////////////////

	

	

	//SELECCION MODO DE BUSQUEDA DE RESIDENTES

	$('.modoBusquedaResidente').change(function(){

		

		var modo=$(this).val();

		$('.form-control').val("");

		$( ".datetimepicker" ).datetimepicker("setDate", new Date());

		$('.listadoResidentes').val("");

		$('.seccionOcultableResidentes').hide();

		$('#ver-tabla-consulta').hide();

		$('.selectOcultable').each(function() {

			if($(this).hasClass(modo))

				$(this).show();

			else

				$(this).hide();

		});

	});

	

	//LIMPIAMOS CAMPOS Y OCULTAMOS EL RESTO DEL FORMULARIO SI NO SE SELECCIONA NINGUN RESIDENTE

	$('.listadoResidentes').change(function(){

		$('#fechaBajaResidente').val("");

		$('#motivoBajaResidente').val("");

		$('#textoOtrasBajaResidente').val("");

		$('#otrasBajaResidente').hide();

		$('#boton-ver-datos').hide();

		$('#ver-tabla-consulta').hide();

		$('#ver-tabla-datos').hide();		

		if($(this).val() == ""){

			$('.seccionOcultableResidentes').hide();	

			$('#boton-ver-datos').hide();

		}

		else{

			$('.seccionOcultableResidentes').show();

			$('#boton-ver-datos').show();

		}			

	});

	

	

////////////////////CALENDARIO////////////////////////////////////

	$(function() {

		$( ".datepicker" ).datepicker({

			dateFormat: "dd/mm/yy",

			firstDay: 1,

			maxDate: "+0d",

			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],

			monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],

			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],

			dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],

			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá']

		})

	});

	

	

////////////////////CALENDARIO CON HORA////////////////////////////////////

	$(function() {

		$( ".datetimepicker" ).datetimepicker({

			dateFormat: "dd/mm/yy",

			timeFormat: "HH:mm",

			controlType: 'select',

			firstDay: 1,

			maxDate: "+0d",

			monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],

			monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],

			dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],

			dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],

			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá']

		}).datetimepicker("setDate", new Date());

	});

	

	

		

////////////////////SECCION BAJA PERSONAL///////////////////////////

	

	//SELECCION MOTIVO BAJA "OTRAS"

	$('#motivo-baja').change(function(){

		var modo=$(this).val();

		if(modo == "otras"){

			$('#otrasBajaPersonal').show();

		}else{

			$('#otrasBajaPersonal').hide();			

		}

			

	});

	

	

////////////////////SECCION BAJA RESIDENTE///////////////////////////

	

	//SELECCION MOTIVO BAJA "OTRAS"

	$('#motivoBajaResidente').change(function(){

		var modo=$(this).val();

		if(modo == "otras"){

			$('#otrasBajaResidente').show();

		}else{

			$('#otrasBajaResidente').hide();			

		}	

	});

	



////////////////////SECCION ALTA RESIDENTE///////////////////////////

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS DISCAPACIDAD

	$('#otraDiscapacidad').change(function(){

		if($(this).prop('checked'))  

			$('#otraDiscapacidadTexto').show(); 

        else   

            $('#otraDiscapacidadTexto').hide(); 

	});



	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS SITUACION MEDICA

	$('#otraSitMedica').change(function(){

		if($(this).prop('checked'))  

			$('#otraSitMedicaTexto').show(); 

        else   

            $('#otraSitMedicaTexto').hide(); 

	});	



    //ACTIVAR INPUT CUANDO SE SELECCIONA OTRO SEXO

    $('#sexo').on('change', function() {

        let sexoo=$(this).val();

        //  alert(sexoo);

        if(sexoo=="1")

            $('#otroSexo').show(); 

        else

            $('#otroSexo').hide(); 

    });

	

	//MOSTRAR RESPONSABLES PLANTA HAB INDIVIDUAL (ALTA RESIDENTE)

	$('#habitacionIndivAsignada').change(function(){

		if($(this).val() != ""){

			$('#listadoResponsablesLabel').show();

			$('#listadoResponsablesSelect').show();

			$('#responsableResidente').empty();

			mostrarResponsablesPlanta($('#habitacionIndivAsignada').val());

		}else{

			$('#listadoResponsablesLabel').hide();

			$('#listadoResponsablesSelect').hide();

		}		

	});

	

	//MOSTRAR RESPONSABLES PLANTA HAB DOBLE (ALTA RESIDENTE)

	$('#habitacionDobleAsignada').change(function(){

		if($(this).val() != ""){

			$('#listadoResponsablesLabel').show();

			$('#listadoResponsablesSelect').show();

			$('#responsableResidente').empty();

			mostrarResponsablesPlanta($('#habitacionDobleAsignada').val());

		}else{

			$('#listadoResponsablesLabel').hide();

			$('#listadoResponsablesSelect').hide();

			$('#responsableResidente').empty();

		}

				

	});





	//MOSTRAR VIA DE ADMINISTRACIÓN DE MEDICAMENTOS - UPDATE A.S

	$('#medicacion').change(function(){

		if($(this).val() != ""){

			$('#listadoViaLabel').show();

			$('#listadoViaSelect').show();

			$('#tipoMedicamento').show();

			$("#listadoUnidades").show();

		}else{

			$('#listadoViaLabel').hide();

			$('#listadoViaSelect').hide();

			$('#tipoMedicamento').hide();

			$('#posologiaLabel').hide();

			$('#listaDesayuno').hide();

			$('#listaComida').hide();

			$('#listaMerienda').hide();

			$('#listaCena').hide();

			$("#listadoUnidades").hide();

		}

	});



	//MOSTRAR DESAYUNO, COMIDA, ETC.. AL SELECCIONAR VIA DE ADMIN. - UPDATE A.S

	$('#seleccionVia').change(function(){

		if($(this).val() != ""){

			$('#posologiaLabel').show();

			$('#listaDesayuno').show();

			$('#listaComida').show();

			$('#listaMerienda').show();

			$('#listaCena').show();

		}else{

			$('#posologiaLabel').hide();

			$('#listaDesayuno').hide();

			$('#listaComida').hide();

			$('#listaMerienda').hide();

			$('#listaCena').hide();

		}

	});



	//VERSION MODIFICAR

	//MOSTRAR VIA DE ADMINISTRACIÓN DE MEDICAMENTOS - UPDATE A.S

	$('#medicacion-mod').change(function(){

		if($(this).val() != ""){

			$('#listadoViaLabel-mod').show();

			$('#listadoViaSelect-mod').show();

			$('#tipoMedicamento-mod').show();

			$("#listadoUnidades-mod").show();

		}else{

			$('#listadoViaLabel-mod').hide();

			$('#listadoViaSelect-mod').hide();

			$('#tipoMedicamento-mod').hide();

			$('#posologiaLabel-mod').hide();

			$('#listaDesayuno-mod').hide();

			$('#listaComida-mod').hide();

			$('#listaMerienda-mod').hide();

			$('#listaCena-mod').hide();

			$("#listadoUnidades-mod").hide();

		}

	});



	//MOSTRAR DESAYUNO, COMIDA, ETC.. AL SELECCIONAR VIA DE ADMIN. - UPDATE A.S

	$('#seleccionVia-mod').change(function(){

		if($(this).val() != ""){

			$('#posologiaLabel-mod').show();

			$('#listaDesayuno-mod').show();

			$('#listaComida-mod').show();

			$('#listaMerienda-mod').show();

			$('#listaCena-mod').show();

		}else{

			$('#posologiaLabel-mod').hide();

			$('#listaDesayuno-mod').hide();

			$('#listaComida-mod').hide();

			$('#listaMerienda-mod').hide();

			$('#listaCena-mod').hide();

		}

	});

	//VERSION PAI DE LO ANTERIOR

	//MOSTRAR VIA DE ADMINISTRACIÓN DE MEDICAMENTOS - UPDATE A.S

	$('#medicacion-pai').change(function(){

		if($(this).val() != ""){

			$('#listadoViaLabel-pai').show();

			$('#listadoViaSelect-pai').show();

			$('#tipoMedicamento-pai').show();

			$("#listadoUnidades-pai").show();

		}else{

			$('#listadoViaLabel-pai').hide();

			$('#listadoViaSelect-pai').hide();

			$('#tipoMedicamento-pai').hide();

			$('#posologiaLabel-pai').hide();

			$('#listaDesayuno-pai').hide();

			$('#listaComida-pai').hide();

			$('#listaMerienda-pai').hide();

			$('#listaCena-pai').hide();

			$("#listadoUnidades-pai").hide();

		}

	});



	//MOSTRAR DESAYUNO, COMIDA, ETC.. AL SELECCIONAR VIA DE ADMIN. - UPDATE A.S

	$('#seleccionVia-pai').change(function(){

		if($(this).val() != ""){

			$('#posologiaLabel-pai').show();

			$('#listaDesayuno-pai').show();

			$('#listaComida-pai').show();

			$('#listaMerienda-pai').show();

			$('#listaCena-pai').show();

		}else{

			$('#posologiaLabel-pai').hide();

			$('#listaDesayuno-pai').hide();

			$('#listaComida-pai').hide();

			$('#listaMerienda-pai').hide();

			$('#listaCena-pai').hide();

		}

	});

	

	//calcular la edad cuando se modifique la fecha de nacimiento

	$("#fechaNacimiento").change(function(){

		$('#edadResidente').val(calcularEdad($(this).val()));

	});



////////////////////SECCION HABITACION (tanto en ALTA RESIDENTE como en MOVER HABITACION)//////////////////////////

	

	//SELECCION HABITACION

	$('input[type="radio"]').bind('click', function(){

		

		$('#habitacionIndivAsignada').val("");

		$('#habitacionDobleAsignada').val("");

		$('#listadoResponsablesLabel').hide();

		$('#listadoResponsablesSelect').hide();

		$('#responsableNuevo').empty();

		$('#responsableNuevo').append($('<option>').text("Seleccione Responsable").attr('value', ""));

		$('#responsableNuevo').prop('disabled', true);

		

		if($(".habIndividual").is(':checked')) {  

			$('.habitacionIndividual').show();		

			$('.habitacionDoble').hide(); 

        } 

		else   

            $('.habitacionIndividual').hide(); 

		

		if($(".habDoble").is(':checked')) {  

			$('.habitacionDoble').show();	

			$('.habitacionIndividual').hide(); 

        } 

		else   

            $('.habitacionDoble').hide();

			

		if($("#habIndividualNueva").is(':checked')){

			$('#idHabitacionNueva').empty()

			mostrarHabitaciones($("#habIndividualNueva").val());

			$('#idHabitacionNueva').prop('disabled', false);

		}

		else if($("#habDobleNueva").is(':checked')){

			$('#idHabitacionNueva').empty();

			mostrarHabitaciones($("#habDobleNueva").val());

			$('#idHabitacionNueva').prop('disabled', false);

		}

		else{

			$('#idHabitacionNueva').prop('disabled', true);

			$('#idHabitacionNueva').empty();

			$('#idHabitacionNueva').append($('<option>').text("Seleccione Habitación").attr('value', ""));

		}



	});

	

	//MOSTRAR RESPONSABLES PLANTA (MOVER DE HABITACION)

	$('#idHabitacionNueva').change(function(){

		if($(this).val() != ""){

			$('#responsableNuevo').prop('disabled', false);

			$('#responsableNuevo').empty();

			mostrarResponsablesPlanta($('#idHabitacionNueva').val());

		}else{

			$('#responsableNuevo').prop('disabled', true);

			$('#responsableNuevo').empty();

			$('#responsableNuevo').append($('<option>').text("Seleccione Responsable").attr('value', ""));

		}

				

	});

		

	

//////////////////////SECCION MODIFICAR RESIDENTE///////////////////

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS DISCAPACIDAD

	$(".otraDiscapacidadModif").change(function(){

		if($(this).prop('checked'))  

			$('#otraDiscapacidadTextoModif').show(); 

        else   

            $('#otraDiscapacidadTextoModif').hide(); 

	});



	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS SITUACION MEDICA

	$(".otraSitMedicaModif").change(function(){

		if($(this).prop('checked'))  

			$('#otraSitMedicaTextoModif').show(); 

        else   

            $('#otraSitMedicaTextoModif').hide(); 

	});	

	

	//calcular la edad cuando se modifique la fecha de nacimiento

	$("#fechaNacimientoModif").change(function(){

		$('#edadModif').val(calcularEdad($(this).val()));

	});	

	

///////////////////////SECCION BUSCAR CONTACTO RESIDENTE/////////////////////////



	//OCULTAR BOTON DE BUSQUEDA Y LA TABLA CUANDO SE CAMBIA EL TIPO DE BUSQUEDA 

	$('#ver-datos-contacto').find($('.modoBusquedaResidente')).change (function(){

		$('#boton-ver-datos').hide();

		$('#ver-tabla-datos').hide();		

	});

	



//////////////////////SECCION PAI///////////////////



//ACTIVAR INPUT CUANDO SE SELECCIONA AÑADIR DATOS DE OTRO FAMILIAR

	$("#otroFamiliar").change(function(){

		if($(this).prop('checked'))  

			$('.datosOtroFamiliar').prop('disabled', false);

        else  { 

			swal({

				title: "¿Eliminar Datos Otro Familiar?",

				text:  "Esta acción sólo limpia los campos del formulario. Para consolidar los cambios, debe pulsar el botón de Modificar",

				buttons: {

					Cancelar: {text: "Cancelar"},

					Confirmar: {text: "Confirmar"},

				},

				icon:  "warning"

			})

			.then((value) => {

				switch (value) {

					case "Confirmar":

						$('.datosOtroFamiliar').val("");

						$('.datosOtroFamiliar').prop('disabled', true);

						break;

					case "Cancelar":

						$("#otroFamiliar").prop('checked',true);

						$('.datosOtroFamiliar').prop('disabled', false);

						break;

				}

			});

            

		}

	});



	

	//ACTIVAR INPUT CUANDO SE SELECCIONA CREYENTE

	$("#creyente").change(function(){

		$('#poseeCreencias').val('');

		if($(this).prop('checked'))  

			$('#poseeCreencias').removeClass("d-none"); 

        else   

            $('#poseeCreencias').addClass('d-none'); 

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA ACUDE SERVICIOS RELIGIOSOS

	$("#acudeServicios").change(function(){

		$('[name="frecuenciaServicio"]').val('');

		if($(this).prop('checked'))  

			$('#frecuenciaServicioSelect').removeClass("d-none"); 

        else{   

            $('#frecuenciaServicioSelect').addClass('d-none');

			$('#otrasFrecuenciaServicio').addClass('d-none');			

		}

	});

		

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS CREENCIAS

	$("#otrasCreencias").change(function(){

		$('#otrasAreaCreencias').val('');

		if($(this).prop('checked'))  

			$('#otrasAreaCreencias').removeClass("d-none"); 

        else   

            $('#otrasAreaCreencias').addClass('d-none'); 

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS GESTIONES ADMINISTRATIVAS

	$('[name="gestionesAdministrativas"]').change(function(){

		$('#otrasGestionesAdministrativas').val('');

		$('#detalleGestiones').val('');

		if($(this).val()=="otras")  

			$('#otrasGestionesAdministrativas').removeClass("d-none"); 

        else   

            $('#otrasGestionesAdministrativas').addClass('d-none'); 

		if($(this).val()=="gestiones")  

			$('#detalleGestiones').removeClass("d-none"); 

        else   

            $('#detalleGestiones').addClass('d-none'); 

	});	

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS RED FAMILIAR

	$('[name="redFamiliar"]').change(function(){

		$('#otrasRedFamiliar').val('');

		$('#familiaresRedFamiliar').val('');

		if($(this).val()=="otras")  

			$('#otrasRedFamiliar').removeClass("d-none"); 

        else   

            $('#otrasRedFamiliar').addClass('d-none');

		if($(this).val()=="familiares")  

			$('#familiaresRedFamiliar').removeClass("d-none"); 

        else   

            $('#familiaresRedFamiliar').addClass('d-none');		

	});	



	//ACTIVAR INPUT CUANDO SE SELECCIONA  ULCERAS PIEL

	$('#ulcerasPiel').change(function(){

		$('#gradoUlceraVascular').val('');

		$('#tratamientosUlceraVascular').val('');

		$('#otrosDatosUlceraVascular').val('');

		if($(this).prop('checked'))  

			$('#camposUlcera').removeClass("d-none"); 

        else   

            $('#camposUlcera').addClass('d-none');

	});	

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTRAS MODIFICACIONES PESO

	$('#otrasModifPeso').change(function(){

		$('#otrasModifPesoTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasModifPesoTexto').removeClass("d-none"); 

        else   

            $('#otrasModifPesoTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  UTENSILIOS ESPECIALES NUTRICION

	$('#utensiliosEspeciales').change(function(){

		$('#utensiliosEspecialesTexto').val('');

		if($(this).prop('checked'))  

			$('#utensiliosEspecialesTexto').removeClass("d-none"); 

        else   

            $('#utensiliosEspecialesTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTROS METODOS NUTRICION

	$('#otrosMetodosNutricion').change(function(){

		$('#otrosMetodosTexto').val('');

		if($(this).prop('checked'))  

			$('#otrosMetodosTexto').removeClass("d-none"); 

        else   

            $('#otrosMetodosTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTRAS ALERGIAS

	$('#otrasAlergias').change(function(){

		$('#otrasAlergiasTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasAlergiasTexto').removeClass("d-none"); 

        else   

            $('#otrasAlergiasTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTROS RITMO INTESTINAL

	$('#otrosRitmoIntestinal').change(function(){

		$('#otrosRitmoIntestinalTexto').val('');

		if($(this).prop('checked'))  

			$('#otrosRitmoIntestinalTexto').removeClass("d-none"); 

        else   

            $('#otrosRitmoIntestinalTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTROS DISPOSITIVOS

	$('#otrosDispositivos').change(function(){

		$('#otrosDispositivosTexto').val('');

		if($(this).prop('checked'))  

			$('#otrosDispositivosTexto').removeClass("d-none"); 

        else   

            $('#otrosDispositivosTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  AYUDAS TECNICAS

	$('#ayudasTécnicas').change(function(){

		$('#baston').prop('checked',false);

		$('#andador').prop('checked',false);

		$('#muleta').prop('checked',false);

		$('#sillaRuedas').prop('checked',false);

		$('#otrasAyudasTecnicas').prop('checked',false);

		$('#otrasAyudasTecnicasTexto').addClass("d-none"); 

		$('#otrasAyudasTecnicasTexto').val('');

		if($(this).prop('checked'))  

			$('#camposAyudasTecnicas').removeClass("d-none"); 

        else   

            $('#camposAyudasTecnicas').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTRAS AYUDAS TECNICAS

	$('#otrasAyudasTecnicas').change(function(){

		$('#otrasAyudasTecnicasTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasAyudasTecnicasTexto').removeClass("d-none"); 

        else   

            $('#otrasAyudasTecnicasTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  ENCAMAMIENTO

	$('#encamamiento').change(function(){

		$('#temporal').prop('checked',false);

		$('#permanente').prop('checked',false);

		$('#otrasEncamamento').prop('checked',false);

		$('#otrasEncamamentoTexto').addClass("d-none"); 

		$('#otrasEncamamentoTexto').val('');

		if($(this).prop('checked'))  

			$('#camposEncamamiento').removeClass("d-none"); 

        else   

            $('#camposEncamamiento').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTRAS ENCAMAIENTO

	$('#otrasEncamamento').change(function(){

		$('#otrasEncamamentoTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasEncamamentoTexto').removeClass("d-none"); 

        else   

            $('#otrasEncamamentoTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA METODOS TRANSFERENCIA

	$('#metodosTransferencia').change(function(){

		$('#metodosMecanicosTranferencia').prop('checked',false);

		$('#metodosManualesTranferencia').prop('checked',false);

		$('#metodosManualesTranferenciaTexto').val('');

		$('#metodosMecanicosTranferenciaTexto').val('');

		if($(this).prop('checked'))  

			$('#camposMetodosTranferencia').removeClass("d-none"); 

        else   

            $('#camposMetodosTranferencia').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  METODOS MANUALES

	$('#metodosManualesTranferencia').change(function(){

		$('#metodosManualesTranferenciaTexto').val('');

		if($(this).prop('checked'))  

			$('#metodosManualesTranferenciaTexto').removeClass("d-none"); 

        else   

            $('#metodosManualesTranferenciaTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  METODOS MECANICOS

	$('#metodosMecanicosTranferencia').change(function(){

		$('#metodosMecanicosTranferenciaTexto').val('');

		if($(this).prop('checked'))  

			$('#metodosMecanicosTranferenciaTexto').removeClass("d-none"); 

        else   

            $('#metodosMecanicosTranferenciaTexto').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OLVIDOS ESPORADICOS ADV

	$('#olvidosEsporadicos').change(function(){

		$('#comentarioOlvidosEsporadicos').val('');

		if($(this).prop('checked'))  

			$('#comentarioOlvidosEsporadicos').removeClass("d-none"); 

        else   

            $('#comentarioOlvidosEsporadicos').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OLVIDOS FRECUENTES ADV

	$('#olvidosFrecuentes').change(function(){

		$('#comentarioOlvidosFrecuentes').val('');

		if($(this).prop('checked'))  

			$('#comentarioOlvidosFrecuentes').removeClass("d-none"); 

        else   

            $('#comentarioOlvidosFrecuentes').addClass('d-none');

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTRAS MEMORIA

	$('#otrasMemoria').change(function(){

		$('#otrasMemoriaTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasMemoriaTexto').removeClass("d-none"); 

        else   

            $('#otrasMemoriaTexto').addClass('d-none');

	});

	



	//ACTIVAR INPUT CUANDO SE SELECCIONA DOLOR

	$('.checkboxDolor').change(function(){

		let id= $(this).attr('id');

		let selectFrecuencia = $("[name='Frecuencia"+id+ "']");

		let selectIntensidad = $("[name='Intensidad"+id+ "']");

		let inputOtrasFrecuencia = $("[name='otrasFrecuencia"+id+ "']");

		let inputOtrasIntensidad = $("[name='otrasIntensidad"+id+ "']");

		selectIntensidad.val('');

		selectFrecuencia.val('');

		inputOtrasFrecuencia.val('');

		inputOtrasIntensidad.val('');

		inputOtrasFrecuencia.addClass('d-none'); 

		inputOtrasIntensidad.addClass('d-none');

		if($(this).prop('checked')){  

			selectFrecuencia.prop('disabled', false);

			selectIntensidad.prop('disabled', false);

		}else{   

            selectFrecuencia.prop('disabled', true);

			selectIntensidad.prop('disabled', true);

		}			

	});

	

		

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS VALORACION AFECTIVA Y EMOCIONAL

	$("#otrosValoracionAfectiva").change(function(){

		$('#otrosValoracionAfectivaTexto').val('');

		if($(this).prop('checked'))  

			$('#otrosValoracionAfectivaTexto').removeClass("d-none"); 

        else   

            $('#otrosValoracionAfectivaTexto').addClass('d-none'); 

	});

	

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA ANTECEDENTES PSIQUIATRICOS

	$("#antecedentesPsiquiatricos").change(function(){

		$('[name="antecedentesPsiquiatricosTexto"]').val('');

		if($(this).prop('checked'))  

			$('#antecedentesPsiquiatricosArea').removeClass("d-none"); 

        else{   

            $('#antecedentesPsiquiatricosArea').addClass('d-none');		

		}

	});

	

			

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTROS TRASTORNOS CONDUCTA

	$("#otrosTrastornoConducta").change(function(){

		$('#otrosTrastornoConductaTexto').val('');

		if($(this).prop('checked'))  

			$('#otrosTrastornoConductaTexto').removeClass("d-none"); 

        else   

            $('#otrosTrastornoConductaTexto').addClass('d-none'); 

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA COMPORTAMIENTO INADECUADO

	$("#comportamientoInadecuado").change(function(){

		$('#comportamientoInadecuadoTexto').val('');

		if($(this).prop('checked'))  

			$('#comportamientoInadecuadoTexto').removeClass("d-none"); 

        else   

            $('#comportamientoInadecuadoTexto').addClass('d-none'); 

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS DEAMBULACION

	$("#otrasDeambulacion").change(function(){

		$('#otrasDeambulacionTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasDeambulacionTexto').removeClass("d-none"); 

        else   

            $('#otrasDeambulacionTexto').addClass('d-none'); 

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS TIEMPO LIBRE

	$("#otrasTiempoLibre").change(function(){

		$('#otrasTiempoLibreTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasTiempoLibreTexto').removeClass("d-none"); 

        else   

            $('#otrasTiempoLibreTexto').addClass('d-none'); 

	});

	

	//ACTIVAR INPUT CUANDO SE SELECCIONA OTRAS ACTIVIDADES

	$("#otrasActividades").change(function(){

		$('#otrasActividadesTexto').val('');

		if($(this).prop('checked'))  

			$('#otrasActividadesTexto').removeClass("d-none"); 

        else   

            $('#otrasActividadesTexto').addClass('d-none'); 

	});

	

		

	//ACTIVAR INPUT CUANDO SE SELECCIONA  OTRAS (EN GENERAL, EN LOS SELECT)

	$('.selectConOtras').change(function(){

		let name= $(this).attr('name');

		let inputOtras = $("[name='otras"+name+ "']");

		inputOtras.val('');

		if($(this).val()=="otras")  

			inputOtras.removeClass("d-none"); 

        else   

            inputOtras.addClass('d-none'); 

	});





	

  //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*

  //MOSTRAR/OCULTAR DIFERENTES SUBMENUS (VISTAS)

  //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*

 

    //CLICK EN EL LOGO DE RESIDENCIA

    $('#residencia').click(function(){

      if($('#inicio').is(':hidden')){

		location.reload();

		mostrarSeccionMenu("inicio");    

      } 

    });

	

    //CLICK EN ALTA PERSONAL

    $('#alta-personal').click(function(){

      if($('#ver-alta-personal').is(':hidden')){

        mostrarSeccionMenu("ver-alta-personal");

        $('#navPersonal').addClass('collapsed');

        $('#menuPersonal').removeClass('show');

      } else {

        $('#navPersonal').addClass('show');

        $('#menuPersonal').removeClass('collapsed');

      }

    });



    //CLICK EN BAJA PERSONAL

    $('#baja-personal').click(function(){

      if($('#ver-baja-personal').is(':hidden')){

		mostrarSeccionMenu("ver-baja-personal");

        $('#navPersonal').addClass('collapsed');

        $('#menuPersonal').removeClass('show');

      } else {

        $('#navPersonal').addClass('show');

        $('#menuPersonal').removeClass('collapsed');

      }

    });



    //CLICK EN MODIFICAR PERSONAL

    $('#modificar-personal').click(function(){

      if($('#ver-modificar-personal').is(':hidden')){

		mostrarSeccionMenu("ver-modificar-personal");

        $('#navPersonal').addClass('collapsed');

        $('#menuPersonal').removeClass('show');

      } else {

        $('#navPersonal').addClass('show');

        $('#menuPersonal').removeClass('collapsed');

      }

    });







    //CLICK EN PERSONAL -> LIMPIEZA

    $('#personal-limpieza').click(function(){

        if($('#ver-limpieza-personal').is(':hidden')){

            mostrarSeccionMenu("ver-limpieza-personal");

            $('#navGestionPerosnal').addClass('collapsed');

            $('#menuGestionPersonal').removeClass('show');



            //CHECKBOX HISTORICO PERSONAL LIMPIEZA (NO ACTIVOS)

            $('#historico-personal-limpieza').click(function() {

                if($('#historico-personal-limpieza').is(':checked')){

                    tablaPersonalHistoricoLimpieza();   				

				    $('#ver-tabla-personal-historico-limpieza').show();	

                } else{

                    $('#ver-tabla-personal-historico-limpieza').hide();

                }

            })



            $('#personal-activo-limpieza').click(function() {

                ////CHECKBOX ACTIVO DE LIMPIEZA

                if($('#personal-activo-limpieza').is(':checked')){

                    tablapersonalactivoLimpieza();  

                    $('#ver-tabla-personal-activo-limpieza').show();

                }

                else{

                    $('#ver-tabla-personal-activo-limpieza').hide();

                    }

            })

        } else {

            $('#navGestionPerosnal').addClass('show');

            $('#menuGestionPersonal').removeClass('collapsed');

        }

    });





    //CLICK EN PERSONAL -> MANTENIMIENTO

    $('#personal-mantenimiento').click(function(){

        if($('#ver-mantenimiento-personal').is(':hidden')){

            mostrarSeccionMenu("ver-mantenimiento-personal");

            $('#navGestionPerosnal').addClass('collapsed');

            $('#menuGestionPersonal').removeClass('show');



            // CHECKBOX HISTORICO PERSONAL MANTENIMIENTO (NO ACTIVOS)

            $('#historico-personal-mantenimiento').click(function() {

                if($('#historico-personal-mantenimiento').is(':checked')){

                    tablaPersonalHistoricoMantenimiento();   				

				    $('#ver-tabla-personal-historico-mantenimiento').show();	

                } else{

                    $('#ver-tabla-personal-historico-mantenimiento').hide();

                }

            })



            ////CHECKBOX ACTIVO DE PERSONAL MANTENIMIENTO

            $('#personal-activo-mantenimiento').click(function() {

                if($('#personal-activo-mantenimiento').is(':checked')){

                    tablapersonalactivoMantenimiento();  

                    $('#ver-tabla-personal-activo-mantenimiento').show();

                } else{

                    $('#ver-tabla-personal-activo-mantenimiento').hide();

                }

            })

        } else {

            $('#navGestionPerosnal').addClass('show');

            $('#menuGestionPersonal').removeClass('collapsed');

        }

    });





    //CLICK EN PERSONAL -> RESTO

    $('#personal-resto').click(function(){

        if($('#ver-resto-personal').is(':hidden')){

            mostrarSeccionMenu("ver-resto-personal");

            $('#navGestionPerosnal').addClass('collapsed');

            $('#menuGestionPersonal').removeClass('show');



            // CHECKBOX HISTORICO PERSONAL RESTO (NO ACTIVOS)

            $('#historico-personal-resto').click(function() {

                if($('#historico-personal-resto').is(':checked')){

                    tablaPersonalHistoricoResto();

                    $('#ver-tabla-personal-historico-resto').show();  

                } else{

                    $('#ver-tabla-personal-historico-resto').hide();

                }

            })



            ////CHECKBOX ACTIVO DE PERSONAL RESTO

            $('#personal-activo-resto').click(function() {

                if($('#personal-activo-resto').is(':checked')){

                    tablapersonalactivoResto();  

                    $('#ver-tabla-personal-activo-resto').show();

                } else{

                    $('#ver-tabla-personal-activo-resto').hide();

                }

            })

        } else{

            $('#navGestionPerosnal').addClass('show');

            $('#menuGestionPersonal').removeClass('collapsed');

        }

    });





    //CLICK EN PETICIÓN MATERIAL - UPDATE

    $('#navGestionMaterial').click(function(){

        if($('#ver-peticion-material').is(':hidden')){

            mostrarSeccionMenu("ver-peticion-material");

			$('#selectProveedor').change(function() {

				if($('#selectProveedor option:selected').val() == 8) {

					$('#visualCarnitas').show();

					$('#ocultarCarrito').show();



				}else{

					$('#visualCarnitas').hide();

				}

				if($('#selectProveedor option:selected').val() == 2) {

					$('#visualFrutas').show();

					$('#visualCarnitas').hide();

					$('#ocultarCarrito').show();

				}else{

					$('#visualFrutas').hide();

				}

				if($('#selectProveedor option:selected').val() == 7) {

					$('#visualVerduras').show();

					$('#ocultarCarrito').show();

				}else{

					$('#visualVerduras').hide();

				}

				if($('#selectProveedor option:selected').val() == 6) {

					$('#visualPescado').show();

					$('#ocultarCarrito').show();

				}else{

					$('#visualPescado').hide();

				}

				if($('#selectProveedor option:selected').val() == 3) {

					$('#visualPastarroz').show();

					$('#ocultarCarrito').show();

				}else{

					$('#visualPastarroz').hide();

				}

				if($('#selectProveedor option:selected').val() == 4) {

					$('#visualMercadona').show();

					$('#ocultarCarrito').show();

				}else{

					$('#visualMercadona').hide();

				}

			});



			$('#selectProveedorHiguiene').change(function() {

				if($('#selectProveedorHiguiene option:selected').val() == 5) {

					$('#visualHigiene').show();

					$('#ocultarCarrito').show();

				}else{

					$('#visualHigiene').hide();

				}

			});



			$('#selectProveedorLimpieza').change(function() {

				if($('#selectProveedorLimpieza option:selected').val() == 9) {

					$('#visualLimpieza').show();

					$('#ocultarCarrito').show();

				}else{

					$('#visualLimpieza').hide();

				}

			});



			



			$('#icono').addClass('collapsed');

			$('#icono').removeClass('show');



        } else{

			$('#icono').addClass('collapsed');

			$('#icono').removeClass('show');

		}

        

    });



	

	//CLICK VER LA TABLA HORARIO PERSONAL

    $('#horario-personal').click(function(){

      if($('#ver-horario-personal').is(':hidden')){

		mostrarSeccionMenu("ver-horario-personal");

        $('#navPersonal').addClass('collapsed');

        $('#menuPersonal').removeClass('show');

      } else {

        $('#navPersonal').addClass('show');

        $('#menuPersonal').removeClass('collapsed');

      }

    });



    //CLICK EN VER TABLA PERSONAL

    $('#personal').click(function(){

      if($('#ver-personal-tabla').is(':hidden')){

		mostrarSeccionMenu("ver-personal-tabla");

        $('#navPersonal').addClass('collapsed');

        $('#menuPersonal').removeClass('show');

        

        //CHECKBOX HISTORICO PERSONAL

        $('#historico-personal').click(function() {

            if($('#historico-personal').is(':checked')){

                tablaPersonalHistorico();   				

				$('#ver-tabla-personal-historico').show();	

            }		

			else{

				$('#ver-tabla-personal-historico').hide();

            }

        })

        

        //CHECKBOX PERSONAL ACTIVO

        $('#personal-activo').click(function() {

            if($('#personal-activo').is(':checked')){

                tablapersonalactivo();  

                $('#ver-tabla-personal-activo').show();

         }

         else{

              $('#ver-tabla-personal-activo').hide();

            }



        })

      }

      else {

        $('#navPersonal').addClass('show');

        $('#menuPersonal').removeClass('collapsed');

      }

    });

	



	//CLICK EN VER TABLA RESIDENTE

    $('#residente').click(function(){

      if($('#ver-residente-tabla').is(':hidden')){

		mostrarSeccionMenu("ver-residente-tabla");

        $('#navResidente').addClass('collapsed');

        $('#menuResidente').removeClass('show');

          //CHECKBOX HISTORICO RESIDENTE 

        $('#historico-residente').click(function() { 

            if($('#historico-residente').is(':checked')){

              tablaResidenteHistorico(); 

              $('#ver-residente-tabla-historico').show();

            }

           else{

              $('#ver-residente-tabla-historico').hide();

            }

        }) 

        

        //CHECKBOX RESIDENTE QUE ESTÁN DADOS DE ALTA

        $('#de-alta-residente').click(function() {

            if($('#de-alta-residente').is(':checked')){

              tablaResidenteDeAlta();   

              $('#ver-residente-tabla-de-alta').show();

         }

         else{

              $('#ver-residente-tabla-de-alta').hide();

            }



        })

      } else {

        $('#navResidente').addClass('show');

        $('#menuResidente').removeClass('collapsed');

      }

    });

	

	//CLICK EN DATOS DE CONTACTO RESIDENTE

    $('#datos-contacto').click(function(){

      if($('#ver-datos-contacto').is(':hidden')){

		mostrarSeccionMenu("ver-datos-contacto");

        $('#navResidente').addClass('collapsed');

        $('#menuResidente').removeClass('show');

      } else {

        $('#navResidente').addClass('show');

        $('#menuResidente').removeClass('collapsed');

      }

    });

	



	//CLICK AGREGAR INCIDENCIA

    $('#auxiliar-residente').click(function(){

      if($('#ver-auxiliar-residente').is(':hidden')){

		mostrarSeccionMenu("ver-auxiliar-residente");

        $('#navIncidencias').addClass('collapsed');

        $('#menuIncidencias').removeClass('show');

        

        $('#texto-diario').summernote({

			height: 250, 

			toolbar:[

				['style',['bold','italic','underline','clear']],

				//['fontface',['fontname']],

				['textsize',['fontsize']],

				['fontclr',['color']],

				['alignment',['ul','ol','paragraph']],

				['insert',['link','picture','table']],

				['adv',['codeview']]

			]

        });

      } else {

        $('#navIncidencias').addClass('show');

        $('#menuIncidencias').removeClass('collapsed');

      }

    });

	

	//CLICK VER TABLA HISTORIAL INCIDENCIAS

    $('#tabla-auxiliar-residente').click(function(){

      if($('#ver-tabla-auxiliar-residente').is(':hidden')){

		mostrarSeccionMenu("ver-tabla-auxiliar-residente");

        $('#navIncidencias').addClass('collapsed');

        $('#menuIncidencias').removeClass('show');

        tablaHistoricoIncidencias();

      } else {

        $('#navIncidencias').addClass('show');

        $('#menuIncidencias').removeClass('collapsed');

      }

    });

	

	//CLICK AGREGAR CONSULTA

    $('#agregar-consulta').click(function(){

      if($('#ver-consulta').is(':hidden')){

		mostrarSeccionMenu("ver-consulta");

        $('#navMedico').addClass('collapsed');

        $('#menuMedico').removeClass('show');

      } else {

        $('#navMedico').addClass('show');

        $('#menuMedico').removeClass('collapsed');

      }

    });

	

	//CLICK EN ALTA RESIDENTE

    $('#alta-residente').click(function(){

      if($('#ver-alta-residente').is(':hidden')){

		mostrarSeccionMenu("ver-alta-residente");

        $('#navResidente').addClass('collapsed');

        $('#menuResidente').removeClass('show');

      } else {

        $('#navResidente').addClass('show');

        $('#menuResidente').removeClass('collapsed');

      }

    });



    //CLICK EN BAJA RESIDENTE

    $('#baja-residente').click(function(){

      if($('#ver-baja-residente').is(':hidden')){

		mostrarSeccionMenu("ver-baja-residente");

        $('#navResidente').addClass('collapsed');

        $('#menuResidente').removeClass('show');

      } else {

        $('#navResidente').addClass('show');

        $('#menuResidente').removeClass('collapsed');

      }

    });



    //CLICK EN MODIFICAR DATOS RESIDENTE

    $('#modificar-residente').click(function(){

      if($('#ver-modificar-residente').is(':hidden')){

		mostrarSeccionMenu("ver-modificar-residente");

        $('#navResidente').addClass('collapsed');

        $('#menuResidente').removeClass('show');

      } else {

        $('#navResidente').addClass('show');

        $('#menuResidente').removeClass('collapsed');

      }

    });





    //CLICK MOVER DE HABITACION AL RESIDENTE

    $('#mover-habitacion').click(function(){

      if($('#ver-mover-habitacion').is(':hidden')){

		mostrarSeccionMenu("ver-mover-habitacion");

        $('#navHabitaciones').addClass('collapsed');

        $('#menuHabitaciones').removeClass('show');

      } else {

        $('#navHabitaciones').addClass('show');

        $('#menuHabitaciones').removeClass('collapsed');

      }

    });



    //CLICK VER TABLA RESIDENTE HABITACIÓN

    $('#tabla-residente-habitacion').click(function(){

      if($('#ver-tabla-residente-habitacion').is(':hidden')){

		mostrarSeccionMenu("ver-tabla-residente-habitacion");

        $('#navHabitaciones').addClass('collapsed');

        $('#menuHabitaciones').removeClass('show');

        tablaResHab();

       } else {

        $('#navHabitaciones').addClass('show');

        $('#menuHabitaciones').removeClass('collapsed');

       }

    });

	

	//CLICK VER TABLA CONSULTAS

    $('#consulta-tabla').click(function(){

      if($('#ver-consulta-tabla').is(':hidden')){

		mostrarSeccionMenu("ver-consulta-tabla");

        $('#navMedico').addClass('collapsed');

        $('#menuMedico').removeClass('show');

      } else {

        $('#navMedico').addClass('show');

        $('#menuMedico').removeClass('collapsed');

      }

    });

	

	//CLICK EN MIS DATOS

    $('#misdatos').click(function(){

      if($('#ver-misdatos').is(':hidden')){

        mostrarSeccionMenu("ver-misdatos");

        cargarMisDatos(idUsuario);

      } 

    });

	

	

	//EN GENERAL, PARA MOSTRAR LA PLANTA O NO EN FUNCION DEL ROL

	$('.rol').click( function(){

      rol = $(this).val();

      if (rol != "" && rol != "mantenimiento" && rol != "admin"){

        $('.labelPlanta').show();

        $('.inputPlanta').show();

      } else {

        $('.labelPlanta').hide();

        $('.inputPlanta').hide();

		$('.inputPlanta').find('select').val("");

      }

    });

	

	

	//CLICK MODIFICAR PLAN ATENCION INDIVIDUALIZADO

    $('#modificar-plan').click(function(){

      if($('#ver-modificar-plan').is(':hidden')){

		mostrarSeccionMenu("ver-modificar-plan");

        $('#navPai').addClass('collapsed');

        $('#menuPai').removeClass('show');

		$('.pai').summernote({

			height: 150, 

			toolbar:[

				['style',['bold','italic','underline','clear']],

				//['fontface',['fontname']],

				['textsize',['fontsize']],

				['fontclr',['color']],

				['alignment',['ul','ol','paragraph']],

				['insert',['link','picture','table']],

				['adv',['codeview']]

			]

		});

      } else {

        $('#navPai').addClass('show');

        $('#menuPai').removeClass('collapsed');

      }

    });





    //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*

    //AQUÍ PARA ABAJO SON EVENTOS DE BOTONES DE ALTA, BAJA, MODIFICACION

    //-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*



	//CLICK EN EL BOTON CAMBIAR MIS DATOS

    $('#boton-misdatos').click(function(){

		var correcto = validarModificarMisDatos();

		if(correcto)

			modificarMisDatos(idUsuario);

	});

	

    //CLICK EN EL BOTON ALTA DE PERSONAL

    $('#boton-alta-personal').click(function(){

		var correcto = validarAltaPersonal();

		if(correcto)

			altaPersonal();

	});

		

     //CLICK EN EL BOTON BAJA PERSONAL

    $('#boton-baja-personal').click(function(){

		var correcto = validarBajaPersonal();

		if(correcto)

			bajaPersonal();

    });



    //CARGAR TRABAJADOR EN MODIFICAR PERSONAL

    $('#ver-modificar-personal').find($('.listadoPersonal')).change(function(){

		cargarDatosPersonal();

    });

	

    //CLICK EN EL BOTON DE MODIFICAR EN MODIFICAR PERSONAL

    $('#boton-modificar-personal').click(function(){

      var correcto =  validarModificarPersonal();

	  if(correcto)

			modificarPersonal();

		

    });

	

	//CONTROL CKECKBOX ACTIVO/INACTIVO EN MODIFICAR PERSONAL

	$('#activado-personal').change(function(){

		if($('#activado-personal').prop('checked')==true){

			swal({

				title: "CAMBIAR A PERSONAL EN ACTIVO",

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

						activarPersonal();

						break;

					case "Cancelar":

						$('#activado-personal').prop('checked',false);

						break;

				}

			});

		}

		else if($('#activado-personal').prop('checked')==false){

			$('#activado-personal').prop('checked',true);

			swal({

				title: "CAMBIAR A PERSONAL NO ACTIVO",

				text:  "Para dar de baja al trabajador acuda a la sección 'BAJA PERSONAL'",

				buttons: false,

				icon:  "error",

				timer: 2500,

			});

			($('#activado-personal').prop('checked')==true)

		}

	});

	

	//CLICK BOTON QUE GENERA LA TABLA CON LOS DATOS DEL HORARIO

    $('#boton-ver-horario').click(function(){

		cargarDatosTablaHorario();

    });


//------->
	//CLICK BOTON NUEVA MEDICACIÓN



	$('#btn-new-medic').click(function(){

		mostrarNewMedicacion();

	});



	//CLICK BOTON CANCELAR NUEVA MEDICACION

	$('#btn-cancel-medic').click(function(){

		cancelarNuevaMedicacion();

	});



	//CLICK BOTON AÑADIR MEDICACION



	$('#btn-add-medic').click(function(){

		var correcto = validarNewMedicacion();

		if(correcto){

			addMedicacionTabla();

		}else{

			swal({

				title: "ERROR!",

				text:  "Faltan datos por rellenar",

				buttons: false,

				icon:  "error",

				timer: 1500,

			  });

		}

	});



	//CLICK BOTÓN VACIAR MEDICACION



	$("#btn-empty-medic").click(function(){

		limpiarTablaMedic();

	});



	//LO MISMO VERSIÓN MODIFICAR



	//CLICK BOTON NUEVA MEDICACIÓN



	$('#btn-new-medic-mod').click(function(){

		mostrarNewMedicacion_mod();

	});



	//CLICK BOTON CANCELAR NUEVA MEDICACION

	$('#btn-cancel-medic-mod').click(function(){

		cancelarNuevaMedicacion_mod();

	});



	//CLICK BOTON AÑADIR MEDICACION



	$('#btn-add-medic-mod').click(function(){

		var correcto = validarNewMedicacion_mod();

		if(correcto){

			addMedicacionTabla_mod();

		}else{

			swal({

				title: "ERROR!",

				text:  "Faltan datos por rellenar",

				buttons: false,

				icon:  "error",

				timer: 1500,

			  });

		}

	});



	//CLICK BOTÓN VACIAR MEDICACION



	$("#btn-empty-medic-mod").click(function(){

		limpiarTablaMedic_mod();

	});


	//VERSION PAI DE LO ANTERIOR

	 //CLICK BOTON NUEVA MEDICACIÓN



	$('#btn-new-medic-pai').click(function(){

		mostrarNewMedicacion_pai();

	});



	//CLICK BOTON CANCELAR NUEVA MEDICACION

	$('#btn-cancel-medic-pai').click(function(){

		cancelarNuevaMedicacion_pai();

	});



	//CLICK BOTON AÑADIR MEDICACION



	$('#btn-add-medic-pai').click(function(){

		var correcto = validarNewMedicacion_pai();

		if(correcto){

			addMedicacionTabla_pai();

		}else{

			swal({

				title: "ERROR!",

				text:  "Faltan datos por rellenar",

				buttons: false,

				icon:  "error",

				timer: 1500,

			  });

		}

	});



	//CLICK BOTÓN VACIAR MEDICACION



	$("#btn-empty-medic-pai").click(function(){

		limpiarTablaMedic_pai();

	});


	//CLICK BOTON ALTA DE RESIDENTE

    $('#boton-alta-residente').click(function(){

		var correcto = validarAltaResidente();

       if(correcto)

          altaResidente();

         

    });

	

	 //CLICK EN EL BOTON BAJA RESIDENE

    $('#boton-baja-residente').click(function(){

		var correcto = validarBajaResidente();

		if(correcto)

			bajaResidente();

    });

	

	//CARGAR RESIDENTE EN MODIFICAR RESIDENTE

    $('#ver-modificar-residente').find($('.listadoResidentes')).change(function(){

		cargarDatosResidente();

    });

	

		

	//CLICK EN EL BOTON DE MODIFICAR EN MODIFICAR RESIDENTE

    $('#boton-modificar-residente').click(function(){

      var correcto =  validarModificarResidente();

	  if(correcto)

			modificarResidente();

		

    });

	

	//CLICK BOTON QUE GENERA LA TABLA CON LOS DATOS DE CONTACTO DEL RESIDENTE

    $('#boton-ver-datos').click(function(){

		cargarDatosContacto();

    });

	

	

	//CLICK BOTON AGREGAR INCIDENCIA RESPECTO AL RESIDENTE

	$('#boton-diario-auxiliar').click(function(){

		var correcto = validarIncidencia();

		if(correcto)

			agregarIncidencia();

	});

	

	//CLICK BOTON AGREGAR CONSULTA

    $('#boton-agregar-consulta').click(function(){

		var correcto = validarConsulta();

		if(correcto)

			agregarConsulta();

	});

		

	//CLICK BOTON TABLA CON EL HISTORICO DE CONSULTA DEL RESIDENTE

    $('#boton-tabla-consulta').click(function(){

		cargarDatosConsultaMedica();

    });

	

	//CARGAR DATOS ACTUALES HABITACION RESIDENTE

    $('#ver-mover-habitacion').find($('.listadoResidentes')).change(function(){

		cargarDatosHabitacionActual();

    });

	

	//CLICK BOTON MOVER RESIDENTE DE HABITACION

    $('#boton-mover-habitacion').click(function(){

		var correcto = validarCambioHabitacion();

		if(correcto)

			moverResidenteHabitacion();

	});

	

	//CARGAR RESIDENTE EN MODIFICAR PAI

    $('#ver-modificar-plan').find($('.listadoResidentes')).change(function(){

		limpiarPai();

		cargarDatosPai();

    });

		

	//CLICK BOTON MODIFICAR PAI

    $('#boton-modificar-pai').click(function(){

		var correcto = validarPai();

		if(correcto)

			modificarPai();

	});

	

	

});





function mostrarSeccionMenu (nombreSeccion){

	$(".seccion-menu").each(function(index) {

		if($(this).attr("id")== nombreSeccion)

			$(this).show();

		else 

			$(this).hide();

		

	});



	if($("#"+nombreSeccion).hasClass('residenteView')){

			$('.modoBusquedaResidente').val("");

			$('.selectOcultable').hide();

			$('.seccionOcultableResidentes').hide();

			$('#ver-tabla-consulta').hide();

			$('#boton-ver-datos').hide();

			$('.listadoResidentes').val("");

			listarResidentes();

	}

	

	if($("#"+nombreSeccion).hasClass('personalView')){

			$('.modoBusquedaPersonal').val("");

			$('.selectPersonalOcultable').hide();

			$('.seccionOcultable').hide();

			$('.listadoPersonal').val("");

			$('#boton-ver-horario').hide();

			$('#ver-tabla-horario').hide();

			listarPersonal();

	}



    



	return null;

}







function listarResidentes(){

	$.ajax({

		url: '../controllers/welcome.php?task=listarResidentes',

		type: "GET",

		async: false,

		dataType: "html"

	});	

}



function listarPersonal(){

	$.ajax({

		url: '../controllers/welcome.php?task=listarPersonal',

		type: "GET",

		async: false,

		dataType: "html"

	});	

}



