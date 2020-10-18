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


    <div id="seccion1" class="container-flujo">
        <div class="container">
            <div class="w-100 my-2">
                <img class="d-inline" src="<?= src('multi/bullet.svg') ?>" alt="">
                <p class="p-0 font-weight-bold d-inline">SIMULADOR DE CREDITO</p>
            </div>

            <div class="flex-center mt-5">
                <div>
                    <input type="text" class="form-control d-block input-simulador" placeholder="Folio">
                    <div class="w-100 flex-center my-3">
                        <button id="btn-simular" class="btn btn-simular-flujo btn-block font-weight-bold">Enviar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div id="seccion2" class="container-flujo" style="height: 600px !important;">
        <div class="container">
            <div class="w-100 my-2">
                <img class="d-inline" src="<?= src('multi/bullet.svg') ?>" alt="">
                <p class="p-0 font-weight-bold d-inline">SIMULADOR DE CREDITO</p>
            </div>

            <div class="flex-center mt-lg-5 mt-0">
                <div class="text-center w-100">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="step1"><strong>Expediente crediticio</strong></li>
                        <li class="active" id="step2"><strong>Validación de documentos</strong></li>
                        <li id="step3"><strong>Central de riesgos</strong></li>
                        <li id="step4"><strong>Gestor de desembolso</strong></li>
                    </ul> <!-- fieldsets -->

                    <div class="my-2">
                        <h3 >Tus documentos han sido validados y están <br> siendo enviados a Central de riesgos.</h3>
                        <h5 >En menos de 12 horas tendrás una respuesta.</h5>
                    </div>
                    <div class="w-20 flex-center my-3">
                        <button class="btn btn-simular-flujo mx-2 font-weight-bold w-200">Aceptar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>



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

        $("#seccion2").hide();

        $("#btn-simular").click(function() {
            console.log(1);
            $("#seccion1").hide();
            $("#seccion2").show();
        });

    });
</script>



</html>