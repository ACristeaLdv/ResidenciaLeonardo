<!-- MODIFICAR PLAN DE ATENCION INDIVIDUALIZADO -->
<div id="ver-modificar-plan" class="seccion-menu residenteView" style="display: none;">
    <div class=" align-items-center justify-content-between text-center mb-3">
        <h1 class="h3 mb-0 text-gray-800">Modificar Plan de Atención Individualizado</h1>
    </div>

    <?php 
       include('busqueda_residente.php'); 
	?>

    <div class="seccionOcultableResidentes mt-1" id="seccionPai" style="display: none;">
        <div class="form" id="formulario-pai">
            <!-- Datos Residente -->
            <div class="card shadow" id="ver-tabla-datos" style="width:80%;margin-left:10%;">
                <div class="card-body">
                    <div class="row text-right">
                        <div class="col-xl-6 col-lg-5 col-md-4 col-sm-4"></div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-form-label-sm">
                            <label class="font-weight-bold text-gray-800" for="n_expediente">Número de
                                Expediente:</label>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                            <div class="input-group form-group">
                                <input type="text" name="n_expediente" class="form-control form-control-sm"
                                    placeholder="" readonly>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>
                    </div>

                    <div class="row" style="margin-top:-15px;">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="nombre-residente-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Nombre y Apellidos:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <input type="text" class="form-control form-control-sm" name="nombre-residente-pai"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="responasable-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Profesional de
                                Referencia:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <select class="form-control form-control-sm responsableResidente"
                                    name="responasable-pai" readonly>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top:-15px;">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="grado_dependencia"
                                class="col-form-label-sm font-weight-bold text-gray-800">Grado de dependencia:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <select class="form-control form-control-sm" name="grado_dependencia">
                                    <option value="0">Seleccione Grado de Dependencia:</option>
                                    <option value="1">Grado I: Dependencia Moderada</option>
                                    <option value="2">Grado II: Dependencia Severa</option>
                                    <option value="3">Grado III: Gran Dependecia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <label for="incapacidad_legal"
                                class="col-form-label-sm font-weight-bold text-gray-800">Incapacidad legal:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <select class="form-control form-control-sm" name="incapacidad_legal"
                                    id="incapacidad_legal">
                                    <option value="">Elegir</option>
                                    <option value="1">Sí</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top:-15px;">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <label for="fecha-alta-pai" class="col-form-label-sm font-weight-bold text-gray-800">Fecha
                                de Ingreso:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="fecha-alta-pai" readonly>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <label for="fecha-elaboracion-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Fecha de Elaboración:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text"><i class="fa fa-calendar-minus-o"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="fecha-elaboracion-pai"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                            <label for="fecha-evaluacion-pai"
                                class="col-form-label-sm font-weight-bold text-gray-800">Fecha de Evaluación:</label>
                            <div class="input-group form-group" style="margin-top:-10px;">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text"><i class="fa fa-calendar-check-o"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-sm" name="fecha-evaluacion-pai"
                                    readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-pills nav-fill mt-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="sociosanitarios-tab" data-toggle="pill" href="#pills-sociosanitarios"
                        role="tab" aria-controls="pills-sociosanitarios" aria-selected="true">Datos Sociosanitarios</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="social-tab" data-toggle="pill" href="#pills-social" role="tab"
                        aria-controls="pills-social" aria-selected="false">Área Social</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="sanitaria-tab" data-toggle="pill" href="#pills-sanitaria" role="tab"
                        aria-controls="pills-sanitaria" aria-selected="false">Área Sanitaria</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="psicologica-tab" data-toggle="pill" href="#pills-psicologica" role="tab"
                        aria-controls="pills-psicologica" aria-selected="false">Área Psicológica</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="funcional-tab" data-toggle="pill" href="#pills-funcional" role="tab"
                        aria-controls="pills-funcional" aria-selected="false">Área Funcional</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="sociocultural-tab" data-toggle="pill" href="#pills-sociocultural" role="tab"
                        aria-controls="pills-sociocultural" aria-selected="false">Área Animación Sociocultural</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="indices-tab" data-toggle="pill" href="#pills-indices" role="tab"
                        aria-controls="pills-indices" aria-selected="false">Índices</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active mt-3" id="pills-sociosanitarios" role="tabpanel"
                    aria-labelledby="pills-sociosanitarios">
                    <div class="accordion accordion-group datosSociosanitarios" id="datosSociosanitariosAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="otrosDatosHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOtrosDatos" aria-expanded="true"
                                        aria-controls="collapseOtrosDatos">
                                        Otros Datos del Usuario
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOtrosDatos" class="collapse" aria-labelledby="otrosDatosHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="fecha_nacimiento"
                                                class="col-form-label font-weight-bold text-gray-800">Fecha de
                                                Nacimiento:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="fecha_nacimiento" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="lugarNacimiento"
                                                class="col-form-label font-weight-bold text-gray-800">Lugar de
                                                Nacimiento:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control anadir" name="lugarNacimiento">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="EstadoCivil"
                                                class="col-form-label font-weight-bold text-gray-800">Estado
                                                Civil:</label>
                                            <div class="input-group">
                                                <select class="form-control anadir selectConOtras" name="EstadoCivil">
                                                    <option value="">Elegir</option>
                                                    <option>Soltero/a</option>
                                                    <option>Casado/a</option>
                                                    <option>Separado/a</option>
                                                    <option>Divorciado/a</option>
                                                    <option>Viudo/a</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group ">
                                                <input type="text" name="otrasEstadoCivil" id="otrasEstadoCivil"
                                                    class="form-control anadir d-none ocultable inputOtras"
                                                    placeholder="Especifique Otro Estado Civil">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="dni_residente"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de DNI:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="dni_residente" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="NSS" class="col-form-label font-weight-bold text-gray-800">Nº
                                                Seguridad Social:</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control anadir" name="NSS" id="NSS">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="centroSalud"
                                                class="col-form-label font-weight-bold text-gray-800">Centro de Salud y
                                                Personal Sanitario de Referencia:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control anadir" name="centroSalud">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="famContactoHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseFamContacto" aria-expanded="true"
                                        aria-controls="collapseFamContacto">
                                        Datos del Familiar de Contacto
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseFamContacto" class="collapse" aria-labelledby="famContactoHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="nombre-familiar-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Nombre y
                                                Apellidos:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nombre-familiar-pai"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="direccion_postal"
                                                class="col-form-label font-weight-bold text-gray-800">Dirección:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="direccion_postal"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                            <label for="codigo_postal"
                                                class="col-form-label font-weight-bold text-gray-800">Codigo
                                                Postal:</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="codigo_postal" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="email"
                                                class="col-form-label font-weight-bold text-gray-800">Email:</label>
                                            <div class="input-group">
                                                <input type="mail" class="form-control" name="email" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="telefono"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de
                                                Teléfono:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="telefono" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                            <label for="dni_familiar"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de DNI:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="dni_familiar" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 col-sm-12">
                                            <label for="parentesco"
                                                class="col-form-label font-weight-bold text-gray-800">Parentesco:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="parentesco" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="otrosFamContactoHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOtrosFamContacto"
                                        aria-expanded="true" aria-controls="collapseOtrosFamContacto">
                                        Datos Otros Familiares
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOtrosFamContacto" class="collapse"
                                aria-labelledby="otrosFamContactoHeader">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="form-check">
                                            <div class=" col-12 form-check">
                                                <input type="checkbox" class="form-check-input" id="otroFamiliar">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="otroFamiliar">Añadir datos de otro familiar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="nombre-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Nombre:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="nombre-otros-pai" id="nombre-otros-pai" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="apellidos-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Apellidos:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="apellidos-otros-pai" id="apellidos-otros-pai" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="dni-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">DNI:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="dni-otros-pai" id="dni-otros-pai" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="telefono-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Nº de
                                                Teléfono:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="telefono-otros-pai" id="telefono-otros-pai" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="parentesco-otros-pai"
                                                class="col-form-label font-weight-bold text-gray-800">Parentesco:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datosOtroFamiliar"
                                                    name="parentesco-otros-pai" id="parentesco-otros-pai" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="otrosBiografiaHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseOtrosBiografia"
                                        aria-expanded="true" aria-controls="collapseOtrosBiografia">
                                        Otros Datos Biográficos
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseOtrosBiografia" class="collapse" aria-labelledby="otrosBiografiaHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="antecedentesLaborales"
                                                class="col-form-label font-weight-bold text-gray-800">Antecedentes
                                                laborales:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1"
                                                    name="antecedentesLaborales" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="formacion"
                                                class="col-form-label font-weight-bold text-gray-800">Nivel de Formación
                                                y Estudios:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1" name="formacion"
                                                    rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="historiaVida"
                                                class="col-form-label font-weight-bold text-gray-800">Historia de
                                                vida:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1" name="historiaVida"
                                                    rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="otrosDatosBiografia"
                                                class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                            <div class="input-group">
                                                <textarea class="form-control anadir rounded-1"
                                                    name="otrosDatosBiografia" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="pills-social" role="tabpanel" aria-labelledby="social-tab">
                    <div class="accordion accordion-group areaSocial" id="areaSocialAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="situacionLegalHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseSituacionLegal"
                                        aria-expanded="true" aria-controls="collapseSituacionLegal">
                                        Situación Legal y de Desprotección
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseSituacionLegal" class="collapse" aria-labelledby="situacionLegalHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="Autodeterminacion"
                                                class="col-form-label font-weight-bold text-gray-800">Capacidad de
                                                Autodeterminación:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="Autodeterminacion">
                                                    <option value="">Elegir</option>
                                                    <option>Toma decisiones sobre las AVD</option>
                                                    <option>Necesita pequeñas ayudas en las AVD</option>
                                                    <option>Necesita que otros decidan por él/ella</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="FacultadesMentales"
                                                class="col-form-label font-weight-bold text-gray-800">En Pleno Uso de
                                                sus Facultades Mentales:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="FacultadesMentales">
                                                    <option value="">Elegir</option>
                                                    <option>Autónomo en la toma de decisiones</option>
                                                    <option>Sus familiares toman las decisiones por él/ella</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group ">
                                                <input type="text" name="otrasAutodeterminacion"
                                                    id="otrasAutodeterminacion"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Capacidad Autodeterminanción">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group ">
                                                <input type="text" name="otrasFacultadesMentales"
                                                    id="otrasFacultadesMentales"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Facultades Mentales">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="ultimasVoluntades"
                                                class="col-form-label font-weight-bold text-gray-800">Existencia de
                                                Documento de Últimas Voluntades:</label>
                                            <div class="input-group">
                                                <select class="form-control" name="ultimasVoluntades">
                                                    <option value="">Elegir</option>
                                                    <option>Si</option>
                                                    <option>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="situacionDesproteccion"
                                                class="col-form-label font-weight-bold text-gray-800">Situación de
                                                Desprotección:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="situacionDesproteccion"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="otrasSituacionLegal"
                                                class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="otrasSituacionLegal"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="habitosOcioHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseHabitosOcio" aria-expanded="true"
                                        aria-controls="collapseHabitosOcio">
                                        Hábitos de Ocio
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseHabitosOcio" class="collapse" aria-labelledby="habitosOcioHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="HabitosOcio"
                                                class="col-form-label font-weight-bold text-gray-800">Hábitos de
                                                Ocio:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="HabitosOcio">
                                                    <option value="">Elegir</option>
                                                    <option>Le gustan las actividades en grupo</option>
                                                    <option>No le gustan las actividades en grupo</option>
                                                    <option>Le gustan las actvidades individuales</option>
                                                    <option value="otras">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasHabitosOcio" id="otrasHabitosOcio"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otros Hábitos de Ocio">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="creenciasHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseCreencias" aria-expanded="true"
                                        aria-controls="collapseCreencias">
                                        Creencias y Valores
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseCreencias" class="collapse" aria-labelledby="creenciasHeader">
                                <div class="card-body">
                                    <div class="row  checkbox-row creenciasCheckbox">
                                        <div class="form-check">
                                            <div class=" col-12 form-check  mt-2">
                                                <input type="checkbox" class="form-check-input" id="creyente">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="creyente">Posee Creencias Religiosas</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 mt-2">
                                            <div class="input-group">
                                                <input type="text" name="poseeCreencias" id="poseeCreencias"
                                                    class="form-control d-none ocultable" placeholder="¿Cuáles?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  checkbox-row creenciasCheckbox">
                                        <div class="form-check">
                                            <div class=" col-12 form-check">
                                                <input type="checkbox" class="form-check-input" id="acudeServicios">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="acudeServicios">Acude a Servicios religiosos</label>
                                            </div>
                                            <div class="form-group col-12 mt-2 d-none ocultable"
                                                id="frecuenciaServicioSelect">
                                                <div class="input-group">
                                                    <label class="form-label mr-3" for="FrecuenciaServicio">Indique
                                                        frecuencia: </label>
                                                    <select class="form-control selectConOtras"
                                                        name="FrecuenciaServicio">
                                                        <option value="">Elegir Frecuencia</option>
                                                        <option>Diaria</option>
                                                        <option>Dominical</option>
                                                        <option>Esporádica</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="input-group">
                                                <input type="text" name="otrasFrecuenciaServicio"
                                                    id="otrasFrecuenciaServicio"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Frecuencia Asistenia Servicos Religiosos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  checkbox-row creenciasCheckbox">
                                        <div class="form-check">
                                            <div class=" col-12 form-check mt-1">
                                                <input type="checkbox" class="form-check-input" id="noCreyente">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="noCreyente">Sin Creencias específicas</label>
                                            </div>
                                            <div class=" col-12 form-check  mt-4">
                                                <input type="checkbox" class="form-check-input" id="otrasCreencias">
                                                <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                    for="otrasCreencias">Otras</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 mt-3">
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1 d-none ocultable inputOtras"
                                                    name="otrasAreaCreencias" id="otrasAreaCreencias" rows="3"
                                                    placeholder="Espeficique Otras Creencias"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="gestionesadministrativasHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseGestionesAdministrativas" aria-expanded="true"
                                        aria-controls="collapseGestionesAdministrativas">
                                        Gestiones Administrativas
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseGestionesAdministrativas" class="collapse"
                                aria-labelledby="gestionesadministrativasHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="gestionesAdministrativas"
                                                class="col-form-label font-weight-bold text-gray-800">Gestiones
                                                Administrativas:</label>
                                            <div class="input-group">
                                                <select class="form-control" name="gestionesAdministrativas">
                                                    <option value="">Elegir</option>
                                                    <option>Puede realizarlas de manera autónoma</option>
                                                    <option>Puede realizarlas con pequeñas ayudas</option>
                                                    <option>Puede realizarlas con acompañamiento</option>
                                                    <option>Necesita grandes ayudas para realizarlas</option>
                                                    <option>Necesita otras personas para realizarlas</option>
                                                    <option value="gestiones">Gestiones que no puede realizar sin ayuda
                                                        externa</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasGestionesAdministrativas"
                                                    id="otrasGestionesAdministrativas"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Ayuda Gestiones Administrativas">
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1 d-none ocultable inputOtras"
                                                    name="detalleGestiones" id="detalleGestiones" rows="2"
                                                    placeholder="Detalle las gestiones para las que necesita ayuda externa"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="interrelacionSocialHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseInterrelacionSocial" aria-expanded="true"
                                        aria-controls="collapseInterrelacionSocial">
                                        Interrelación Social y Familiar
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseInterrelacionSocial" class="collapse"
                                aria-labelledby="interrelacionSocialHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="ConvivenciaAnterior"
                                                class="col-form-label font-weight-bold text-gray-800">Convivencia
                                                anterior al ingreso:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="ConvivenciaAnterior">
                                                    <option value="">Elegir</option>
                                                    <option>Vivía con su pareja</option>
                                                    <option>Vivía con sus hijos/as</option>
                                                    <option>Vivía sola/o</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasConvivenciaAnterior"
                                                    id="otrasConvivenciaAnterior"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Convivencia Anterior al Ingreso">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <label for="causasIngreso"
                                                class="col-form-label font-weight-bold text-gray-800">Causas del
                                                ingreso:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="causasIngreso"
                                                    id="causasIngreso" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="RedSocial"
                                                class="col-form-label font-weight-bold text-gray-800">A nivel
                                                social:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="RedSocial">
                                                    <option value="">Elegir</option>
                                                    <option>Tiene una red social sólida y estable</option>
                                                    <option>No mantiene red social</option>
                                                    <option>Le cuesta mantener relaciones con otras personas</option>
                                                    <option>No se relaciona con nadie</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="redFamiliar"
                                                class="col-form-label font-weight-bold text-gray-800">A nivel
                                                familiar:</label>
                                            <div class="input-group">
                                                <select class="form-control" name="redFamiliar">
                                                    <option value="">Elegir</option>
                                                    <option>Hijos/as que viven cerca y le visitan con frecuencia
                                                    </option>
                                                    <option>Hijos/as que viven cerca pero no le visitan con frecuencia
                                                    </option>
                                                    <option>Hijos/as que viven lejos y le visitan a menudo</option>
                                                    <option>Hijos/as que viven lejos y no le visitan demasiado</option>
                                                    <option>Hijos/as que no le visitan</option>
                                                    <option value="familiares">Recibe visitas de otros familiares
                                                    </option>
                                                    <option>Familiares e hijos no visitan con frecuencia, pero hablan a
                                                        diario</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasRedSocial" id="otrasRedSocial"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Red social">
                                            </div>
                                        </div>

                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasRedFamiliar" id="otrasRedFamiliar"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Red familiar">
                                                <input type="text" name="familiaresRedFamiliar"
                                                    id="familiaresRedFamiliar"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique qué familiares lo visitan y con qué frecuencia">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="regimenSalidas"
                                                class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                Salidas:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="regimenSalidas"
                                                    id="regimenSalidas" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                            <label for="regimenVisitas"
                                                class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                Visitas:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="regimenVisitas"
                                                    id="regimenVisitas" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                            <label for="otrasIniciativa"
                                                class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="otrasIniciativa"
                                                    id="otrasIniciativa" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="participacionHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseParticipacion" aria-expanded="true"
                                        aria-controls="collapseParticipacion">
                                        Iniciativa y Participación
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseParticipacion" class="collapse" aria-labelledby="participacionHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="IniciativaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Iniciativa y
                                                Participación:</label>
                                            <div class="input-group">
                                                <select class="form-control selectConOtras" name="IniciativaSocial">
                                                    <option value="">Elegir</option>
                                                    <option>Participa en las actividades de forma libre y autónoma
                                                    </option>
                                                    <option>Participa en las actividades si se le plantean directamente
                                                    </option>
                                                    <option>Hay que insistir mucho para que participe en las actividades
                                                    </option>
                                                    <option>Acude a las actividades, pero no participa, solo observa la
                                                        actividad</option>
                                                    <option>No participa en ninguna actividad</option>
                                                    <option value="otras">Otras</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                            <div class="input-group">
                                                <input type="text" name="otrasIniciativaSocial"
                                                    id="otrasIniciativaSocial"
                                                    class="form-control d-none ocultable inputOtras"
                                                    placeholder="Especifique Otras Iniciativa Social">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow areaSocial">
                        <div class="card-header">
                            <div class="row">
                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="objetivosAreaSocial"
                                        class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded-1" name="objetivosAreaSocial"
                                            id="objetivosAreaSocial" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="accionesAreaSocial"
                                        class="col-form-label font-weight-bold text-gray-800">Acciones e
                                        Intervenciones:</label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded-1" name="accionesAreaSocial"
                                            id="accionesAreaSocial" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <label for="responsableAreaSocial"
                                        class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                    <div class="input-group">
                                        <textarea class="form-control rounded-1" name="responsableAreaSocial"
                                            id="responsableAreaSocial" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade mt-3" id="pills-sanitaria" role="tabpanel" aria-labelledby="sanitaria-tab">
                    <div class="accordion accordion-group areaSanitaria" id="areaSanitariaAccordion">
                        <div class="card shadow">
                            <div class="card-header" id="SituacionSanitariaHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseSituacionSanitaria"
                                        aria-expanded="true" aria-controls="collapseSituacionSanitaria">
                                        Situación Sanitaria
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseSituacionSanitaria" class="collapse"
                                aria-labelledby="SituacionSanitariaHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="diagnosticosPasados"
                                                class="col-form-label font-weight-bold text-gray-800">Diagnósticos
                                                Pasados:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="diagnosticosPasados"
                                                    id="diagnosticosPasados" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="diagnosticosPresentes"
                                                class="col-form-label font-weight-bold text-gray-800">Diagnósticos
                                                Presentes:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="diagnosticosPresentes"
                                                    id="diagnosticosPresentes" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="ingesosHospitalarios"
                                                class="col-form-label font-weight-bold text-gray-800">Ingresos
                                                Hospitalarios:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="ingesosHospitalarios"
                                                    id="ingesosHospitalarios" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <label for="intervencionesQuirurgicas"
                                                class="col-form-label font-weight-bold text-gray-800">Intervenciones
                                                Quirúrgicas:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1"
                                                    name="intervencionesQuirurgicas" id="intervencionesQuirurgicas"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="otrasSituacioSanitaria"
                                                class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="otrasSituacioSanitaria"
                                                    id="otrasSituacioSanitaria" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header" id="tratamientosHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold"
                                        title="pulsar para desplegar" type="button" data-toggle="collapse"
                                        data-target="#collapseTratamiento" aria-expanded="true"
                                        aria-controls="collapseTratamiento">
                                        Tratamientos
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseTratamiento" class="collapse" aria-labelledby="tratamientosHeader">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table id="tabla-tratamientos" class="table table-striped table-bordered "
                                                style="width:80%; margin-left:10% ">
                                                <thead>
                                                    <tr>
                                                        <th>Fecha</th>
                                                        <th>Tratamiento</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card shadow mt-4" style="width:80%; margin-left:10% ">
                                            <div class="card-body">
                                                <label for="datosTratamientos"
                                                    class="col-form-label font-weight-bold text-gray-800">Comentarios
                                                    sobre los Tratamientos:</label>
                                                <div class="summernote pai form-control" name="datosTratamientos"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="card shadow">
                            <div class="card-header" id="MedicacionActualHeader">
                                <h2 class="mb-0">
                                    <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                        data-toggle="collapse" data-target="#collapseMedicacionActual"
                                        aria-expanded="true" aria-controls="collapseMedicacionActual">
                                        Medicación actual
                                    </a>
                                </h2>
                            </div>

                            <div id="collapseMedicacionActual" class="collapse"
                                aria-labelledby="MedicacionActualHeader">
                                <div class="card-body container">
                                   <!-- aqui va la tabla #tablapai -->

                                    <div class="row mt-4">
                                        <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                            <button type="button" class="btn btn-primary" id="btn-new-medic-pai"
                                                style="cursor: pointer !important;">Añadir medicación</button>
                                        </div>
                                        <div class="row d-none col-12" id="tabla-medicacion-pai">
                                            <div class="table-responsive">
                                                <table id="tabla-medicacion-res-pai"
                                                    class="table table-striped table-bordered mt-4"
                                                    style="width:100%;">
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
                                        <div class="d-none row d-flex text-center col-12"
                                            id="div-btn-vaciar-medic-pai">
                                            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                                <button type="button" class="btn btn-danger d-none"
                                                    id="btn-empty-medic-pai"
                                                    style="cursor: pointer !important;">Vaciar medicación</button>
                                            </div>
                                        </div>
                                        <div class="row d-none col-12" id="form-medic-1-pai">

                                            <div class="mt-4 col-xl-3 col-lg-3 col-md-10 col-sm-10">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="medicacion-pai">
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
                                                <div class="input-group form-group" id="tipoMedicamento-pai"
                                                    style="display:none;">
                                                    <input type="text" name="nombreMedicamento" class="form-control"
                                                        id="nombreMedicamento-pai" placeholder="Nombre medicamen.">
                                                </div>
                                            </div>
                                            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2"
                                                id="listadoViaLabel-pai" style="padding-top: 5px; display: none;">
                                                <label class="font-weight-bold text-gray-800">Vía
                                                    administración:</label>
                                            </div>
                                            <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10"
                                                id="listadoViaSelect-pai" style="padding-top: 5px; display: none;">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select seleccionVia" id="seleccionVia-pai">
                                                        <option value="">Seleccione Vía</option>
                                                        <optgroup label="Oral">
                                                            <option value="jarabe">Jarabes</option>
                                                            <option value="comprimido">Comprimidos</option>
                                                            <option value="capsula">Capsulas</option>
                                                        </optgroup>
                                                        <option value="instravenoso">Intravenosos o intramusculares
                                                        </option>
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
                                            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2" style="padding-top: 5px;">
                                                <select class="custom-select" name="listadoUnidades"
                                                    id="listadoUnidades-pai" style="display: none;">
                                                    <option value="">Seleccione ud. de medida</option>
                                                    <option value="unidades">Unidades</option>
                                                    <option value="ml">Mililitros</option>
                                                    <option value="sn">Si/No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row d-none" id="form-medic-2-pai">
                                            <div class="mt-4 col-xl-2 col-lg-2 col-md-2 col-sm-2"
                                                id="posologiaLabel-pai" style="padding-top: 5px;display: none;">
                                                <label class="font-weight-bold text-gray-800" for="">Posología:</label>
                                            </div>
                                            <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10"
                                                id="listaDesayuno-pai" style="display: none;">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="desayuno-pai">
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
                                            <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaComida-pai"
                                                style="display: none;">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="comida-pai">
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
                                            <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10"
                                                id="listaMerienda-pai" style="display: none;">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="merienda-pai">
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
                                            <div class="mt-4 col-xl-2 col-lg-3 col-md-10 col-sm-10" id="listaCena-pai"
                                                style="display: none;">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="cena-pai">
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
                                            <div
                                                class="flex-row-reverse d-flex align-items-right justify-content-right text-center">
                                                <div class="mt-4 col-6">
                                                    <button type="button" class="btn btn-success" id="btn-add-medic-pai"
                                                        style="cursor: pointer !important;">Añadir medicación</button>
                                                </div>
                                                <div class="mt-4 col-6">
                                                    <button type="button" class="btn btn-secondary"
                                                        id="btn-cancel-medic-pai"
                                                        style="cursor: pointer !important;">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                                                            <!-- aqui final tabla -->
                            <div class="card shadow">
                                <div class="card-header" id="pielHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapsePiel" aria-expanded="true"
                                            aria-controls="collapsePiel">
                                            Estado de la Piel -UPP
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapsePiel" class="collapse" aria-labelledby="pielHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="estadoPiel"
                                                    class="col-form-label font-weight-bold text-gray-800">Estado de la
                                                    piel-Integridad:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="estadoPiel"
                                                        id="estadoPiel" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="estadoPielUnas"
                                                    class="col-form-label font-weight-bold text-gray-800">Estado piel y
                                                    uñas:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="estadoPielUnas"
                                                        id="estadoPielUnas" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  checkbox-row areaSanitariaCheckbox mb-3">
                                            <div class="form-check col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ulcerasPiel">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="ulcerasPiel">Úlceras vasculares y/o UPP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ml-5 d-none ocultable" id="camposUlcera">
                                            <div class="form-group col-2">
                                                <label for="gradoUlceraVascular"
                                                    class="col-form-label font-weight-bold text-gray-800">Grado:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="gradoUlceraVascular"
                                                        id="gradoUlceraVascular" rows="1"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group col-5">
                                                <label for="tratamientosUlceraVascular"
                                                    class="col-form-label font-weight-bold text-gray-800">Tratamientos:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="tratamientosUlceraVascular"
                                                        id="tratamientosUlceraVascular" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-5">
                                                <label for="otrosDatosUlceraVascular"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros
                                                    Datos:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrosDatosUlceraVascular" id="otrosDatosUlceraVascular"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="otrosProblemasCutaneos"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros
                                                    problemas
                                                    cutáneos:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrosProblemasCutaneos" id="otrosProblemasCutaneos"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="otrosPiel"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="otrosPiel"
                                                        id="otrosPiel" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="nutricionHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseNutricion" aria-expanded="true"
                                            aria-controls="collapseNutricion">
                                            Estado Nutricional/Hidratación
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseNutricion" class="collapse" aria-labelledby="nutricionHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="estadoBoca"
                                                    class="col-form-label font-weight-bold text-gray-800">Estado de la
                                                    boca:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="estadoBoca"
                                                        id="estadoBoca" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="altracionesIngesta"
                                                    class="col-form-label font-weight-bold text-gray-800">Alteraciones
                                                    en la
                                                    ingesta:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="altracionesIngesta"
                                                        id="altracionesIngesta" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row mt-3 areaSanitariaCheckbox">
                                            <label class="col-12 font-weight-bold text-gray-800">Modificaciones en el
                                                peso:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="desnutricion">
                                                    <label class="form-check-label ml-2"
                                                        for="desnutricion">Desnutricion</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="obesidad">
                                                    <label class="form-check-label ml-2" for="obesidad">Obesidad</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="trastornoAlimenticio">
                                                    <label class="form-check-label ml-2"
                                                        for="trastornoAlimenticio">Trastornos alimenticios</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrasModifPeso">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasModifPeso">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 mt-3">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasModifPesoTexto"
                                                        id="otrasModifPesoTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otras Modificaciones Peso">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row areaSanitariaCheckbox mt-4">
                                            <label class="col-12 font-weight-bold text-gray-800">Método de Nutrición e
                                                Hidratación:</label>
                                            <div class="form-check col-xl-4 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="parental">
                                                    <label class="form-check-label ml-2" for="parental">Parental</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="sonda">
                                                    <label class="form-check-label ml-2" for="sonda">Sonda</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="jeringa">
                                                    <label class="form-check-label ml-2" for="jeringa">Jeringa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="Suplemento">
                                                    <label class="form-check-label ml-2" for="Suplemento">Suplemento
                                                        dietético entre comidas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="utensiliosEspeciales">
                                                    <label class="form-check-label ml-2"
                                                        for="utensiliosEspeciales">Utensilios especiales</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosMetodosNutricion">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosMetodosNutricion">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="utensiliosEspecialesTexto"
                                                        id="utensiliosEspecialesTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Utensilios Especiales">
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosMetodosTexto" id="otrosMetodosTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Método Nutrición e Hidratación">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row areaSanitariaCheckbox mt-3">
                                            <label
                                                class="col-12 font-weight-bold text-gray-800">Intolerancia/Alergias:</label>
                                            <div class="form-check col-xl-4 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="gluten">
                                                    <label class="form-check-label ml-2" for="gluten">Gluten</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="lactosa">
                                                    <label class="form-check-label ml-2" for="lactosa">Lactosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="fructosa">
                                                    <label class="form-check-label ml-2" for="fructosa">Fructosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="sacarosa">
                                                    <label class="form-check-label ml-2" for="sacarosa">Sacarosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrasAlergias">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasAlergias">Otras</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasAlergiasTexto" id="otrasAlergiasTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otras Alergias">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="dieta"
                                                    class="col-form-label font-weight-bold text-gray-800">Dieta:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="dieta" id="dieta"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="balanceHidrico"
                                                    class="col-form-label font-weight-bold text-gray-800">Balance
                                                    Hídrico:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="balanceHidrico"
                                                        id="balanceHidrico" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosNutricion"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="otrosNutricion"
                                                        id="otrosNutricion" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="patronEliminacionHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapsepatronEliminacion" aria-expanded="true"
                                            aria-controls="collapsepatronEliminacion">
                                            Patrón de Eliminación
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapsepatronEliminacion" class="collapse"
                                    aria-labelledby="patronEliminacionHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaSanitariaCheckbox mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800">Incontinencia:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="fecal">
                                                    <label class="form-check-label ml-2" for="fecal">Fecal</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="urinaria">
                                                    <label class="form-check-label ml-2" for="urinaria">Urinaria</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row areaSanitariaCheckbox mt-4">
                                            <label class="col-12 font-weight-bold text-gray-800">Ritmo
                                                intestinal:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ritmoRegular">
                                                    <label class="form-check-label ml-2"
                                                        for="ritmoRegular">Regular</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="estrenimiento">
                                                    <label class="form-check-label ml-2"
                                                        for="estrenimiento">Estreñimiento</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="diarrea">
                                                    <label class="form-check-label ml-2" for="diarrea">Diarrea</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosRitmoIntestinal">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosRitmoIntestinal">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 ">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosRitmoIntestinalTexto"
                                                        id="otrosRitmoIntestinalTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otro Ritmo Intestinal">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row areaSanitariaCheckbox mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800">Dispositivos:</label>
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="sonda">
                                                    <label class="form-check-label ml-2" for="sonda">Sonda</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="absorbentes">
                                                    <label class="form-check-label ml-2"
                                                        for="absorbentes">Absorbentes</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ostomia">
                                                    <label class="form-check-label ml-2" for="ostomia">Ostomía</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosDispositivos">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosDispositivos">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosDispositivosTexto"
                                                        id="otrosDispositivosTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otros Dispositivos">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosPatroneliminacion"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrosPatronEliminacion" id="otrosPatronEliminacion"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="movilidadHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseMovilidad" aria-expanded="true"
                                            aria-controls="collapseMovilidad">
                                            Movilidad - Deambulación
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseMovilidad" class="collapse" aria-labelledby="movilidadHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="nivelAutonomía"
                                                    class="col-form-label font-weight-bold text-gray-800">Nivel de
                                                    Autonomía:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="nivelAutonomía"
                                                        id="nivelAutonomía" rows="2"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="marchaMovivilidad"
                                                    class="col-form-label font-weight-bold text-gray-800">Marcha:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="marchaMovivilidad"
                                                        id="marchaMovivilidad" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  checkbox-row areaSanitariaCheckbox mb-3">
                                            <div class="form-check col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ayudasTécnicas">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="ayudasTécnicas">Requiere ayudas técnicas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row checkbox-row ml-5 areaSanitariaCheckbox d-none ocultable"
                                            id="camposAyudasTecnicas">
                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="baston">
                                                    <label class="form-check-label ml-2" for="baston">Bastón</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="andador">
                                                    <label class="form-check-label ml-2" for="andador">Andador</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="muleta">
                                                    <label class="form-check-label ml-2" for="muleta">Muleta</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="sillaRuedas">
                                                    <label class="form-check-label ml-2" for="sillaRuedas">Silla de
                                                        ruedas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrasAyudasTecnicas">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasAyudasTecnicas">Otras</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasAyudasTecnicasTexto"
                                                        id="otrasAyudasTecnicasTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otras Ayudas Técnicas">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row  checkbox-row areaSanitariaCheckbox mb-3">
                                            <div class="form-check col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="encamamiento">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="encamamiento">Requiere encamamiento</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row checkbox-row ml-5 areaSanitariaCheckbox d-none ocultable"
                                            id="camposEncamamiento">
                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="temporal">
                                                    <label class="form-check-label ml-2" for="temporal">Temporal</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="permanente">
                                                    <label class="form-check-label ml-2"
                                                        for="permanente">Permanente</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrasEncamamento">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasEncamamento">Posibilidad
                                                        de movilidad</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasEncamamentoTexto"
                                                        id="otrasEncamamentoTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Posibilidad de Movilidad">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row  checkbox-row areaSanitariaCheckbox mb-3">
                                            <div class="form-check col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="metodosTransferencia">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="metodosTransferencia">Métodos de Transferencia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row checkbox-row ml-5 areaSanitariaCheckbox d-none ocultable"
                                            id="camposMetodosTranferencia">
                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 ">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="metodosMecanicosTranferencia">
                                                    <label class="form-check-label ml-2"
                                                        for="metodosMecanicosTranferencia">Mecánicos</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="metodosManualesTranferencia">
                                                    <label class="form-check-label ml-2"
                                                        for="metodosManualesTranferencia">Manuales</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="metodosMecanicosTranferenciaTexto"
                                                        id="metodosMecanicosTranferenciaTexto"
                                                        class="form-control form-control-sm  d-none ocultable inputOtras"
                                                        placeholder="Especifique Métodos Mecánicos de Transferencia">
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="metodosManualesTranferenciaTexto"
                                                        id="metodosManualesTranferenciaTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Métodos Manuales de Transferencia">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosMovilidad"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="otrosMovilidad"
                                                        id="otrosMovilidad" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="suenoHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseSueno" aria-expanded="true"
                                            aria-controls="collapseSueno">
                                            Sueño - Agitación
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseSueno" class="collapse" aria-labelledby="suenoHeader">
                                    <div class="card-body">
                                        <div class="summernote pai form-control" name="datosSueno"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="dolorHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseDolor" aria-expanded="true"
                                            aria-controls="collapseDolor">
                                            Dolor
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseDolor" class="collapse" aria-labelledby="dolorHeader">
                                    <div class="card-body">
                                        <div class="row  checkbox-row dolorCheckbox mb-3">
                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="Cabeza">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="Cabeza">Cabeza</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaCabeza" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadCabeza" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaCabeza"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor cabeza">
                                                        <input type="text" name="otrasIntensidadCabeza"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor cabeza">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="Cuello">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="Cuello">Cuello</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaCuello" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadCuello" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaCuello"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor cuello">
                                                        <input type="text" name="otrasIntensidadCuello"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor cuello">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="Espalda">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="Espalda">Espalda</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaEspalda" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadEspalda" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaEspalda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor espalda">
                                                        <input type="text" name="otrasIntensidadEspalda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor espalda">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="BrazoDerecho">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="BrazoDerecho">Brazo derecho</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaBrazoDerecho" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadBrazoDerecho" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaBrazoDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor brazo derecho">
                                                        <input type="text" name="otrasIntensidadBrazoDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor brazo derecho">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="BrazoIzquierdo">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="BrazoIzquierdo">Brazo izquierdo</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaBrazoIzquierdo" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadBrazoIzquierdo" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaBrazoIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor brazo izquierdo">
                                                        <input type="text" name="otrasIntensidadBrazoIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor brazo izquierdo">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PiernaDerecha">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PiernaDerecha">Pierna derecha</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPiernaDerecha" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPiernaDerecha" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPiernaDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pierna derecha">
                                                        <input type="text" name="otrasIntensidadPiernaDerecha"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pierna derecha">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PiernaIzquierda">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PiernaIzquierda">Pierna izquierda</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPiernaIzquierda" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPiernaIzquierda" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPiernaIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pierna izquierda">
                                                        <input type="text" name="otrasIntensidadPiernaIzquierda"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pierna izquierda">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PieDerecho">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PieDerecho">Pie Derecho</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPieDerecho" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPieDerecho" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPieDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pie derecho">
                                                        <input type="text" name="otrasIntensidadPieDerecho"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pie derecho">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="PieIzquierdo">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="PieIzquierdo">Pie izquierdo</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaPieIzquierdo" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadPieIzquierdo" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaPieIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor pie izquierdo">
                                                        <input type="text" name="otrasIntensidadPieIzquierdo"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor pie izquierdo">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline col-12">
                                                <div class="col-xl-2 col-lg-3  col-md-3 col-sm-3">
                                                    <input type="checkbox" class="form-check-input checkboxDolor"
                                                        id="OtrasLocalizacionDolor">
                                                    <label class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                        for="OtrasLocalizacionDolor">Otros</label>
                                                </div>
                                                <div class="col-xl-10 col-lg-9  col-md-9 col-sm-9 mt-1">
                                                    <div class="input-group form-group">
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="FrecuenciaOtrasLocalizacionDolor" disabled>
                                                            <option value="">Indicar frecuencia</option>
                                                            <option value="puntual">Puntual</option>
                                                            <option value="continua">Continua</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <select
                                                            class="col-xl-3 col-lg-3  col-md-12 col-sm-12 form-control mr-1 dolor selectConOtras"
                                                            name="IntensidadOtrasLocalizacionDolor" disabled>
                                                            <option value="">Indicar intensidad</option>
                                                            <option value="baja">Baja</option>
                                                            <option value="media">Media</option>
                                                            <option value="alta">Alta</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                        <input type="text" name="otrasFrecuenciaOtrasLocalizacionDolor"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique frecuencia dolor Otros">
                                                        <input type="text" name="otrasIntensidadOtrasLocalizacionDolor"
                                                            class="form-control dolor d-none ocultable inputOtras"
                                                            placeholder="Indique intensidad dolor Otros">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrosDolor"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1 dolor" id="otrosDolor"
                                                        name="otrosDolor" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="AlteracionConductaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseAlteracionConducta" aria-expanded="true"
                                            aria-controls="collapseAlteracionConducta">
                                            Alteraciones Conducta
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseAlteracionConducta" class="collapse"
                                    aria-labelledby="AlteracionConductaHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaSanitariaCheckbox mt-3">
                                            <label class="col-12 font-weight-bold text-gray-800">Memoria:</label>
                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="olvidosEsporadicos">
                                                    <label class="form-check-label ml-2"
                                                        for="olvidosEsporadicos">Olvidos
                                                        esporádicos en ADV</label>
                                                </div>
                                                <input type="text" name="comentarioOlvidosEsporadicos"
                                                    id="comentarioOlvidosEsporadicos"
                                                    class="form-control form-control-sm mt-3 d-none ocultable inputOtras"
                                                    placeholder="Especifique Olvidos esporádicos en ADV">
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="olvidosFrecuentes">
                                                    <label class="form-check-label ml-2" for="olvidosFrecuentes">Olvidos
                                                        Frecuentes en ADV</label>
                                                </div>
                                                <input type="text" name="comentarioOlvidosFrecuentes"
                                                    id="comentarioOlvidosFrecuentes"
                                                    class="form-control form-control-sm mt-3 d-none ocultable inputOtras"
                                                    placeholder="Especifique Olvidos Frecuentes en AD">
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="deterioroMemoria">
                                                    <label class="form-check-label ml-2"
                                                        for="deterioroMemoria">Manifiesta
                                                        deterioro de la memoria</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="dificultadReconocimiento">
                                                    <label class="form-check-label ml-2"
                                                        for="dificultadReconocimiento">Dificultades en el reconocimiento
                                                        de
                                                        familiares y amigos</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="otrasMemoria">
                                                    <label class="form-check-label ml-2"
                                                        for="otrasMemoria">Otras</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 mt-3 ">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrasMemoriaTexto" id="otrasMemoriaTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otras Memoria">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="tomaDecisiones"
                                                    class="col-form-label font-weight-bold text-gray-800">Capacidad de
                                                    toma
                                                    de decisiones:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="tomaDecisiones"
                                                        id="tomaDecisiones" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="otrasAlteracionConducta"
                                                    class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrasAlteracionConducta" id="otrasAlteracionConducta"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="resticcionesHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseRestricciones" aria-expanded="true"
                                            aria-controls="collapseRestricciones">
                                            Seguridad - Restricciones
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseRestricciones" class="collapse" aria-labelledby="resticcionesHeader">
                                    <div class="card-body">
                                        <div class="summernote pai form-control" name="datosSeguridad"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="marchaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseMarcha" aria-expanded="true"
                                            aria-controls="collapseMarcha">
                                            Marcha - Equilibrio
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseMarcha" class="collapse" aria-labelledby="marchaHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="MarchaEquilibrio"
                                                    class="col-form-label font-weight-bold text-gray-800">Marcha:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="MarchaEquilibrio">
                                                        <option value="">Elegir</option>
                                                        <option>Estable</option>
                                                        <option>Inestable</option>
                                                        <option value="otras">Otros</option>
                                                    </select>
                                                </div>
                                                <input type="text" name="otrasMarchaEquilibrio"
                                                    id="otrasMarchaEquilibrio"
                                                    class="form-control form-control-sm mt-2 d-none ocultable inputOtras"
                                                    placeholder="Especifique Otros Marcha">
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="equilibrio"
                                                    class="col-form-label font-weight-bold text-gray-800">Equilibrio:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="equilibrio"
                                                        id="equilibrio" rows="2"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="tonoMuscular"
                                                    class="col-form-label font-weight-bold text-gray-800">Tono
                                                    muscular:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="tonoMuscular"
                                                        id="tonoMuscular" rows="2"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                <label for="fuerza"
                                                    class="col-form-label font-weight-bold text-gray-800">Fuerza:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" name="fuerza" id="fuerza"
                                                        rows="2"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-12 col-lg-12  col-md-12 col-sm-12">
                                                <label for="otrasMarchaEquilibrioGeneral font-weight-bold text-gray-800"
                                                    class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        name="otrasMarchaEquilibrioGeneral"
                                                        id="otrasMarchaEquilibrioGeneral" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="limitacionMovilidadHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseLimitacionMovilidad" aria-expanded="true"
                                            aria-controls="collapseLimitacionMovilidad">
                                            Limitación Movilidad
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseLimitacionMovilidad" class="collapse"
                                    aria-labelledby="limitacionMovilidadHeader">
                                    <div class="card-body">
                                        <div class="summernote pai form-control" name="datosLimitacionMovilidad"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="potencialRecuperacionHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapsePotencialRecuperacion" aria-expanded="true"
                                            aria-controls="collapsePotencialRecuperacion">
                                            Potencial de Recuperación
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapsePotencialRecuperacion" class="collapse"
                                    aria-labelledby="potencialRecuperacionHeader">
                                    <div class="card-body">
                                        <div class="summernote pai form-control" name="datosPotencialRecuperacion">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="card shadow areaSanitaria">
                            <div class="card-header">
                                <div class="row">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaSanitaria"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaSanitaria"
                                                name="objetivosAreaSanitaria" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaSanitaria"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaSanitaria"
                                                name="accionesAreaSanitaria" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="responsableAreaSanitaria"
                                            class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaSanitaria"
                                                name="responsableAreaSanitaria" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade mt-3" id="pills-psicologica" role="tabpanel"
                        aria-labelledby="psicologica-tab">
                        <div class="accordion accordion-group areaPsicologica" id="areaPsicologicaAccordion">
                            <div class="card shadow">
                                <div class="card-header" id="valoracionCognitivaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseValoracionCognitiva"
                                            aria-expanded="true" aria-controls="collapseValoracionCognitiva">
                                            Valoración Cognitiva
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseValoracionCognitiva" class="collapse"
                                    aria-labelledby="valoracionCognitivaHeader">
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="col-12 font-weight-bold text-gray-800">Orientación:</label>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <label for="orientacionTemporal"
                                                    class="col-form-label">Temporal:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" id="orientacionTemporal"
                                                        name="orientacionTemporal" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <label for="orientacionEspacial"
                                                    class="col-form-label">Espacial:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" id="orientacionEspacial"
                                                        name="orientacionEspacial" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <label for="orientacionPersonal"
                                                    class="col-form-label">Personal:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" id="orientacionPersonal"
                                                        name="orientacionPersonal" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="estadoMemoria"
                                                    class="col-form-label font-weight-bold text-gray-800">Memoria:</label>
                                                <div class="input-group">
                                                    <select class="form-control selectConOtras" name="EstadoMemoria">
                                                        <option value="">Elegir</option>
                                                        <option>Bien conservada</option>
                                                        <option>Pequeñas dificultades para recordar aspectos recientes
                                                        </option>
                                                        <option>Dificultades frecuentes para recordar aspectos recientes
                                                        </option>
                                                        <option>Grandes pérdidas de memoria</option>
                                                        <option value="otras">Otras</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div
                                                class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end ">
                                                <div class="input-group ">
                                                    <input type="text" name="otrasEstadoMemoria"
                                                        class="form-control d-none ocultable inputOtras"
                                                        id="otrasEstadoMemoria"
                                                        placeholder="Especifique Otras Estado Memoria">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="tomaDecisiones"
                                                    class="col-form-label font-weight-bold text-gray-800">Capacidad de
                                                    tomar
                                                    decisiones:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" id="tomaDecisiones"
                                                        name="tomaDecisiones" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                <label for="deterioroCognitivo"
                                                    class="col-form-label font-weight-bold text-gray-800">Valoración y
                                                    graduación de deterioro cognitivo:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1" id="deterioroCognitivo"
                                                        name="deterioroCognitivo" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <label for="otrosValoracionCognitiva"
                                                    class="col-form-label font-weight-bold text-gray-800">Otros:</label>
                                                <div class="input-group">
                                                    <textarea class="form-control rounded-1"
                                                        id="otrosValoracionCogonitiva" name="otrosValoracionCognitiva"
                                                        rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="valoracionAfectivaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseValoracionAfectiva" aria-expanded="true"
                                            aria-controls="collapseValoracionAfectiva">
                                            Valoración Afectiva y Emocional
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseValoracionAfectiva" class="collapse"
                                    aria-labelledby="valoracionAfectivaHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-3">
                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="afliccion">
                                                    <label class="form-check-label ml-2" for="afliccion">Mantiene
                                                        expresiones de aflicción</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="dificultadesSueno">
                                                    <label class="form-check-label ml-2"
                                                        for="dificultadesSueno">Dificultades con los ciclos de
                                                        sueño</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="tristeza">
                                                    <label class="form-check-label ml-2" for="tristeza">Apariencia de
                                                        tristeza o apatía</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ansiedad">
                                                    <label class="form-check-label ml-2" for="ansiedad">Apariencia
                                                        ansiosa</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="perdidaInteres">
                                                    <label class="form-check-label ml-2" for="perdidaInteres">Pérdida de
                                                        interés por las cosas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="apetito">
                                                    <label class="form-check-label ml-2" for="apetito">Trastorno del
                                                        apetito</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="CambiosAnimo">
                                                    <label class="form-check-label ml-2" for="CambiosAnimo">Cambios en
                                                        el
                                                        estado anímico y labilidad emocional</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="ideaMuerte">
                                                    <label class="form-check-label ml-2" for="ideaMuerte">Ideación de
                                                        muerte/ideación o tentativas autolíticas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="quejasSomaticas">
                                                    <label class="form-check-label ml-2" for="quejasSomaticas">Quejas
                                                        somáticas</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosValoracionAfectiva">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosValoracionAfectiva">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 mt-3">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosValoracionAfectivaTexto"
                                                        id="otrosValoracionAfectivaTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otros Valoración Afectiva y Emocional">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow">
                                <div class="card-header" id="trastornosConductaHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold"
                                            title="pulsar para desplegar" type="button" data-toggle="collapse"
                                            data-target="#collapseTrastornosConducta" aria-expanded="true"
                                            aria-controls="collapseTrastornosConducta">
                                            Trastornos de Conducta
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseTrastornosConducta" class="collapse"
                                    aria-labelledby="trastornosConductaHeader">
                                    <div class="card-body">
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-2">
                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="demenciaFamiliar">
                                                    <label class="form-check-label ml-2" for="demenciaFamiliar">Historia
                                                        familiar de demencia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-1">
                                            <div class="form-check col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="antecedentesPsiquiatricos">
                                                    <label class="form-check-label ml-2"
                                                        for="antecedentesPsiquiatricos">Antecedentes
                                                        psiquiátricos</label>
                                                    <div class="form-group col-11 d-none ocultable "
                                                        id="antecedentesPsiquiatricosArea">
                                                        <label for="antecedentesPsiquiatricosTexto"
                                                            class="col-form-label">Indique antecedentes:</label>
                                                        <div class="input-group">
                                                            <textarea class="form-control rounded-1"
                                                                id="antecedentesPsiquiatricosTexto"
                                                                name="antecedentesPsiquiatricosTexto"
                                                                rows="5"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row checkbox-row areaPsicologicaCheckbox mt-1">
                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="deambulacion">
                                                    <label class="form-check-label ml-2" for="deambulacion">Deambulación
                                                        -
                                                        vagabundeo</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="lenguajeOfensivo">
                                                    <label class="form-check-label ml-2" for="lenguajeOfensivo">Lenguaje
                                                        ofensivo</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="agresividadFisica">
                                                    <label class="form-check-label ml-2"
                                                        for="agresividadFisica">Agresividad
                                                        física</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="rechazoCuidados">
                                                    <label class="form-check-label ml-2" for="rechazoCuidados">Rechazo a
                                                        los
                                                        cuidados</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="delirios">
                                                    <label class="form-check-label ml-2" for="delirios">Delirios</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="agitacionPsicomotriz">
                                                    <label class="form-check-label ml-2"
                                                        for="agitacionPsicomotriz">Agitación psicomotriz</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input" id="alucinaciones">
                                                    <label class="form-check-label ml-2"
                                                        for="alucinaciones">Alucinaciones</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="comportamientoInadecuado">
                                                    <label class="form-check-label ml-2"
                                                        for="comportamientoInadecuado">Comportamiento social
                                                        inadecuado</label>
                                                </div>
                                            </div>

                                            <div class="form-check col-xl-4 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <div class=" form-check  mt-2">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="otrosTrastornoConducta">
                                                    <label class="form-check-label ml-2"
                                                        for="otrosTrastornoConducta">Otros</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group form-group">
                                                    <input type="text" name="comportamientoInadecuadoTexto"
                                                        id="comportamientoInadecuadoTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Comportamiento Social">
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 ">
                                                <div class="input-group form-group">
                                                    <input type="text" name="otrosTrastornoConductaTexto"
                                                        id="otrosTrastornoConductaTexto"
                                                        class="form-control form-control-sm d-none ocultable inputOtras"
                                                        placeholder="Especifique Otros Trastornos Conducta">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row areaPsicologica">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaSocial"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaPsicologica"
                                                name="objetivosAreaPsicologica" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaSocial"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaPsicologica"
                                                name="accionesAreaPsicologica" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="responsableAreaSocial"
                                            class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaPsicologica"
                                                name="responsableAreaPsicologica" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade mt-3" id="pills-funcional" role="tabpanel"
                        aria-labelledby="funcional-tab">
                        <div class="card shadow">
                            <div class="card-header text-center text-primary font-weight-bold">
                                <p class="mb-0">Área Funcional (Terapia Ocupacional)</p>
                            </div>

                            <div class="card-body">
                                <div class="row  areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Ducha"
                                            class="col-form-label font-weight-bold text-gray-800">Ducha:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Ducha">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasDucha"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda ducha">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Aseo"
                                            class="col-form-label font-weight-bold text-gray-800">Aseo:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Aseo">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAseo"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Aseo">
                                    </div>
                                </div>

                                <div class="row areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Vestido"
                                            class="col-form-label font-weight-bold text-gray-800">Vestido:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Vestido">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasVestido"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Vestido">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="UsoRetrete"
                                            class="col-form-label font-weight-bold text-gray-800">Uso
                                            del retrete:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="UsoRetrete">
                                                <option value="">Elegir</option>
                                                <option>Ayuda Ligeramente</option>
                                                <option>Proporciona bastante ayuda</option>
                                                <option>No puede ayudar</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasUsoRetrete"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Uso Retrete">
                                    </div>
                                </div>

                                <div class="row checkbox-row mt-3 areaFuncional areaFuncionalCheckbox">
                                    <label class="col-12 font-weight-bold text-gray-800">Deambulación:</label>
                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="rehabilitacion">
                                            <label class="form-check-label ml-2" for="rehabilitacion">Recibe
                                                rehabilitación</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="ayudaDesplazamiento">
                                            <label class="form-check-label ml-2" for="ayudaDesplazamiento">Precisa ayuda
                                                para desplazarse</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="ayudaTecnicas">
                                            <label class="form-check-label ml-2" for="ayudaTecnicas">Necesita ayuda para
                                                utilizar las ayudas técnicas</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-3">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="otrasDeambulacion">
                                            <label class="form-check-label ml-2" for="otrasDeambulacion">Otras</label>
                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                        <div class="input-group form-group">
                                            <input type="text" name="otrasDeambulacionTexto" id="otrasDeambulacionTexto"
                                                class="form-control form-control-sm d-none ocultable inputOtras"
                                                placeholder="Especifique Otras Deambulación">
                                        </div>
                                    </div>
                                </div>

                                <div class="row areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Transferencias"
                                            class="col-form-label font-weight-bold text-gray-800">Transferencias:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Transferencias">
                                                <option value="">Elegir</option>
                                                <option>Ayuda en las transferencias</option>
                                                <option>No puede ayudar en las transferencias</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasTransferencias"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda en las Transferencias">
                                    </div>

                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="Alimentacion"
                                            class="col-form-label font-weight-bold text-gray-800">Alimentación:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Alimentacion">
                                                <option value="">Elegir</option>
                                                <option>Come solo/a</option>
                                                <option>Come con poca ayuda</option>
                                                <option>Come con mucha ayuda</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAlimentacion"
                                            class="form-control mt-2 d-none ocultable inputOtras"
                                            placeholder="Especifique Otras Ayuda Alimentación">
                                    </div>
                                </div>

                                <div class="row col-12 mt-4 areaFuncional">
                                    <label class="col-form-label font-weight-bold text-gray-800">Actividades
                                        Instrumentales:</label>
                                </div>
                                <div class="row col-12 areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                        <label for="usoTelefono" class="col-form-label">Uso del Teléfono:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="usoTelefono" name="usoTelefono"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                        <label for="manejoDinero" class="col-form-label">Manejo de su dinero:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="manejoDinero"
                                                name="manejoDinero" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row col-12 areaFuncional">
                                    <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                        <label for="otrasActividadesInstrumental" class="col-form-label">Otras:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="otrasActividadesInstrumental"
                                                name="otrasActividadesInstrumental" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row areaFuncional">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaFuncional"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaFuncional"
                                                name="objetivosAreaFuncional" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaFuncional"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaFuncional"
                                                name="accionesAreaFuncional" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12 font-weight-bold text-gray-800">
                                        <label for="responsableAreaFuncional"
                                            class="col-form-label">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaFuncional"
                                                name="responsableAreaFuncional" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade mt-3" id="pills-sociocultural" role="tabpanel"
                        aria-labelledby="sociocultural-tab">
                        <div class="card shadow">
                            <div class="card-header text-center text-primary font-weight-bold">
                                <p class="mb-0">Área Animación Sociocultural</p>
                            </div>

                            <div class="card-body">
                                <div class="row areaAnimacion">
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 col-sm-12">
                                        <label for="Aficiones"
                                            class="col-form-label font-weight-bold text-gray-800">Aficiones e
                                            Intereses:</label>
                                        <div class="input-group">
                                            <select class="form-control selectConOtras" name="Aficiones">
                                                <option value="">Elegir</option>
                                                <option>Manifiesta intereses y aficiones variados</option>
                                                <option>Manifiesta algunos intereses y aficiones</option>
                                                <option>No manifiesta interses ni aficiones</option>
                                                <option value="otras">Otras</option>
                                            </select>
                                        </div>
                                        <input type="text" name="otrasAficiones"
                                            class="form-control d-none ocultable inputOtras"
                                            placeholder="Especifique Aficiones">
                                    </div>
                                </div>

                                <div class="row checkbox-row mt-3 areaAnimacion">
                                    <label class="col-12 font-weight-bold text-gray-800">Ocupación del tiempo
                                        libre:</label>
                                    <div class="form-check col-xl-4 col-lg-3 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="actividadesManuales">
                                            <label class="form-check-label ml-2" for="actividadesManuales">Realiza
                                                actividades manuales (tejer,coser, manualidades...)</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="juegosMesa">
                                            <label class="form-check-label ml-2" for="juegosMesa">Juega a las cartas y a
                                                otros juegos de mesa</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="leer">
                                            <label class="form-check-label ml-2" for="leer">Le gusta leer</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="tv">
                                            <label class="form-check-label ml-2" for="tv">Le gusta ver la TV</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-3">
                                        <div class=" form-check  mt-2 areaAnimacionCheckbox">
                                            <input type="checkbox" class="form-check-input" id="otrasTiempoLibre">
                                            <label class="form-check-label ml-2" for="otrasTiempoLibre">Otras</label>
                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                        <div class="input-group form-group">
                                            <input type="text" name="otrasTiempoLibreTexto" id="otrasTiempoLibreTexto"
                                                class="form-control form-control-sm d-none ocultable inputOtras"
                                                placeholder="Especifique Otras Ocupación Tiempo Libre">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 areaAnimacion">
                                    <label class="col-12 mb-2 font-weight-bold text-gray-800">Participación en
                                        actividades:</label>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="relacionarseRange">Capacidad para relacionarse con otros</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range" name="relacionarseRange"
                                                id="relacionarseRange">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="actividadesRange">Iniciativa para participar en distintas
                                                actividades</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range" name="actividadesRange"
                                                id="actividadesRange">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="actividadesPlanificadasRange">Iniciativa para realizar
                                                actividades
                                                planificadas</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range"
                                                name="actividadesPlanificadasRange" id="actividadesPlanificadasRange">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                                        <div class="form-group">
                                            <label for="iniciativaPropiaRange">Facilidad para realizar actividades por
                                                iniciativa propia</label>
                                            <input type="range" min="0" max="100"
                                                class="form-control form-control-range" name="iniciativaPropiaRange"
                                                id="iniciativaPropiaRange">
                                        </div>
                                    </div>
                                    <div class="form-check col-12 areaAnimacionCheckbox">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="objetivosPropios">
                                            <label class="form-check-label ml-2" for="objetivosPropios">Establece sus
                                                propios Objetivos</label>
                                        </div>
                                    </div>

                                    <div class="form-check col-12 mb-3 areaAnimacionCheckbox">
                                        <div class=" form-check  mt-2">
                                            <input type="checkbox" class="form-check-input" id="otrasActividades">
                                            <label class="form-check-label ml-2" for="otrasActividades">Otras</label>

                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                                        <div class="input-group form-group">
                                            <input type="text" name="otrasActividadesTexto" id="otrasActividadesTexto"
                                                class="form-control form-control-sm d-none ocultable inputOtras"
                                                placeholder="Especifique Otras Participación en Actividades">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow">
                            <div class="card-header">
                                <div class="row areaAnimacion">
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="objetivosAreaAnimacion"
                                            class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="objetivosAreaAnimacion"
                                                name="objetivosAreaAnimacion" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="accionesAreaAnimacion"
                                            class="col-form-label font-weight-bold text-gray-800">Acciones e
                                            Intervenciones:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="accionesAreaAnimacion"
                                                name="accionesAreaAnimacion" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                        <label for="responsableAreaAnimacion"
                                            class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                        <div class="input-group">
                                            <textarea class="form-control rounded-1" id="responsableAreaAnimacion"
                                                name="responsableAreaAnimacion" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade mt-3" id="pills-social" role="tabpanel" aria-labelledby="social-tab">
                        <div class="accordion accordion-group areaSocial" id="areaSocialAccordion">
                            <div class="card shadow">
                                <div class="card-header" id="situacionLegalHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseSituacionLegal"
                                            aria-expanded="true" aria-controls="collapseSituacionLegal">
                                            Situación Legal y de Desprotección
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseSituacionLegal" class="collapse"
                                    aria-labelledby="situacionLegalHeader">

                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="habitosOcioHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseHabitosOcio" aria-expanded="true"
                                                aria-controls="collapseHabitosOcio">
                                                Hábitos de Ocio
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseHabitosOcio" class="collapse" aria-labelledby="habitosOcioHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="HabitosOcio"
                                                        class="col-form-label font-weight-bold text-gray-800">Hábitos de
                                                        Ocio:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="HabitosOcio">
                                                            <option value="">Elegir</option>
                                                            <option>Le gustan las actividades en grupo</option>
                                                            <option>No le gustan las actividades en grupo</option>
                                                            <option>Le gustan las actvidades individuales</option>
                                                            <option value="otras">Otros</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasHabitosOcio" id="otrasHabitosOcio"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otros Hábitos de Ocio">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="creenciasHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                type="button" data-toggle="collapse" data-target="#collapseCreencias"
                                                aria-expanded="true" aria-controls="collapseCreencias">
                                                Creencias y Valores
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseCreencias" class="collapse" aria-labelledby="creenciasHeader">
                                        <div class="card-body">
                                            <div class="row  checkbox-row creenciasCheckbox">
                                                <div class="form-check">
                                                    <div class=" col-12 form-check  mt-2">
                                                        <input type="checkbox" class="form-check-input" id="creyente">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="creyente">Posee Creencias Religiosas</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 mt-2">
                                                    <div class="input-group">
                                                        <input type="text" name="poseeCreencias" id="poseeCreencias"
                                                            class="form-control d-none ocultable"
                                                            placeholder="¿Cuáles?">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row  checkbox-row creenciasCheckbox">
                                                <div class="form-check">
                                                    <div class=" col-12 form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="acudeServicios">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="acudeServicios">Acude a Servicios religiosos</label>
                                                    </div>
                                                    <div class="form-group col-12 mt-2 d-none ocultable"
                                                        id="frecuenciaServicioSelect">
                                                        <div class="input-group">
                                                            <label class="form-label mr-3"
                                                                for="FrecuenciaServicio">Indique
                                                                frecuencia: </label>
                                                            <select class="form-control selectConOtras"
                                                                name="FrecuenciaServicio">
                                                                <option value="">Elegir Frecuencia</option>
                                                                <option>Diaria</option>
                                                                <option>Dominical</option>
                                                                <option>Esporádica</option>
                                                                <option value="otras">Otras</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasFrecuenciaServicio"
                                                            id="otrasFrecuenciaServicio"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Frecuencia Asistenia Servicos Religiosos">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row  checkbox-row creenciasCheckbox">
                                                <div class="form-check">
                                                    <div class=" col-12 form-check mt-1">
                                                        <input type="checkbox" class="form-check-input" id="noCreyente">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="noCreyente">Sin Creencias específicas</label>
                                                    </div>
                                                    <div class=" col-12 form-check  mt-4">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="otrasCreencias">
                                                        <label
                                                            class="form-check-label ml-2 font-weight-bold text-gray-800"
                                                            for="otrasCreencias">Otras</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 mt-3">
                                                    <div class="input-group">
                                                        <textarea
                                                            class="form-control rounded-1 d-none ocultable inputOtras"
                                                            name="otrasAreaCreencias" id="otrasAreaCreencias" rows="3"
                                                            placeholder="Espeficique Otras Creencias"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="gestionesadministrativasHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseGestionesAdministrativas" aria-expanded="true"
                                                aria-controls="collapseGestionesAdministrativas">
                                                Gestiones Administrativas
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseGestionesAdministrativas" class="collapse"
                                        aria-labelledby="gestionesadministrativasHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="gestionesAdministrativas"
                                                        class="col-form-label font-weight-bold text-gray-800">Gestiones
                                                        Administrativas:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="gestionesAdministrativas">
                                                            <option value="">Elegir</option>
                                                            <option>Puede realizarlas de manera autónoma</option>
                                                            <option>Puede realizarlas con pequeñas ayudas</option>
                                                            <option>Puede realizarlas con acompañamiento</option>
                                                            <option>Necesita grandes ayudas para realizarlas</option>
                                                            <option>Necesita otras personas para realizarlas</option>
                                                            <option value="gestiones">Gestiones que no puede realizar
                                                                sin
                                                                ayuda externa</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasGestionesAdministrativas"
                                                            id="otrasGestionesAdministrativas"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Ayuda Gestiones Administrativas">
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <textarea
                                                            class="form-control rounded-1 d-none ocultable inputOtras"
                                                            name="detalleGestiones" id="detalleGestiones" rows="2"
                                                            placeholder="Detalle las gestiones para las que necesita ayuda externa"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="interrelacionSocialHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseInterrelacionSocial" aria-expanded="true"
                                                aria-controls="collapseInterrelacionSocial">
                                                Interrelación Social y Familiar
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseInterrelacionSocial" class="collapse"
                                        aria-labelledby="interrelacionSocialHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="ConvivenciaAnterior"
                                                        class="col-form-label font-weight-bold text-gray-800">Convivencia
                                                        anterior al ingreso:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras"
                                                            name="ConvivenciaAnterior">
                                                            <option value="">Elegir</option>
                                                            <option>Vivía con su pareja</option>
                                                            <option>Vivía con sus hijos/as</option>
                                                            <option>Vivía sola/o</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasConvivenciaAnterior"
                                                            id="otrasConvivenciaAnterior"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Convivencia Anterior al Ingreso">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <label for="causasIngreso"
                                                        class="col-form-label font-weight-bold text-gray-800">Causas del
                                                        ingreso:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="causasIngreso"
                                                            id="causasIngreso" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="RedSocial"
                                                        class="col-form-label font-weight-bold text-gray-800">A nivel
                                                        social:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras" name="RedSocial">
                                                            <option value="">Elegir</option>
                                                            <option>Tiene una red social sólida y estable</option>
                                                            <option>No mantiene red social</option>
                                                            <option>Le cuesta mantener relaciones con otras personas
                                                            </option>
                                                            <option>No se relaciona con nadie</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="redFamiliar"
                                                        class="col-form-label font-weight-bold text-gray-800">A nivel
                                                        familiar:</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="redFamiliar">
                                                            <option value="">Elegir</option>
                                                            <option>Hijos/as que viven cerca y le visitan con frecuencia
                                                            </option>
                                                            <option>Hijos/as que viven cerca pero no le visitan con
                                                                frecuencia</option>
                                                            <option>Hijos/as que viven lejos y le visitan a menudo
                                                            </option>
                                                            <option>Hijos/as que viven lejos y no le visitan demasiado
                                                            </option>
                                                            <option>Hijos/as que no le visitan</option>
                                                            <option value="familiares">Recibe visitas de otros
                                                                familiares
                                                            </option>
                                                            <option>Familiares e hijos no visitan con frecuencia, pero
                                                                hablan a diario</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasRedSocial" id="otrasRedSocial"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otras Red social">
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasRedFamiliar" id="otrasRedFamiliar"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otras Red familiar">
                                                        <input type="text" name="familiaresRedFamiliar"
                                                            id="familiaresRedFamiliar"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique qué familiares lo visitan y con qué frecuencia">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="regimenSalidas"
                                                        class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                        Salidas:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="regimenSalidas"
                                                            id="regimenSalidas" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                    <label for="regimenVisitas"
                                                        class="col-form-label font-weight-bold text-gray-800">Régimen de
                                                        Visitas:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="regimenVisitas"
                                                            id="regimenVisitas" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6  col-md-12 col-sm-12">
                                                    <label for="otrasIniciativa"
                                                        class="col-form-label font-weight-bold text-gray-800">Otras:</label>
                                                    <div class="input-group">
                                                        <textarea class="form-control rounded-1" name="otrasIniciativa"
                                                            id="otrasIniciativa" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow">
                                    <div class="card-header" id="participacionHeader">
                                        <h2 class="mb-0">
                                            <a class="btn btn-block text-center text-primary font-weight-bold"
                                                title="pulsar para desplegar" type="button" data-toggle="collapse"
                                                data-target="#collapseParticipacion" aria-expanded="true"
                                                aria-controls="collapseParticipacion">
                                                Iniciativa y Participación
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseParticipacion" class="collapse"
                                        aria-labelledby="participacionHeader">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <label for="IniciativaSocial"
                                                        class="col-form-label font-weight-bold text-gray-800">Iniciativa
                                                        y
                                                        Participación:</label>
                                                    <div class="input-group">
                                                        <select class="form-control selectConOtras"
                                                            name="IniciativaSocial">
                                                            <option value="">Elegir</option>
                                                            <option>Participa en las actividades de forma libre y
                                                                autónoma
                                                            </option>
                                                            <option>Participa en las actividades si se le plantean
                                                                directamente</option>
                                                            <option>Hay que insistir mucho para que participe en las
                                                                actividades</option>
                                                            <option>Acude a las actividades, pero no participa, solo
                                                                observa
                                                                la actividad</option>
                                                            <option>No participa en ninguna actividad</option>
                                                            <option value="otras">Otras</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 align-self-end">
                                                    <div class="input-group">
                                                        <input type="text" name="otrasIniciativaSocial"
                                                            id="otrasIniciativaSocial"
                                                            class="form-control d-none ocultable inputOtras"
                                                            placeholder="Especifique Otras Iniciativa Social">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow areaSocial">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="objetivosAreaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Objetivos:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="objetivosAreaSocial"
                                                    id="objetivosAreaSocial" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="accionesAreaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Acciones e
                                                Intervenciones:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="accionesAreaSocial"
                                                    id="accionesAreaSocial" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                            <label for="responsableAreaSocial"
                                                class="col-form-label font-weight-bold text-gray-800">Responsable:</label>
                                            <div class="input-group">
                                                <textarea class="form-control rounded-1" name="responsableAreaSocial"
                                                    id="responsableAreaSocial" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--INDICES KATZ Y BARTHEL-->

                    <div class="tab-pane fade mt-3" id="pills-indices" role="tabpanel" aria-labelledby="indices-tab">
                        <div class="accordion accordion-group areaSocial" id="areaSocialAccordion">
                            <div class="card shadow">
                                <div class="card-header" id="indiceHeader">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseIndice" aria-expanded="true"
                                            aria-controls="collapseIndice">
                                            Índice de Katz
                                        </a>
                                    </h2>
                                </div>

                                <div id="collapseIndice" class="collapse" aria-labelledby="indiceHeader">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <form action="">
                                                <div id="alerta">
                                                    <!-- <h3 data-fontsize="16" data-lineheight="22.4px"
                                                class="fusion-responsive-typography-calculated titu"
                                                style="--fontSize:16; line-height: 1.4; --minFontSize:16;">Indice de Katz</h3> -->
                                                    <table id="tabla" border="1" style="border: 1px solid #e0dede;">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>1. Baño</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Se baña solo o
                                                                    precisa ayuda para lavar alguna zona, como la
                                                                    espalda, o una
                                                                    extremidad
                                                                    con minusvalía</td>
                                                                <td>
                                                                    <left><input id="B" type="radio" name="B" value="0"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para
                                                                    lavar más de una zona, para salir o entrar en la
                                                                    bañera, o no puede
                                                                    bañarse solo</td>
                                                                <td>
                                                                    <left><input id="B" type="radio" name="B" value="1"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>2. Vestido</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Saca ropa de
                                                                    cajones y armarios, se la pone, y abrocha. Se
                                                                    excluye el acto de
                                                                    atarse
                                                                    los zapatos</td>
                                                                <td>
                                                                    <left><input id="V" type="radio" name="V" value="0"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    No se viste por
                                                                    sí
                                                                    mismo, o permanece parcialmente desvestido </td>
                                                                <td>
                                                                    <left><input id="V" type="radio" name="V" value="1"
                                                                            size="2"></left>
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>3. Uso del WC</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Va al WC solo,
                                                                    se
                                                                    arregla la ropa y se limpia </td>
                                                                <td><input id="WC" type="radio" name="WC" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para ir
                                                                    al WC </td>
                                                                <td><input id="WC" type="radio" name="WC" value="1"
                                                                        size="2"></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>4. Movilidad</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Se levanta y
                                                                    acuesta en la cama por sí mismo, y puede levantarse
                                                                    de una silla por
                                                                    sí
                                                                    mismo</td>
                                                                <td><input id="M" type="radio" name="M" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para
                                                                    levantarse y acostarse en la cama o silla. No
                                                                    realiza uno o más
                                                                    desplazamientos</td>
                                                                <td><input id="M" type="radio" name="M" value="1"
                                                                        size="2"></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2" style="color:#595c69;">
                                                                    <strong>
                                                                        <center>5. Continencia</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Control
                                                                    completo de
                                                                    micción y defecación </td>
                                                                <td><input id="C" type="radio" name="C" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Incontinencia
                                                                    parcial
                                                                    o total de la micción o defecación </td>
                                                                <td><input id="C" type="radio" name="C" value="1"
                                                                        size="2"></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="1" rowspan="2"
                                                                    style="width:140px; color:#595c69;"><strong>
                                                                        <center>6. Alimentación</center>
                                                                    </strong></td>
                                                                <td style="padding: 0 10px; color:#595c69;">
                                                                    Independiente: Lleva el
                                                                    alimento a
                                                                    la boca desde el plato o equivalente (se excluye
                                                                    cortar la carne)
                                                                </td>
                                                                <td><input id="A" type="radio" name="A" value="0"
                                                                        size="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding: 0 10px; color:#595c69;">Dependiente:
                                                                    Precisa ayuda
                                                                    para
                                                                    comer, no come en absoluto, o requiere alimentación
                                                                    parenteral</td>
                                                                <td><input id="A" type="radio" name="A" value="1"
                                                                        size="2"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <br>
                                                    Indice de Katz <input id="IKpai" name="IK" size="4" readonly><br>
                                                    <br>

                                                    Valoración: <input id="Jpai" name="J" size="35" readonly> <br>
                                                    <br>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header" id="indiceBarthel">
                                    <h2 class="mb-0">
                                        <a class="btn btn-block text-center text-primary font-weight-bold" type="button"
                                            data-toggle="collapse" data-target="#collapseBarthel" aria-expanded="true"
                                            aria-controls="collapseBarthel">
                                            Índice de Barthel
                                        </a>
                                    </h2>
                                </div>
                                <div id="collapseBarthel" class="collapse" aria-labelledby="indiceBarthel">
                                    <div class="card-body">
                                        <div class="card shadow d-flex align-items-center">
                                            <form action="">
                                                <div class="datos pegar my-5 text-center">
                                                    <!-- <h3 data-fontsize="16" data-lineheight="22.4px"
                                                class="fusion-responsive-typography-calculated titu"
                                                style="--fontSize:16; line-height: 1.4; --minFontSize:16;">Indice de Barthel</h3> -->
                                                    <div class="divform1"><label for="uno"><b>Comer: </b></label><br>
                                                        <select name="unopai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Totalmente independiente.</option>
                                                            <option value="valdos">Necesita ayuda para cortar carne, el
                                                                pan, etc.</option>
                                                            <option value="valtres">Dependiente.</option>
                                                        </select>
                                                    </div>

                                                    <div class="divform1 "><label for="dos"><b>Lavarse: </b></label><br>
                                                        <select name="dospai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente, entra y sale solo del
                                                                baño.</option>
                                                            <option value="valdos">Dependiente.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="tres"><b>Vestirse:
                                                            </b></label><br>
                                                        <select name="trespai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente. Capaz de ponerse y
                                                                quitarse la ropa,
                                                                abotonarse y atarse los zapatos.</option>
                                                            <option value="valdos">Necesita ayuda.</option>
                                                            <option value="valtres">Dependiente.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="cuatro"><b>Arreglarse:
                                                            </b></label><br>
                                                        <select name="cuatropai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente para lavarse la cara,
                                                                las manos, peinarse,
                                                                afeitarse, maquillarse, etc..</option>
                                                            <option value="valdos">Dependiente.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="cinco"><b>Deposiciones:
                                                            </b></label><br>
                                                        <select name="cincopai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Continencia normal.</option>
                                                            <option value="valdos">Ocasionalmente algún episodio de
                                                                incontinencia, o
                                                                necesita ayuda para administrarse supositorios o
                                                                lavativas.</option>
                                                            <option value="valtres">Incontinencia.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="seis"><b>Micción:
                                                            </b></label><br>
                                                        <select name="seispai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Continencia normal, o es capaz de
                                                                cuidarse de la sondsa
                                                                si tiene una puesta.</option>
                                                            <option value="valdos"> 1 episodio diario como máximo de
                                                                incontinencia, o
                                                                necesita ayuda para cuidar de la sonda.</option>
                                                            <option value="valtres">Incontinencia.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="siete"><b>Uso del retrete:
                                                            </b></label><br>
                                                        <select name="sietepai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente para ir al cuardo de
                                                                aseo, quitarse y
                                                                ponerse la ropa.</option>
                                                            <option value="valdos">Necesita ayuda para ir al retrete,
                                                                pero se limpia solo.
                                                            </option>
                                                            <option value="valtres">Dependiente.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="ocho"><b>Trasladarse:
                                                            </b></label><br>
                                                        <select name="ochopai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente para ir del sillón a la
                                                                cama.</option>
                                                            <option value="valdos">Mínima ayuda física o supervisión
                                                                para hacerlo.</option>
                                                            <option value="valtres">Necesita gran ayuda, pero es capaz
                                                                de mantenerse sentado
                                                                solo.</option>
                                                            <option value="valcuatro">Dependiente.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="nueve"><b>Deambular:
                                                            </b></label><br>
                                                        <select name="nuevepai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente, camina solo 50 metros.
                                                            </option>
                                                            <option value="valdos">Necesita ayuda física o supervisión
                                                                para andar 50 metros.
                                                            </option>
                                                            <option value="valtres">Independiente en silla de ruedas sin
                                                                ayuda.</option>
                                                            <option value="valcuatro">Dependiente.</option>
                                                        </select>
                                                    </div>
                                                    <div class="divform1 "><label for="diez"><b>Escaleras:
                                                            </b></label><br>
                                                        <select name="diezpai" size="1" class="opcion">
                                                            <option selected="selected" value="nada">&nbsp;</option>
                                                            <option value="valuno">Independiente para bajar y subir
                                                                escaleras.</option>
                                                            <option value="valdos">Necesita ayuda física o supervisión
                                                                para hacerlo.
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
                                                    <div class="divres ancho"><label for="resultado"
                                                            class="ancho1"><b>Puntuación:
                                                            </b></label> <input type="text" id="resultadopai"
                                                            name="resultado" size="5" readonly="readonly"> <b>(rango 0 a
                                                            100 / 90 silla de ruedas)</b>
                                                    </div><br>
                                                    <div class="divres ancho"><label for="resultado1"
                                                            class="ancho1"><b>Grado de
                                                                dependencia: </b></label> <input type="text"
                                                            id="resultado1pai" name="resultado1" size="30"
                                                            readonly="readonly">
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--End INDICES-->

                    <div class="row mt-5">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                            <button type="button" class="btn btn-success" id="boton-modificar-pai">Modificar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>