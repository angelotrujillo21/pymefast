<!DOCTYPE html>
<html class="no-js h-100" lang="es">

<head>
    <?php extend_view(['frontend/common/head'], $data) ?>

</head>

<body>

    <div class="page-loader">
        <div class="loader-dual-ring"></div>
    </div>

    <?php extend_view(['frontend/common/navbar'], $data) ?>

    <section class="masthead bg-primary-v text-white text-center">
        <div class="background-overlay"></div>

        <div class="container d-flex align-items-center flex-column content-credit-fast">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0 font-weight-bold">Credi Fast</h1>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0 my-1">Realiza tu tramite sin salir de casa</p>

            <form method="post" action="<?= route('credito-aprobado') ?>" class="form-inline form-simulacion mt-4 d-flex justify-content-center">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" id="txtMonto" placeholder="Monto" required="required" data-validation-required-message="Por Favor ingrese el Monto.">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <select class="form-control" name="plazo" id="plazo">
                        <option value="">Tipo de cuotas</option>
                        <option value="">Cuotas Fijas</option>
                        <option value="">Solo intereses</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <select class="form-control" name="plazo" id="plazo">
                        <option value="">Plazo</option>
                        <option value="">1 Año</option>
                        <option value="">1 y medio</option>
                        <option value="">2 Años</option>
                        <option value="">2 y medio</option>
                        <option value="">3 Años</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <button id="btn-simula" type="button" class="btn btn-simula btn-lg">Simula tu crédito</button>
                </div>

                <div id="mi-monto" style="display: none;"> 
                    <div class="form-group mx-sm-3 mb-2  d-block">
                        <p class="mb-0" style="font-size: 18px;">Mi cuota mensual sería:</p>
                        <p id="monto-solicitado" class="monto-solicitado">
                            <strong>
                                S/ 508.00
                            </strong>
                        </p>
                        <button id="btn-send" type="button" class="btn btn-simula btn-lg">Solicitar credito</button>
                    </div>
                </div>

            </form>

        </div>

    </section>

    <!--Section1-->
    <section class="page-section my-4">
        <div class="container">
            <!--  Grid Items-->
            <div class="row">
                <div class="col-lg-5 ml-auto text-white bg-seccion1">
                    <h1>
                        El impulso que tu negocio requiere
                    </h1>
                    <p class="lead">
                        Simula tu crédito y, si tus ventas anuales no superan a los 1, 700 UIT, podrás solicitar el Credi Fast que se adecue a las necesidades de tu empresa
                    </p>
                    <small style="font-size: 14px;font-weight: 700;" >Si ya comenzaste una solicitud de crédito y quieres consultar su estado, presiona <a style="color:#fff;" href="<?= route('consultar-estado') ?>">aquí.</a> </small>
                </div>
                <div class="col-lg-7 ml-auto bg-seccion2">
                    <h6>
                        PRINCIPALES BENEFICIOS DE CREDI FAST
                    </h6>
                    <div class="row">
                        <div class="col">
                            <span class="material-icons icon-landing-s1 "> person </span>
                            <div class="w-100"></div>
                            Recibe asesoría personalizada
                            <p class="lead">
                                Adjunta los documentos que llevarías de manera física
                            </p>
                        </div>
                        <div class="col">
                            <span class="material-icons icon-landing-s1 "> devices </span>
                            <div class="w-100"></div>
                            Realiza todo el trámite vía online
                            <p class="lead">
                                Adjunta los documentos que llevarías de manera física
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="material-icons icon-landing-s1 "> trending_flat </span>
                            <div class="w-100"></div>
                            Recibe asesoría personalizada
                            <p class="lead">
                                Adjunta los documentos que llevarías de manera física
                            </p>
                        </div>
                        <div class="col">
                            <span class="material-icons icon-landing-s1 "> dvr </span>
                            <div class="w-100"></div>
                            Realiza todo el trámite vía online
                            <p class="lead">
                                Adjunta los documentos que llevarías de manera física
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- Section2-->
    <section class="page-section seccion-2 text-black mb-0" id="about">
        <div class="container-fluid">
            <!-- About Section Content-->
            <div class="row no-gutters">
                <div class="col-lg-4 ml-auto bg-seccion2">
                    <div class="p-0 p-lg-3">
                        <h1 class="font-weight-bold">
                            ¿Para qué puedes utilizarlo?
                        </h1>
                        <p class="lead">
                            Asegura un flujo de activos constante a corto plazo para tus empleados y/o negocio.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 ml-auto bg-seccion2">
                    <div class="row no-gutters">
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2">AFRONTAR RETOS IMPREVISTOS</p>
                            <p class="lead">
                                Asegura un flujo de activos constante a corto plazo para tus empleados y/o negocio.
                            </p>
                        </div>
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2">CRECER TU NEGOCIO</p>
                            <p class="lead">
                                Otorga empaquetamiento de seguridad ocupacional para tu negocio.
                            </p>
                        </div>
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2"> PAGO DE PROVEEDORES </p>
                            <p class="lead">
                                Asegura la negociación de mejores precios con tus proveedores.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto bg-seccion2">
                    <div class="p-0 p-lg-3">
                        <h1 class="font-weight-bold">
                            ¿Qué necesitas para solicitarlo?
                        </h1>
                        <p class="lead">
                            Asegura un flujo de activos constante a corto plazo para tus empleados y/o negocio.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 ml-auto bg-seccion2">
                    <div class="row no-gutters">
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2"> SIMULAR TU CRÉDITO </p>
                            <p class="lead">
                                Sólo necesitas otorgar tu REU para ello.
                            </p>
                        </div>
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2"> CREAR EXPEDIENTE CREDITICIO </p>
                            <p class="lead">
                                Como cliente, tu solicitud será más rápida.
                            </p>
                        </div>
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2"> ELEGIR TU PRODUCTO </p>
                            <p class="lead">
                                Créditos disponibles tanto a corto como a largo plazo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>



    <?php extend_view(['frontend/common/footer'], $data) ?>
</body>

<script>
    const web_root = '<?= WEB_ROOT ?>';
    const web_root_resource = '<?= WEB_ROOT_RESOURCE ?>';
    const simbolo_moneda = '<?= SIMBOLO_MONEDA ?>';
</script>

<?php extend_view(['frontend/common/scripts'], $data) ?>


<script>
    $(function() {
        $("#mi-monto").hide();

        $("#btn-simula").click(function() {

            var monto = parseFloat($("#txtMonto").val());
            var mono_mensual = parseFloat(monto / 12) + parseFloat((monto / 12) * 0.22);

            $("#monto-solicitado").html(mono_mensual.toFixed(2));
            $("#mi-monto").show();
        });

        $("#btn-send").click(function() {
            var monto = parseFloat($("#txtMonto").val());

            if (monto <= 5000) {
                document.location = route('credito-aprobado');
            }

            if (monto >= 5001 && monto <= 6000) {
                document.location = route('simulacion-denegada');
            }

            if (monto >= 6001 && monto <= 7000) {
                document.location = route('no-cliente-aprobado');
            }

            if (monto >= 7001 && monto <= 9000) {
                document.location = route('no-cliente-denegado');
            }


        });
    });
</script>



</html>