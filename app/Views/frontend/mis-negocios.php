<!DOCTYPE html>
<html class="no-js h-100" lang="es">

<head>
    <?php extend_view(['frontend/common/head'], $data) ?>

</head>

<body>

    <div class="page-loader">
        <div class="loader-dual-ring"></div>
    </div>

    <div class="container-fluid">

        <div class="row">


            <main class="main-content col-lg-12 col-md-9 col-sm-12 p-0">

                <?php extend_view(['frontend/common/navbar'], $data) ?>

                <div class="main-content-container container-fluid px-4">

                    <div class="container">
                        <div class="page-header row no-gutters py-4">
                            <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                                <div class="card card-small">
                                    <div class="card-header border-bottom">
                                        <div class="d-flex align-items-center bd-highlight">
                                            <div class="flex-grow-1 bd-highlight">
                                                <h5 class="m-0">Seleccione su negocio :</h5>
                                            </div>
                                            <div class="bd-highlight">
                                                <button data-toggle="modal" id="btnCrearNegocio" class="btn btn-gradient-primary btn-rounded btn-icon">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="row" id="list-negocios">
                                            
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

    <div class="modal fade" enctype="multipart/form-data" id="formNegocio" tabindex="-1" role="dialog" aria-labelledby="formNegocioLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formNegocioLabel">Nuevo Negocio</h5>
                    <button type="button" class="btn btn-close btn-gradient-primary btn-rounded p-0" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">

                            <div class="col-12 mb-1">
                                <span class="title-negocio">General</span>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sNombre" class="col-form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="sNombre" autocomplete="off" name="sNombre">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="sDireccion" class="col-form-label">Direccion:</label>
                                    <input type="text" class="form-control" id="sDireccion" autocomplete="off" name="sDireccion">
                                </div>
                            </div>


                        
                            
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="sImagen" class="col-form-label">Imagen:</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="sImagen" accept="image/*" lang="es" name="sImagen">
                                            <label class="custom-file-label" for="sImagen">Elija el
                                                archivo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nTipoProspecto" class="col-form-label">Tipo De Prospecto:</label>
                                    <select class="form-control" name="nTipoProspecto" id="nTipoProspecto">
                                        <option value="0">Seleccionnar</option>
                                        <?php foreach ($aryTipoProspectos as $aryTipoProspecto) : ?>
                                            <option value="<?= $aryTipoProspecto['nIdCatalogoTabla'] ?>"><?= $aryTipoProspecto['sDescripcionLargaItem'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="nEstado" class="col-form-label">Estado:</label>
                                    <select class="form-control" name="nEstado" id="nEstado">
                                            <option value="1">Activo</option>
                                            <option value="0">Desactivo</option>
                                    </select>
                                </div>
                            </div>




                            <div class="col-12 mb-1">
                                <span class="title-negocio">Controles</span>
                            </div>


                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span>Cliente
                                        <a class="edit-controles" data-toggle="modal" data-target="#formCliente"><i class="fas fa-pen"></i></a></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span>Vendedores <a class="edit-controles" data-toggle="modal" data-target="#formVendedores"><i class="fas fa-pen"></i></a></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span>Productos o servicios <a class="edit-controles" data-toggle="modal" data-target="#formProductosoServicios"><i class="fas fa-pen"></i></a></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <span>Supervisores <a class="edit-controles" data-toggle="modal" data-target="#formSupervisores"><i class="fas fa-pen"></i></a></span>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-gradient-primary btn-fw btn-submit">Guardar</button>
                </div>

            </div>
        </div>
    </div>



  

    <!-- Fin de modales -->






</body>

<script>
    const web_root = '<?= WEB_ROOT ?>';
    const web_root_resource = '<?= WEB_ROOT_RESOURCE ?>';
    const simbolo_moneda    =  '<?= SIMBOLO_MONEDA ?>';
</script>

<?php extend_view(['frontend/common/scripts'], $data) ?>

<script>
    $(function() {

    });
</script>

</html>