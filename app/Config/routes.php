<?php

$router->any('/', 'FrontendController@index');
$router->any('plantilla', 'FrontendController@plantilla');

$router->any('credito-aprobado', 'FrontendController@creditoAprobado');
$router->any('consultar-estado', 'FrontendController@consultarEstado');
$router->any('simulacion-denegada', 'FrontendController@simulacionDenegada');
$router->any('no-cliente-aprobado', 'FrontendController@noClienteAprobado');
$router->any('no-cliente-denegado', 'FrontendController@noClienteDegenado');


$router->any('informacion-cuentas/cuentas-juridicas', 'MisCuentasController@cuentasJuridicas');
$router->any('credi-fast', 'AuthController@acceso');










// Rutas Angelo 
$router->get('simulacion', 'FrontendController@simulacion');


// Fin de rutas angelo 






$router->run();











