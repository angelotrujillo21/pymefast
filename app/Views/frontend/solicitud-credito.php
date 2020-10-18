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
    <div class="my-5" style="height: 10px !important;" >...</div>
 	<section class="page-section seccion-2 text-black mb-0" id="about">
        <div class="container-fluid">
        	<img src="<?= src('multi/bullet.svg') ?>" alt="">
                <div class="w-100"></div>
                 <p class="font-weight-bold p-0 my-2">SOLICITUD DE CREDITOS</p>
		            <div class="row">
		                <div class="col-md-12 mx-0">
		                    <form id="msform">
		                    <!-- progressbar -->
		                        <ul id="progressbar">
		                            <li class="active step0" id="step1"><strong>Expediente crediticio</strong></li>
		                            <li id="step2"><strong>Validación de documentos</strong></li>
		                            <li id="step3"><strong>Central de riesgos</strong></li>
		                            <li id="step4"><strong>Gestor de desembolso</strong></li>
		                        </ul> <!-- fieldsets -->
		                            <fieldset>
		                                 <div class="row no-gutters">
		                                 	<h3 class="text-left">Adjunta los Siguientes Documentos</h3>
		                                 	<div class="col-lg-2 ml-auto bg-seccion2">
					                        </div>
					                        <div class="col-lg-8 ml-auto bg-seccion2 ">
					                            <p class="p-0 my-2 flex-center"><img src="<?= src('multi/bullet.svg') ?>" alt=""> Copia DNI empleados y representante. </p>
					                            <p class="p-0 my-2"><img src="<?= src('multi/bullet.svg') ?>" alt="">Recibo de agua o luz. </p>
					                            <p class="p-0 my-2"><img src="<?= src('multi/bullet.svg') ?>" alt=""> Hoja de resumen. </p>
					                            <p class="p-0 my-2"><img src="<?= src('multi/bullet.svg') ?>" alt="">Predio urbano. </p>

					                        </div>
					                        <div class="col-lg-2 ml-auto bg-seccion2">
					                        </div>
                    					</div>
		                                <input type="button" name="next" class="next action-button" value="Next Step" />
		                            </fieldset>
		                            <fieldset>
		                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
		                                <input type="button" name="next" class="next action-button" value="Next Step" />
		                            </fieldset>
		                            <fieldset>
		                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
		                                <input type="button" name="make_payment" class="next action-button" value="Confirm" />
		                            </fieldset>
		                             <fieldset>
		                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
		                                <input type="button" name="make_payment" class="next action-button" value="Confirm" />
		                            </fieldset>
		                            <fieldset>
		                                <div class="form-card">
		                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
		                                    <div class="row justify-content-center">
		                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
		                                    </div> <br><br>
		                                    <div class="row justify-content-center">
		                                        <div class="col-7 text-center">
		                                            <h5>You Have Successfully Signed Up</h5>
		                                        </div>
		                                    </div>
		                                </div>
		                            </fieldset>
		                        </form>
		                    </div>
		                </div>
        </div>
    </section>
		<div class="container">
		   
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