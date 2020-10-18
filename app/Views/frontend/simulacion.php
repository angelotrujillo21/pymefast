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


    <div class="container-flujo">
        <div class="container">
            <div class="w-100 my-2">
                <img class="d-inline" src="<?= src('multi/bullet.svg') ?>" alt="">
                <p class="p-0 font-weight-bold d-inline">SIMULADOR DE CREDITO</p>
            </div>

            <div class="flex-center mt-5">
                <div>
                    <input type="text" class="form-control d-block input-simulador" placeholder="RUC">
                    <div class="w-100 flex-center my-3">
                        <button class="btn btn-simular-flujo btn-block font-weight-bold">Simula tu crédito</button>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="container-flujo">
        <div class="container">
            <div class="w-100 my-2">
                <img class="d-inline" src="<?= src('multi/bullet.svg') ?>" alt="">
                <p class="p-0 font-weight-bold d-inline">SIMULADOR DE CREDITO</p>
            </div>

            <div class="flex-center mt-lg-5 mt-0">
                <div class="text-center">
                    <div>
                        <h1 class="font-weight-bold">Desembolso de monto aprobado </h1>
                        <span class="material-icons icon-check "> check_circle_outline </span>
                    </div>
                    <div class="w-20 flex-center my-3">
                        <button class="btn btn-simular-flujo mx-2 font-weight-bold w-200">Solicitar crédito</button>
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
    $(function() {});
</script>



</html>