<?php

$router->get('admin/home', 'DashboardController@index');
$router->get('admin/mis-negocios', 'NegociosController@misNegocios');
$router->get('admin', 'LoginAdminController@acceso');

$router->run();