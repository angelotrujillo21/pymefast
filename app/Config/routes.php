<?php

$router->get('admin/home', 'DashboardController@index');
$router->get('admin/mis-negocios', 'NegociosController@misNegocios');

$router->any('informacion-cuentas/cuentas-juridicas', 'MisCuentasController@cuentasJuridicas');
$router->get('credi-fast', 'AuthController@acceso');

$router->run();