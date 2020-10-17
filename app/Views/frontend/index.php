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

    <header class="masthead bg-primary-v text-white text-center">

        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0 font-weight-bold">Credi Fast</h1>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0 my-1">Realiza tu tramite sin salir de casaa</p>
            <form class="form-inline">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" id="txtMonto" placeholder="Monto" required="required" data-validation-required-message="Por Favor ingrese el Monto.">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" id="txtPlazo" placeholder="Plazo" required="required" data-validation-required-message="Por Favor ingrese el plazo.">
                    <p class="help-block text-danger"></p>
                </div>
                <button type="submit" class="btn btn-simula btn-lg">Simula tu crédito</button>
            </form>

        </div>

    </header>






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