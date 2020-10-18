<?php

$router->get('/', 'FrontendController@index');
$router->get('plantilla', 'FrontendController@plantilla');
$router->get('solicitud-credito', 'FrontendController@solicitudCredito');

$router->any('informacion-cuentas/cuentas-juridicas', 'MisCuentasController@cuentasJuridicas');
$router->get('credi-fast', 'AuthController@acceso');

$router->run();