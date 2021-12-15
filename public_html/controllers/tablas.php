<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);	
error_reporting (E_ALL); 

include_once('../db/config.php');
require("../models/tablas_model.php");

if(isset($_REQUEST["funcion"])){
	if($_REQUEST["funcion"] == "personalhistorico")
		echo tablaPersonalHistorico($conn);
	
	else if($_REQUEST["funcion"] == "personalactivo")
		echo tablaPersonalActivo($conn);
    ///Personal hisorico limpieza
    else if($_REQUEST["funcion"] == "personalhistoricolimpieza")
		echo tablaPersonalHistoricoLimpieza($conn);
    ///Personal-Limpieza
    else if($_REQUEST["funcion"] == "personalactivolimpieza")
		echo tablaPersonalActivoLimpieza($conn);
    /// Personal historico mantenimiento
    else if($_REQUEST["funcion"] == "personalhistoricomantenimiento")
		echo tablaPersonalHistoricoMantenimiento($conn);
    /// Personal  mantenimiento activo
    else if($_REQUEST["funcion"] == "personalactivomantenimiento")
		echo tablaPersonalActivoMantenimiento($conn);    
    /// Personal historico resto
    else if($_REQUEST["funcion"] == "personalhistoricoresto")
		echo tablaPersonalHistoricoResto($conn);
    /// Personal resto activo
    else if($_REQUEST["funcion"] == "personalactivoresto")
		echo tablaPersonalActivoResto($conn);
    ///
	else if($_REQUEST['funcion'] == "datoscontacto"){ //Datos de contacto de cada residente
		$idResidente = $_REQUEST['idResidente'];	
		echo tablaDatosContacto($conn,$idResidente);
	}
	else if($_REQUEST['funcion'] == "residentehistorico")
		echo tablaDatosResidenteHistorico($conn);
	
	else if($_REQUEST['funcion'] == "residentealta")
		echo tablaDatosResidenteAlta($conn);
	
	else if($_REQUEST['funcion'] == "historicoincidencias")
		echo tablaDatosIncidencias($conn);
	
	else if($_REQUEST['funcion'] == "consultamedica"){
		$idResidente = $_REQUEST['idResidente'];
		echo tablaDatosConsultaMedica($conn,$idResidente);
	}
	else if($_REQUEST['funcion'] == "historicoHabitaciones"){
		echo tablaDatosHabitaciones($conn);
	}
	else if($_REQUEST['funcion'] == "tratamientos"){
		$idResidente = $_REQUEST['idResidente'];
		echo tablaDatosTratamientos($conn,$idResidente);
	}
	else if($_REQUEST['funcion'] == "horariopersonal"){
		$idPersonal = $_REQUEST['idPersonal'];
		echo tablaHorarioPersonal($conn,$idPersonal);
	}


}

?>