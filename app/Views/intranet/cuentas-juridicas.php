<!DOCTYPE html>
<html class="no-js h-100" lang="es">

<head>
    <?php extend_view(['intranet/common/head'], $data) ?>

</head>

<body>

    <div class="page-loader">
        <div class="loader-dual-ring"></div>
    </div>


    <div class="container-fluid">

        <div class="row">

            <?php extend_view(['intranet/common/aside'], $data) ?>

            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

                <?php extend_view(['intranet/common/navbar'], $data) ?>

                <div class="main-content-container container-fluid px-2">

                    <div class="container-fluid">
                        <div class="page-header row no-gutters py-4">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                <div class="card card-small">
                                    <div class="card-body py-4">

                                        <div class="row flex-center">
                                            <div class="col-12">
                                                <h4>Bienvenido al BBVA</h4>
                                            </div>
                                        </div>

                                        <div class="row flex-center">
                                            <div class="col-8">
                                                <div class="form-group mb-2">
                                                    <input type="text" class="form-control" id="sPersonaJuridica" placeholder="Persona Juridica">
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="form-group mb-2">
                                                    <button class="btn btn-primary">Filtrar</button>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="form-group mb-2">
                                                    <select class="form-control" name="" id="">
                                                        <option value="">Empresa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-12">
                                                <table data-toggle="table" data-search="true" data-query-params="queryParams" toolbarAlign="left" data-show-refresh="true" data-pagination="true" data-toolbar="#toolbar" data-buttons-align="left" data-show-columns="true" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-classes="table table-hover table-condensed" data-striped="true" data-buttons-class="gradient-primary-table" data-card-view="false" data-page-size="14" data-sort-name="" data-sort-order="asc">
                                                    <thead>
                                                        <tr>
                                                            <th>Numero</th>
                                                            <th>Tipo</th>
                                                            <th>Saldo Contable</th>
                                                            <th>Saldo Disponible</th>
                                                            <th>Moneda</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>0011-0130-01-6941234 </td>
                                                            <td>CUENTA-CORRIENTE </td>
                                                            <td>22,341,718.50</td>
                                                            <td>22,4555,434,81</td>
                                                            <td>SOLES</td>
                                                        </tr>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </main>
        </div>
    </div>



    <!-- Modales -->


    <div class="modal fade" id="formColaborador" tabindex="-1" role="dialog" aria-labelledby="formColaboradorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formColaboradorLabel">Invitar Colaborador</h5>
                    <button type="button" class="btn btn-close btn-gradient-primary btn-rounded p-0" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="sEmail" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="sEmail" autocomplete="off" name="sEmail">
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Tipo:</label>
                                    <select class="form-control" name="nTipoEmpleado" id="nTipoEmpleado">
                                        <option value="0">Seleccionar</option>


                                    </select>
                                </div>
                            </div>

                            <div id="container-color" class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Color:</label>
                                    <select class="form-control" name="nIdColor" id="nIdColor">
                                        <option value="0">Seleccionar</option>

                                    </select>
                                </div>
                            </div>


                            <div id="container-supervisor" class="col-md-4 col-12">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Supervisor:</label>
                                    <select class="form-control" name="nIdSupervisor" id="nIdSupervisor">
                                        <option value="0">Seleccionar</option>

                                    </select>
                                </div>
                            </div>



                        </div>

                        <div id="content-link-copy" class="row flex-center">
                            <div class="col-8">
                                <p class="mb-2 color-azul">Si no llego el correo puede utiliza este link para el
                                    registro del colaborador.</p>
                                <div class="input-group mb-3">
                                    <input type="text" id="sLinkCopy" readonly class="form-control" placeholder="Copia el link.." aria-label="Copia el link.." aria-describedby="basic-copy">
                                    <div id="btnCopyLink" class="input-group-append cursor-pointer">
                                        <span class="input-group-text" id="basic-copy"><i class="far fa-copy"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient-primary btn-fw btn-submit">Invitar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalColaboradores" tabindex="-1" role="dialog" aria-labelledby="modalColaboradoresLabel" aria-hidden="true">
        <div class="modal-dialog dialog-colaborador" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalColaboradoresLabel">Lista de Colaboradores</h5>
                    <button type="button" class="btn btn-close btn-gradient-primary btn-rounded p-0" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">


                    <div class=" row">

                        <div class="col-12 col-md-6">
                            <div class="card-colaborador">
                                <div class="row no-gutters">
                                    <div class="col-3 flex-center">
                                        <div class="circulo-vendedor" data-toggle="tooltip" data-placement="bottom" title="Angelo trujillo">
                                            <span>AT</span>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center">
                                        <span>Angelo Trujillo Orozco</span>
                                        <div class="w-100"></div>
                                        <span class="font-14">Asesora de ventas</span>
                                        <div class="w-100"></div>
                                        <span class="font-13">QWAY</span>
                                    </div>
                                    <div class="col-3">
                                        <div class="cuadraro-supervisor fondo-rojo"></div>
                                        <span class="activo-hace">Activo hace 5h</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card-colaborador">
                                <div class="row no-gutters">
                                    <div class="col-3 flex-center">
                                        <div class="circulo-vendedor" data-toggle="tooltip" data-placement="bottom" title="Angelo trujillo">
                                            <span>AT</span>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center">
                                        <span>Angelo Trujillo Orozco</span>
                                        <div class="w-100"></div>
                                        <span class="font-14">Asesora de ventas</span>
                                        <div class="w-100"></div>
                                        <span class="font-13">QWAY</span>
                                    </div>
                                    <div class="col-3">
                                        <div class="cuadraro-supervisor fondo-amarillo"></div>
                                        <span class="activo-hace">Activo hace 5h</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card-colaborador">
                                <div class="row no-gutters">
                                    <div class="col-3 flex-center">
                                        <div class="circulo-vendedor" data-toggle="tooltip" data-placement="bottom" title="Angelo trujillo">
                                            <span>AT</span>
                                        </div>
                                    </div>
                                    <div class="col-6 text-center">
                                        <span>Angelo Trujillo Orozco</span>
                                        <div class="w-100"></div>
                                        <span class="font-14">Asesora de ventas</span>
                                        <div class="w-100"></div>
                                        <span class="font-13">QWAY</span>
                                    </div>
                                    <div class="col-3">
                                        <div class="cuadraro-supervisor fondo-amarillo"></div>
                                        <span class="activo-hace">Activo hace 5h</span>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>



                </div>

            </div>
        </div>
    </div>



    <!-- Fin de modales -->






</body>

<script>
    const web_root = '<?= WEB_ROOT ?>';
    const web_root_resource = '<?= WEB_ROOT_RESOURCE ?>';
    const simbolo_moneda = '<?= SIMBOLO_MONEDA ?>';
</script>

<?php extend_view(['intranet/common/scripts'], $data) ?>


<script>
    $(function() {});
</script>



</html>