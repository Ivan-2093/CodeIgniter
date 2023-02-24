<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Nuevo usuario
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus align-middle me-2">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody id="bodyTableUsers">
                    <tr>
                        <td>1</td>
                        <td>Admin</td>
                        <td>admin@gmail.com</td>
                        <td>111-111-1111</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <form id="formCreateUser" name="formCreateUser">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="form-group form-floating">
                                            <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="Primer Nombre">
                                            <label for="inputFirstName">Primer Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputSecondName">Segundo Nombre</label>
                                            <input type="text" class="form-control" id="inputSecondName" name="inputSecondName" placeholder="Segundo Nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputFirstSurname">Primer Apellido</label>
                                            <input type="text" class="form-control" id="inputFirstSurname" name="inputFirstSurname" placeholder="Primer Apellido">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputSecondSurname">Segundo Apellido</label>
                                            <input type="text" class="form-control" id="inputSecondSurname" name="inputSecondSurname" placeholder="Segundo Apellido">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputIdCostomer">N° Documento</label>
                                            <input type="number" class="form-control" id="inputIdCostomer" name="inputIdCostomer" placeholder="N° de Documento">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputPhone">Télefono</label>
                                            <input type="number" class="form-control" id="inputPhone" name="inputPhone" placeholder="Télefono">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputEmail">Correo</label>
                                            <input type="email" class="form-control" id="inputEmail" name="inputEmail"   placeholder="Correo electronico">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="inputPerfilUser">Perfil del Usuario</label>
                                            <input type="number" class="form-control" id="inputPerfilUser" name="inputPerfilUser" placeholder="Perfil del Usuario">
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="insert();">Guardar</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        const base_url = "<?php echo base_url() ?>";
    </script>
    <script src="<?php base_url() ?>js/Usuarios/funciones.js"></script>
    <?php $this->load->view('footer');
