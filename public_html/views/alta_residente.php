<head>
    <!--modal style-->

    <style>
    </style>
    <!--End script modal-->
</head>



<!-- ALTA DE RESIDENTE -->
<div id="ver-alta-residente" class="seccion-menu" style="display: none;">
    <div class=" align-items-center justify-content-between text-center mb-5">
        <h1 class="h3 mb-0 text-gray-800">Alta Residente</h1>
    </div>

    <div class="row">
        <div class="col-12 mb-4 text-center titulo-seccion">Datos del Residente:</div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">DNI:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <div class="input-group-prepend ">
                    <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                </div>
                <input type="text" name="dniResidente" class="form-control" id="dniResidente" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Nombre:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="nombreResidente" class="form-control" id="nombreResidente" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Primer Apellido:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="apellido1Residente" class="form-control" id="apellido1Residente"
                    placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Segundo Apellido:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="apellido2Residente" class="form-control" id="apellido2Residente"
                    placeholder="">
            </div>
        </div>
        <!--otro-->

        <!--otro-->
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Fecha de Nacimiento:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" class="form-control datepicker" name="fechaNacimiento" id="fechaNacimiento"
                    placeholder="Seleccionar Fecha">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Grado de Dependecia:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group mb-3">
                <select class="custom-select" id="gradoDependencia">
                    <option value="0">Seleccione Grado de Dependencia:</option>
                    <option value="1">Grado I: Dependencia Moderada</option>
                    <option value="2">Grado II: Dependencia Severa</option>
                    <option value="3">Grado III: Gran Dependecia</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Edad:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="number" name="edad" class="form-control" id="edadResidente" disabled>
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800" for="">Indice de katz:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">
            <form>
                <button type="button" class="btn btn-warning" data-toggle="modal"
                    data-target="#exampleModalCenter">Seleccionar</button>
            </form>
        </div>

        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800" for="">Sexo:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group mb-3">
                <select class="custom-select" id="sexo">
                    <option value="">Selcciona sexo: </option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="1">Otro</option>
                    <!--Se añade otro sexo-->
                </select>
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800" for="">Indice de Barthel:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10" style="padding-top: 5px;">
            <form>
                <button type="button" class="btn btn-warning" data-toggle="modal"
                    data-target="#exampleModalCenter2">Seleccionar</button>
            </form>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="row mt-2" id="otroSexo" style="display: none; margin-left:15rem">
            <div class=" col-xl-12 col-lg-5 col-md-12 col-sm-12 ">
                <div class="select-group form-group">
                    <input type="text" name="otroSexo" class="form-control form-control-sm"
                        placeholder="Introduzca Sexo">
                </div>
            </div>
        </div>

        <div style="background-color: rgba(0, 0, 0, 0.1); display: none;" class="modal fade" id="exampleModalCenter"
            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border-radius: 5000px; width:800px;">
                    <div class="modal-header" style="margin-bottom: -24px;border-radius:10px; border:none;">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="z-index: 1;margin-top:-30px; margin-right:-15px;">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color:#4e73df;background-image: linear-gradient(
                180deg,#4e73df 10%,#224abe 100%);background-size: cover; border-radius:20px;">
                        <form action="">
                            <div id="alerta">
                                <h3 data-fontsize="16" data-lineheight="22.4px"
                                    class="fusion-responsive-typography-calculated titu"
                                    style="--fontSize:16; line-height: 1.4; --minFontSize:16;">Indice de Katz:</h3>
                                <table id="tabla" border="1" style="border: 1px solid #e0dede;">
                                    <tbody>
                                        <tr>
                                            <td colspan="1" rowspan="2" style="color:white;"><strong>
                                                    <center>1. Baño</center>
                                                </strong></td>
                                            <td style="padding: 0 10px; color:white;">Independiente: Se baña solo o
                                                precisa ayuda para lavar alguna zona, como la espalda, o una extremidad
                                                con minusvalía</td>
                                            <td>
                                                <left><input id="B" type="radio" name="B" value="0" size="2"></left>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para
                                                lavar más de una zona, para salir o entrar en la bañera, o no puede
                                                bañarse solo</td>
                                            <td>
                                                <left><input id="B" type="radio" name="B" value="1" size="2"></left>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="1" rowspan="2" style="color:white;"><strong>
                                                    <center>2. Vestido</center>
                                                </strong></td>
                                            <td style="padding: 0 10px; color:white;">Independiente: Saca ropa de
                                                cajones y armarios, se la pone, y abrocha. Se excluye el acto de atarse
                                                los zapatos</td>
                                            <td>
                                                <left><input id="V" type="radio" name="V" value="0" size="2"></left>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 10px; color:white;">Dependiente: No se viste por sí
                                                mismo, o permanece parcialmente desvestido </td>
                                            <td>
                                                <left><input id="V" type="radio" name="V" value="1" size="2"></left>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td colspan="1" rowspan="2" style="color:white;"><strong>
                                                    <center>3. Uso del WC</center>
                                                </strong></td>
                                            <td style="padding: 0 10px; color:white;">Independiente: Va al WC solo, se
                                                arregla la ropa y se limpia </td>
                                            <td><input id="WC" type="radio" name="WC" value="0" size="2"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para ir
                                                al WC </td>
                                            <td><input id="WC" type="radio" name="WC" value="1" size="2"></td>
                                        </tr>


                                        <tr>
                                            <td colspan="1" rowspan="2" style="color:white;"><strong>
                                                    <center>4. Movilidad</center>
                                                </strong></td>
                                            <td style="padding: 0 10px; color:white;">Independiente: Se levanta y
                                                acuesta en la cama por sí mismo, y puede levantarse de una silla por sí
                                                mismo</td>
                                            <td><input id="M" type="radio" name="M" value="0" size="2"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para
                                                levantarse y acostarse en la cama o silla. No realiza uno o más
                                                desplazamientos</td>
                                            <td><input id="M" type="radio" name="M" value="1" size="2"></td>
                                        </tr>


                                        <tr>
                                            <td colspan="1" rowspan="2" style="color:white;"><strong>
                                                    <center>5. Continencia</center>
                                                </strong></td>
                                            <td style="padding: 0 10px; color:white;">Independiente: Control completo de
                                                micción y defecación </td>
                                            <td><input id="C" type="radio" name="C" value="0" size="2"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 10px; color:white;">Dependiente: Incontinencia parcial
                                                o total de la micción o defecación </td>
                                            <td><input id="C" type="radio" name="C" value="1" size="2"></td>
                                        </tr>


                                        <tr>
                                            <td colspan="1" rowspan="2" style="width:140px; color:white;"><strong>
                                                    <center>6. Alimentación</center>
                                                </strong></td>
                                            <td style="padding: 0 10px; color:white;">Independiente: Lleva el alimento a
                                                la boca desde el plato o equivalente (se excluye cortar la carne)</td>
                                            <td><input id="A" type="radio" name="A" value="0" size="2"></td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0 10px; color:white;">Dependiente: Precisa ayuda para
                                                comer, no come en absoluto, o requiere alimentación parenteral</td>
                                            <td><input id="A" type="radio" name="A" value="1" size="2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>


                                Indice de Katz <input id="IK" name="IK" size="4" readonly><br>
                                <br>

                                Valoración: <input id="J" name="J" size="35" readonly> <br>
                                <br>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--Barthel-->
        <div style="background-color: rgba(0, 0, 0, 0.1); display: none;" class="modal fade" id="exampleModalCenter2"
            tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border-radius: 5000px; width:900px;">
                    <div class="modal-header" style="margin-bottom: -24px;border-radius:10px; border:none;">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            style="z-index: 1;margin-top:-30px; margin-right:-15px;">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color:#4e73df;background-image: linear-gradient(
                180deg,#4e73df 10%,#224abe 100%);background-size: cover; border-radius:20px;">
                        <form action="">
                            <div class="datos pegar my-5 text-center">
                                <h3 data-fontsize="16" data-lineheight="22.4px"
                                    class="fusion-responsive-typography-calculated titu"
                                    style="--fontSize:16; line-height: 1.4; --minFontSize:16;">Indice de Barthel</h3>
                                <div class="divform1"><label for="uno"><b>Comer: </b></label><br>
                                    <select name="uno" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Totalmente independiente.</option>
                                        <option value="valdos">Necesita ayuda para cortar carne, el pan, etc.</option>
                                        <option value="valtres">Dependiente.</option>
                                    </select>
                                </div>

                                <div class="divform1 "><label for="dos"><b>Lavarse: </b></label><br>
                                    <select name="dos" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente, entra y sale solo del baño.</option>
                                        <option value="valdos">Dependiente.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="tres"><b>Vestirse: </b></label><br>
                                    <select name="tres" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente. Capaz de ponerse y quitarse la ropa,
                                            abotonarse y atarse los zapatos.</option>
                                        <option value="valdos">Necesita ayuda.</option>
                                        <option value="valtres">Dependiente.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="cuatro"><b>Arreglarse: </b></label><br>
                                    <select name="cuatro" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente para lavarse la cara, las manos, peinarse,
                                            afeitarse, maquillarse, etc..</option>
                                        <option value="valdos">Dependiente.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="cinco"><b>Deposiciones: </b></label><br>
                                    <select name="cinco" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Continencia normal.</option>
                                        <option value="valdos">Ocasionalmente algún episodio de incontinencia, o
                                            necesita ayuda para administrarse supositorios o lavativas.</option>
                                        <option value="valtres">Incontinencia.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="seis"><b>Micción: </b></label><br>
                                    <select name="seis" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Continencia normal, o es capaz de cuidarse de la sondsa
                                            si tiene una puesta.</option>
                                        <option value="valdos"> 1 episodio diario como máximo de incontinencia, o
                                            necesita ayuda para cuidar de la sonda.</option>
                                        <option value="valtres">Incontinencia.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="siete"><b>Uso del retrete: </b></label><br>
                                    <select name="siete" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente para ir al cuardo de aseo, quitarse y
                                            ponerse la ropa.</option>
                                        <option value="valdos">Necesita ayuda para ir al retrete, pero se limpia solo.
                                        </option>
                                        <option value="valtres">Dependiente.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="ocho"><b>Trasladarse: </b></label><br>
                                    <select name="ocho" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente para ir del sillón a la cama.</option>
                                        <option value="valdos">Mínima ayuda física o supervisión para hacerlo.</option>
                                        <option value="valtres">Necesita gran ayuda, pero es capaz de mantenerse sentado
                                            solo.</option>
                                        <option value="valcuatro">Dependiente.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="nueve"><b>Deambular: </b></label><br>
                                    <select name="nueve" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente, camina solo 50 metros.</option>
                                        <option value="valdos">Necesita ayuda física o supervisión para andar 50 metros.
                                        </option>
                                        <option value="valtres">Independiente en silla de ruedas sin ayuda.</option>
                                        <option value="valcuatro">Dependiente.</option>
                                    </select>
                                </div>
                                <div class="divform1 "><label for="diez"><b>Escaleras: </b></label><br>
                                    <select name="diez" size="1" class="opcion">
                                        <option selected="selected" value="nada">&nbsp;</option>
                                        <option value="valuno">Independiente para bajar y subir escaleras.</option>
                                        <option value="valdos">Necesita ayuda física o supervisión para hacerlo.
                                        </option>
                                        <option value="valtres">Dependiente.</option>
                                    </select>
                                </div>
                            </div>


                            <div id="caja" class="caja">
                                <div class="funciones mb-5 d-block text-center" id="funciones">
                                    <!--button   class="boton" id="botoncito" ><span class="etiqueta" style="background-color: green;">Calcular</span></button><br>-->
                                </div>
                            </div>


                            <div class="resultado pegar text-center">
                                <div class="divres ancho"><label for="resultado" class="ancho1"><b>Puntuación:
                                        </b></label> <input type="text" id="resultado" name="resultado" size="5"
                                        readonly="readonly"> <b>(rango 0 a 100 / 90 silla de ruedas)</b>
                                </div><br>
                                <div class="divres ancho"><label for="resultado1" class="ancho1"><b>Grado de
                                            dependencia: </b></label> <input type="text" id="resultado1"
                                        name="resultado1" size="30" readonly="readonly">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!---->
    </div>




    <div class="row mt-2">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Asignar Habitación:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="row mt-1">
                <div class="col-12 text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input habIndividual" type="radio" name="tipoHabitacion"
                            value="INDIVIDUAL">
                        <label class="form-check-label" for="habIndividual">Individual</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input habDoble" type="radio" name="tipoHabitacion" value="DOBLE">
                        <label class="form-check-label" for="habDoble">Doble</label>
                    </div>
                </div>
            </div>
            <div class="row mt-1 habitacionIndividual" style="display: none;">
                <div class="col-12 text-center">
                    <div class="input-group mb-3 ">
                        <select class="custom-select form-control-sm" id="habitacionIndivAsignada">
                            <option value="">Seleccione Habitación</option>
                            <?php
							foreach($habitacioneslibresIndividuales as $habitacion){
							?>
                            <option value="<?php echo $habitacion[0] ?>"><?php echo $habitacion[0] ?></option>
                            <?php 
							}
							?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mt-1 habitacionDoble" style="display: none;">
                <div class="col-12 text-center">
                    <div class="input-group mb-3 ">
                        <select class="custom-select form-control-sm" id="habitacionDobleAsignada">
                            <option value="">Seleccione Habitación</option>
                            <?php
							foreach($habitacioneslibresDobles as $habitacion){
							?>
                            <option value="<?php echo $habitacion[0] ?>"><?php echo $habitacion[0] ?></option>
                            <?php 
							}
							?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" id="listadoResponsablesLabel"
            style="padding-top: 5px; display: none;">
            <label class="font-weight-bold text-gray-800">Profesional Responsable:</label>
        </div>
        <div class="mt-4 col-xl-3 col-lg-3 col-md-10 col-sm-10" id="listadoResponsablesSelect"
            style="padding-top: 5px; display: none;">
            <div class="input-group mb-3">
                <select class="custom-select responsableResidente" id="responsableResidente">
                    <option value="">Seleccione Responsable</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800" for="">Medicación:</label>
        </div>
        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">
            <button type="button" class="btn btn-primary" id="btn-new-medic" style="cursor: pointer !important;">Añadir medicación</button>
        </div>
    </div>
    <!--Medicación - UPDATE -->
    <div class="container">
        <div class="row d-none" id="tabla-medicacion">
            <div class="table-responsive">
                <table id="tabla-medicacion-res" class="table table-striped table-bordered mt-4" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Via de administración</th>
                            <th>Unidad de medida</th>
                            <th>Desayuno</th>
                            <th>Comida</th>
                            <th>Merienda</th>
                            <th>Cena</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="d-none flex-row-reverse d-flex text-center" id="div-btn-vaciar-medic">         
            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                <button type="button" class="btn btn-danger d-none" id="btn-empty-medic" style="cursor: pointer !important;">Vaciar medicación</button>
            </div>
        </div>
    </div>
    <div class="row d-none" id="form-medic-1">
        
        <div class="mt-4 col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group mb-3">
                <select class="custom-select" id="medicacion">
                    <option value="">Selcciona medicación: </option>
                    <option value="analgesico">Analgésicos</option>
                    <option value="antiacido">Antiácidos y antiulcerosos</option>
                    <option value="antialergico">Antialérgicos</option>
                    <option value="antidiarrea">Antidiarreicos y laxantes</option>
                    <optgroup label="Antiinfecciosos">
                        <option value="antibiotico">Antibióticos</option>
                        <option value="antifungico">Antifúngicos</option>
                        <option value="antiviral">Antivirales</option>
                        <option value="antiparasito">Antiparasitarios</option>
                    </optgroup>
                    <option value="antiinflamo">Antiinflamatorios</option>
                    <option value="antipire">Antipiréticos</option>
                    <option value="antitusi">Antitusivos y mucolíticos</option>
                    <option value="antidepre">Antidepresivos y ansiolíticos</option>
                    <option value="insomio">insomnio</option>
                    <option value="artrosis">Artrosis</option>
                    <option value="hipertension">Hipertensión</option>
                    <option value="colesterol">Colesterol</option>
                    <option value="anticoago">Anticoagulantes</option>
                    <option value="diuretico">Diuréticos</option>
                    <option value="vitamina">Vitamínicos</option>
                    <option value="insuficiente">Insuficiencia respiratoria</option>
                </select>
            </div>
        </div>
        

        <div class="mt-4 col-xl-2 col-lg-1 col-md-0 col-sm-0">
            <div class="input-group form-group" id="tipoMedicamento" style="display:none;">
                <input type="text" name="nombreMedicamento" class="form-control" id="nombreMedicamento" placeholder="Nombre medicamen.">
            </div>
        </div>
        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" id="listadoViaLabel"
            style="padding-top: 5px; display: none;">
            <label class="font-weight-bold text-gray-800">Vía administración:</label>
        </div>
        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listadoViaSelect"
            style="padding-top: 5px; display: none;">
            <div class="input-group mb-3">
                <select class="custom-select seleccionVia" id="seleccionVia">
                    <option value="">Seleccione Vía</option>
                    <optgroup label="Oral">
                        <option value="jarabe">Jarabes</option>
                        <option value="comprimido">Comprimidos</option>
                        <option value="capsula">Capsulas</option>
                    </optgroup>
                    <option value="instravenoso">Intravenosos o intramusculares</option>
                    <option value="intradermico">Intradérmicos</option>
                    <option value="rectal">Rectal</option>
                    <option value="vaginal">Vaginal</option>
                    <option value="cutanea">Cutánea</option>
                    <option value="otica">Soluciones óticas</option>
                    <option value="ofta">Soluciones oftálmicas</option>
                    <option value="nariz">Soluciones nasales</option>
                </select>
            </div>
        </div>
        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" >
            <select class="custom-select" name="listadoUnidades" id="listadoUnidades" style="padding-top: 5px;display: none;">
                <option value="">Seleccione ud. de medida</option>
                <option value="unidades">Unidades</option>
                <option value="ml">Mililitros</option>
                <option value="sn">Si/No</option>
            </select>    
        </div>
    </div>
    <div class="row d-none" id="form-medic-2">
        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" id="posologiaLabel"
            style="padding-top: 5px;display: none;">
            <label class="font-weight-bold text-gray-800" for="">Posología:</label>
        </div>
        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaDesayuno" style="display: none;">
            <div class="input-group mb-3">
                <select class="custom-select" id="desayuno">
                    <option value="">Desayuno</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaComida" style="display: none;">
            <div class="input-group mb-3">
                <select class="custom-select" id="comida">
                    <option value="">Comida</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaMerienda" style="display: none;">
            <div class="input-group mb-3">
                <select class="custom-select" id="merienda">
                    <option value="">Merienda</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaCena" style="display: none;">
            <div class="input-group mb-3">
                <select class="custom-select" id="cena">
                    <option value="">Cena</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="flex-row-reverse d-flex align-items-right justify-content-right text-center">
            <div class="mt-4 col-6">
                <button type="button" class="btn btn-success" id="btn-add-medic" style="cursor: pointer !important;">Añadir medicación</button>
            </div>
            <div class="mt-4 col-6">
                <button type="button" class="btn btn-secondary" id="btn-cancel-medic" style="cursor: pointer !important;">Cancelar</button>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " style="padding-top: 5px;">
                    <label class="font-weight-bold text-gray-800">Discapacidad:</label>
                </div>
            </div>
            <div class="row  checkbox-row discapacidadAlta">
                <div class="col-10 form-check">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="intelectual">
                        <label class="form-check-label mr-1" for="intelectual">Intelectual</label>
                    </div>
                    <div class=" col-xl-3 col-lg-3 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="fisica">
                        <label class="form-check-label mr-1" for="fisica">Física</label>
                    </div>
                    <div class=" col-xl-3 col-lg-3  col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="visual">
                        <label class="form-check-label" for="visual">Visual</label>
                    </div>
                </div>
            </div>
            <div class="row  checkbox-row discapacidadAlta">
                <div class=" col-10 form-check">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input mr-1" id="enfermendadMental">
                        <label class="form-check-label" for="enfermendadMental">Enf. Mental</label>
                    </div>
                    <div class=" col-xl-3 col-lg-3 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input mr-1" id="demencia">
                        <label class="form-check-label mr-1" for="demencia">Demencia</label>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="otraDiscapacidad">
                        <label class="form-check-label" for="otraDiscapacidad">Otra</label>
                    </div>
                </div>
            </div>
            <div class="row mt-2" id="otraDiscapacidadTexto" style="display: none;">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="input-group form-group">
                        <input type="text" name="otraDiscapacidadTexto" class="form-control form-control-sm"
                            placeholder="Introduzca Discapacidad">
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="row mt-4">
        <div class="col-12" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Situación Médica:</label>
        </div>
        <div class="col-12 form-check">
            <div class="row  checkbox-row sitMedicaAlta">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="enfermedadLeve">
                        <label class="form-check-label" for="enfermedadLeve">Enfermedad leve</label>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="pronosticoReservado">
                        <label class="form-check-label mr-1" for="pronosticoReservado">Pronóstico reservado (en espera
                            de resultados)</label>
                    </div>

                </div>
            </div>
            <div class="row  checkbox-row sitMedicaAlta">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="tratamCurativo">
                        <label class="form-check-label mr-1" for="tratamCurativo">Tratamiento curativo</label>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="tratamPaliativo">
                        <label class="form-check-label" for="tratamPaliativo">Tratamiento paliativo</label>
                    </div>
                </div>
            </div>
            <div class="row  checkbox-row sitMedicaAlta">
                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input mr-1" id="tratamFarmaTemp">
                        <label class="form-check-label" for="tratamFarmaTemp">Tratamiento farmacológico temporal</label>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input mr-1" id="tratamFarmaCron">
                        <label class="form-check-label mr-1" for="tratamFarmaCron">Tratamiento farmacológico
                            crónico</label>
                    </div>
                </div>
            </div>
            <div class="row  checkbox-row sitMedicaAlta">
                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="deterioroCognitivo">
                        <label class="form-check-label" for="deterioroCognitivo">Deterioro cognitivo</label>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="debilidadDebMotriz">
                        <label class="form-check-label" for="debilidadDebMotriz">Debilidad motriz</label>
                    </div>
                </div>
            </div>
            <div class="row  checkbox-row sitMedicaAlta">
                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class=" col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="desorientacion">
                        <label class="form-check-label" for="desorientacion">Desorientación</label>
                    </div>
                    <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="DificultadLenguaje">
                        <label class="form-check-label" for="DificultadLenguaje">Dificultades del Lenguaje</label>
                    </div>
                </div>
            </div>
            <div class="row  checkbox-row sitMedicaAlta">
                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 form-check form-check-inline mt-2">
                        <input type="checkbox" class="form-check-input" id="otraSitMedica">
                        <label class="form-check-label" for="otraSitMedica">Otra</label>
                    </div>
                </div>
            </div>
            <div class="row mt-2" id="otraSitMedicaTexto" style="display: none;">
                <div class=" col-xl-5 col-lg-5 col-md-12 col-sm-12 ">
                    <div class="input-group form-group">
                        <input type="text" name="otraSitMedicaTexto" class="form-control form-control-sm"
                            placeholder="Introduzca Situación Médica">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row mt-2">
        <div class="col-12 mb-4 mt-4 text-center titulo-seccion">Datos Persona de Contacto:</div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Parentesco:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="parentesco" class="form-control" id="parentescoFamiliar" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">DNI:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <div class="input-group-prepend ">
                    <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                </div>
                <input type="text" name="dni" class="form-control" id="dniFamiliar" placeholder="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Nombre:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="nombre" class="form-control" id="nombreFamiliar" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Apellidos:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="apellidos" class="form-control" id="apellidosFamiliar" placeholder="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Dirección Postal:</label>
        </div>
        <div class="col-xl-3 col-lg-9 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="direccion" class="form-control" id="direccionFamiliar" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Codigo Postal:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="number" min="1000" max="52999" name="codigoPostal" class="form-control"
                    id="codigoPostalFamiliar" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Telefono:</label>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="text" name="telefono" class="form-control" id="telefonoFamiliar" placeholder="">
            </div>
        </div>
        <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0"></div>
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
            <label class="font-weight-bold text-gray-800">Email:</label>
        </div>
        <div class="col-xl-3 col-lg-9 col-md-10 col-sm-10">
            <div class="input-group form-group">
                <input type="email" name="email" class="form-control" id="emailFamiliar" placeholder="">
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
            <button type="button" class="btn btn-success" id="boton-alta-residente">Alta Residente</button>
        </div>
    </div>

</div>