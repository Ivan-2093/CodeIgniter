<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 bg-light">
                                <div class="input-group input-group-sm ">
                                    <span class="input-group-text bg-warning fw-bold border border-secondary" id="basic-addon1">Placa</span>
                                    <input type="text" class="form-control form-control-sm border border-secondary" placeholder="Escriba aquí la placa" aria-label="Escriba aquí la placa" aria-describedby="btn-consultar-placa">
                                    <button class="btn btn-outline-primary btn-sm" type="button" id="btn-consultar-placa" onclick="alert('Consultando info de la placa');loadInfoVh()">Consultar</button>
                                </div>
                            </div>
                        </div>
                        <hr class="border border-dark border-2 opacity-50">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                <label for="inputClase" class="form-label fw-bold ">Clase:</label>
                                <input id="inputClase" name="inputClase" type="text" class="form-control form-control-sm border border-secondary" placeholder="Clase">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                <label for="inputDescripcion" class="form-label form-label-sm fw-bold ">Descripción:</label>
                                <input id="inputDescripcion" name="inputDescripcion" type="text" class="form-control form-control-sm border border-secondary" placeholder="Descripción">
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                <label for="inputYear" class="form-label fw-bold ">Año:</label>
                                <input id="inputYear" name="inputYear" type="text" class="form-control form-control-sm border border-secondary" placeholder="Año">
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                <label for="inputKmSistema" class="form-label fw-bold ">Km sistema:</label>
                                <input id="inputKmSistema" name="inputKmSistema" type="number" class="form-control form-control-sm border border-secondary" placeholder="Km Sistema">
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                <label for="inputMttoSelect" class="form-label fw-bold ">Km estimado:</label>
                                <input id="inputKmEstimado" name="inputKmEstimado" type="number" class="form-control form-control-sm border border-secondary" placeholder="Km Estimado">
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                                <label for="inputMttoSelect" class="form-label fw-bold ">Km real:</label>
                                <input id="inputKmReal" name="inputKmReal" type="number" class="form-control form-control-sm border border-secondary" placeholder="Km real">
                            </div>
                            <div class="col-auto">
                                <!--  <span class="input-group-text bg-secondary bg-opacity-75 fw-bold border border-secondary" id="basic-addon1">Mtto solicitad:</span> -->
                                <label for="inputMttoSelect" class="form-label fw-bold ">Mantenimiento solicitad:</label>
                                <select id="inputMttoSelect" name="inputMttoSelect" class="js-example-basic-single-mtto" style="width: 100%">
                                    <option value="" selected>Mtto Solicitado</option>
                                    <option value="Primer Mtto">Primer Mtto </option>
                                    <option value="Segundo Mtto">Segundo Mtto </option>
                                    <option value="Tercer Mtto">Tercer Mtto </option>
                                    <option value="Cuarto Mtto">Cuarto Mtto </option>
                                    <option value="Quinto Mtto">Quinto Mtto </option>
                                    <option value="Sexto Mtto">Sexto Mtto </option>
                                    <option value="Septimo Mtto">Septimo Mtto </option>
                                    <option value="Octavo Mtto">Octavo Mtto </option>
                                    <option value="Noveno Mtto">Noveno Mtto </option>
                                    <option value="Décimo Mtto">Décimo Mtto </option>
                                    <option value="Mtto a La Medida">Mtto a La Medida </option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <!-- <span class="input-group-text bg-secondary bg-opacity-75 fw-bold border border-secondary" id="basic-addon1">Sede:</span> -->
                                <label for="inputMttoSelect" class="form-label fw-bold ">Sede:</label>
                                <select id="inputSede" name="inputSede" class="js-example-basic-single-sede" style="width: 100%">
                                    <option value="" selected>Sedes</option>
                                    <option value="Sede 01">Sede 01</option>
                                    <option value="Sede 02">Sede 02</option>
                                    <option value="Sede 03">Sede 03</option>
                                    <option value="Sede 04">Sede 04</option>
                                    <option value="Sede 05">Sede 05</option>
                                    <option value="Sede 06">Sede 06</option>
                                    <option value="Sede 07">Sede 07</option>
                                    <option value="Sede 08">Sede 08</option>
                                    <option value="Sede 09">Sede 09</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-2 align-self-end float-end">
                            <button type="button" class="form-control btn btn-success" onclick="alert('Cargando la información del mantenimiento');loadInfoMtto();">Cargar</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered border-primary table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th>Repuesto</th>
                                        <th class="text-end">GM</th>
                                        <th class="text-end">ACDelco</th>
                                        <th class="text-end">Todo Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Repuesto #01</td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_1" id="inputRepuestoGM_1">
                                            <label class="form-check-label" for="inputRepuestoGM_1">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_1" id="inputRepuestoAC_1">
                                            <label class="form-check-label" for="inputRepuestoAC_1">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_1" id="inputRepuestoOther_1">
                                            <label class="form-check-label" for="inputRepuestoOther_1">
                                                $######
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repuesto #02</td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_2" id="inputRepuestoGM_2">
                                            <label class="form-check-label" for="inputRepuestoGM_2">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_2" id="inputRepuestoAC_2">
                                            <label class="form-check-label" for="inputRepuestoAC_2">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_2" id="inputRepuestoOther_2">
                                            <label class="form-check-label" for="inputRepuestoOther_2">
                                                $######
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repuesto #03</td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_3" id="inputRepuestoGM_3">
                                            <label class="form-check-label" for="inputRepuestoGM_3">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_3" id="inputRepuestoAC_3">
                                            <label class="form-check-label" for="inputRepuestoAC_3">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_3" id="inputRepuestoOther_3">
                                            <label class="form-check-label" for="inputRepuestoOther_3">
                                                $######
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repuesto #04</td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_4" id="inputRepuestoGM_4">
                                            <label class="form-check-label" for="inputRepuestoGM_4">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_4" id="inputRepuestoAC_4">
                                            <label class="form-check-label" for="inputRepuestoAC_4">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_4" id="inputRepuestoOther_4">
                                            <label class="form-check-label" for="inputRepuestoOther_4">
                                                $######
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Repuesto #05</td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_5" id="inputRepuestoGM_5">
                                            <label class="form-check-label" for="inputRepuestoGM_5">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_5" id="inputRepuestoAC_5">
                                            <label class="form-check-label" for="inputRepuestoAC_5">
                                                $######
                                            </label>
                                        </td>
                                        <td class="text-end">
                                            <input class="form-check-input bg-primary" type="radio" name="inputRepuesto_5" id="inputRepuestoOther_5">
                                            <label class="form-check-label" for="inputRepuestoOther_5">
                                                $######
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-start" colspan="3"><strong>Mano de Obra</strong></td>
                                        <td class="text-end">$######</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start" colspan="3"><strong>Repuestos</strong></td>
                                        <td class="text-end">$######</td>
                                    </tr>
                                    <tr>
                                        <td class="text-start"><strong>Total Servicio [T Agenda]</strong></td>
                                        <td class="text-end"><strong>##.## Horas</strong></td>
                                        <td class="text-end"><strong>Servicio [$]</strong></td>
                                        <td class="text-end"><strong>$ #############</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row flex-row-reverse">
                            <div class="col-2">
                                <button type="button" class="form-control btn btn-success " onclick="alert('Guardando y agendando la información del mantenimiento');SaveInfoMtto();">Reservar</button>

                            </div>
                            <div class="col-2">
                                <button type="button" class="form-control btn btn-danger" onclick="alert('Guardando la información del mantenimiento');SaveInfoMtto();">No acepta</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title text-center">Adicionales</h5>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-grid gap-2">
                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Extintor
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Tecnico Mecánica
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Campaña
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Diagnóstico
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Cambio de aceite
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Cambio Filtro Aire Motor
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Cambio Filtro Aire Acondicionado
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Cambio Plumillas
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Correa de Distribución
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Correa de Accesorios
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Sincronización
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Airlife
                                        </button>

                                        <button type="button" class="btn btn-info text-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-middle me-2">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                            </svg>
                                            Alineación y Balanceo
                                        </button>
                                    </div>


                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        .select2-container .select2-selection--single {
            height: 100%;
        }
    </style>
    <script type="text/javascript">
        const base_url = "<?php echo base_url() ?>";
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php base_url() ?>js/Cotizador/funciones.js"></script>
    <?php $this->load->view('footer');
