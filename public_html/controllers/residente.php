<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);	
error_reporting (E_ALL); 

include_once('../db/config.php');
include_once("../models/json.class.php");
require("../models/residente_model.php");
require("../models/CRUD_model.php");

$order = isset($_POST["order"]) ? " order by " . $_POST["order"] : "";
$limit = isset($_POST["limit"]) ? $_POST["limit"] : "";

$listadoResidentesActivos=array();

if(isset($_GET["task"])){
	//TENEMOS QUE AÑADIR TASK ALTAMEDICACION
	if($_GET["task"] == "altaResidente"){
		$datosResidente=$_POST['datosResidente'];
		$datosFamiliar = $_POST['datosFamiliar'];
		echo altaResidente($conn,$datosResidente,$datosFamiliar,$order,$limit);
		
	}else if ($_GET["task"] == "getExpediente"){
		echo getExpediente($conn, $_POST['prefijo']);	
		
	}else if($_GET["task"] == "bajaResidente"){
		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		echo bajaResidente($conn,$arrayCamposToUpdate,$arrayCamposWhere,$order,$limit);
	}
	else if($_GET["task"] == "consultarResidente"){
		echo consultarResidente($conn,$_POST["id_residente"],$order,$limit);
	}	
	else if($_GET["task"] == "modificarResidente"){
		$datosResidente=$_POST['datosResidente'];
		$datosFamiliar = $_POST['datosFamiliar'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		echo modificarResidente($conn,$datosResidente,$datosFamiliar,$arrayCamposWhere,$order,$limit);
	}
	else if($_GET["task"] == "modificarPai"){
		$datosOtroFamiliar = null;
		$datosResidente=$_POST['datosResidente'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		if (isset($_POST['datosOtroFamiliar'])){
			$datosOtroFamiliar = $_POST['datosOtroFamiliar'];
		}
		echo modificarPai($conn,$datosResidente,$datosOtroFamiliar,$arrayCamposWhere,$order,$limit);
	}
	else if($_GET["task"] == "consultarPai"){
		echo consultarPai($conn,$_POST["id_residente"],$order,$limit);
	}
	else if($_GET["task"] == "activarResidente"){
		$arrayCamposToUpdate=$_POST['objetoCamposUpdate'];
		$arrayCamposWhere = $_POST['objetoCamposWhere'];
		echo activarResidente($conn,$arrayCamposToUpdate,$arrayCamposWhere);
	}else if($_GET["task"] == "altaMedicacion"){
		$arrayMedicamentosMedicacion = $_POST['datosMedicacion'];
		$numero = $_POST['n_medicacion_nuevo'];
		echo altaMedicacion($conn, $arrayMedicamentosMedicacion, $numero);
	}else if($_GET['task'] == 'nMedicacion'){
		echo getMaxNmedicacion($conn);
	}else if($_GET['task'] == 'modificarMedicacion'){
		$nMedicacionPersona = $_POST['n_medicacion_persona'];


		echo updateMedicacionTable($conn, $nMedicacionPersona);
	}
	
}

?>