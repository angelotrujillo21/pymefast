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
                    <input type="text" class="form-control d-block input-simulador" placeholder="RUC">
                    <div class="w-100 flex-center my-3">
                        <button id="btn-simular" class="btn btn-simular-flujo btn-block font-weight-bold">Validar Datos</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


	<section class="page-section seccion-2 text-black mb-0 container-flujo"  id="seccion2"  style="height: 800px !important;" >
		<div class="container-fluid mt-1">
			<div>
				<img class="d-inline" src="<?= src('multi/bullet.svg') ?>" alt="">
				<p class="font-weight-bold p-0 my-2 d-inline">SOLICITUD DE CREDITOS</p>
			</div>
			<div class="row">
				<div class="col-md-12 mx-0">
					<form id="msform">
						<!-- progressbar -->
						<ul id="progressbar">
							<li class="active" id="step1"><strong>Expediente crediticio</strong></li>
							<li id="step2"><strong>Validación de documentos</strong></li>
							<li id="step3"><strong>Central de riesgos</strong></li>
							<li id="step4"><strong>Gestor de desembolso</strong></li>
						</ul> <!-- fieldsets -->
						<fieldset>
							<div class="container">
								<!--  Grid Items-->
								<div class="row">
									<div class="col-lg ml-auto bg-seccion2">
										<h5 class="text-left">
											Adjunta los Siguientes documentos.
										</h5>
										<div class="row">
											<div class="col text-right">
												<div class="w-100"></div>
												<img src="<?= src('multi/bullet.svg') ?>" alt="">

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												Copia DNI empleados y representante.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<span class="material-icons icon-clip"> attach_file </span>

											</div>
										</div>
										<div class="row">
											<div class="col text-right">
												<div class="w-100"></div>
												<img src="<?= src('multi/bullet.svg') ?>" alt="">

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												Recibo de agua o luz.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<span class="material-icons icon-clip"> attach_file </span>

											</div>
										</div>
										<div class="row">
											<div class="col text-right">
												<div class="w-100"></div>
												<img src="<?= src('multi/bullet.svg') ?>" alt="">

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												Hoja de resumen.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<span class="material-icons icon-clip"> attach_file </span>

											</div>
										</div>
										<div class="row">
											<div class="col text-right">
												<div class="w-100"></div>
												<img src="<?= src('multi/bullet.svg') ?>" alt="">

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												Predio urbano.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<span class="material-icons icon-clip"> attach_file </span>

											</div>
										</div>

									</div>
								</div>
								<div class="row justify-content-center">
									<div class="col-lg-6 bg-seccion2">
										<h5 class="text-left">
											Carga de documentos.
										</h5>
										<div class="row">
											<div class="col text-left">
												<div class="w-100"></div>
												<p class="m-0">Copia(s) DNI.</p>
											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<div class="linea"></div>
												<span class="font-weight-bold"> 23% </span>
											</div>
										</div>
										<div class="row">

											<div class="col text-left">
												<div class="w-100"></div>
												Recibo de agua o luz.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<div class="w-100"></div>
												<div class="linea"></div>

											</div>
										</div>
										<div class="row">

											<div class="col text-left">
												<div class="w-100"></div>
												Hoja de resumen.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<div class="w-100"></div>
												<div class="linea"></div>

											</div>
										</div>
										<div class="row">

											<div class="col text-left">
												<div class="w-100"></div>
												Predio urbano.

											</div>
											<div class="col text-left">
												<div class="w-100"></div>
												<div class="w-100"></div>
												<div class="linea"></div>

											</div>
										</div>

									</div>
								</div>
							</div>
							<button type="button" id="btn-sgt" class=" btn-simular-flujo w-200">Siguiente </button>
						</fieldset>

					</form>
				</div>
			</div>
		</div>
	</section>


	<div id="seccion3" class="container-flujo" style="height: 800px !important;">
        <div class="container">
            <div class="w-100 my-2">
                <img class="d-inline" src="<?= src('multi/bullet.svg') ?>" alt="">
                <p class="p-0 font-weight-bold d-inline">SIMULADOR DE CREDITO</p>
            </div>

            <div class="flex-center mt-lg-5 mt-0">
                <div class="text-center w-100">

                    <h1 class="font-weight-bold">Desembolso de monto no aprobado</h1>
                    <span class="material-icons icon-check "> create_new_folder </span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 ml-auto bg-seccion2">
                    <div class="p-0 p-lg-3">
                        <h2 class="font-weight-bold">
                        Sugerencias personalizadas para tu próxima simulación.
                        </h2>
                      
                    </div>
                </div>
                <div class="col-lg-8 ml-auto bg-seccion2">
                    <div class="row no-gutters">
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2"> APERTURA TU CUENTA EMPRESARIAL DIGITALMENTE </p>
                   
                        </div>
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2">CANALIZA MÁS NUEVOS CLIENTES Y FLUJO DE VENTAS </p>
                           
                        </div>
                        <div class="col-lg-4 ml-auto bg-seccion2">
                            <img src="<?= src('multi/bullet.svg') ?>" alt="">
                            <div class="w-100"></div>
                            <p class="font-weight-bold p-0 my-2">UTILIZA PLATAFORMAS DIGITALES DEL BANCO</p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-20 flex-center my-3">
                <button class="btn btn-simular-flujo mx-2 font-weight-bold w-200">Aceptar</button>
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
        $("#seccion3").hide();

        $("#btn-simular").click(function(){
            $("#seccion1").hide();
			$("#seccion3").hide();
            $("#seccion2").show();
        });

		$("#btn-sgt").click(function(){
            $("#seccion3").show();
			$("#seccion2").hide();
            $("#seccion1").hide();
        });		
    });
</script>


</html>