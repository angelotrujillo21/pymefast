<?php

namespace Application\Controllers;

use Exception;
use Application\Libs\Session;
use Application\Models\Negocios;
use Application\Models\CatalogoTabla;
use Application\Core\Controller as Controller;
use Application\Models\Empleados;

class DashboardController extends Controller
{

    //model principal
    public $negocios;
    public $session;
    public $catalogoTabla;
    public $empleados;

    public $users;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        try {

            $this->view(
                'frontend/home',
                array(
                    'menu'               => true,
                    'titulo'             => 'Home',
                    'showNotificacion'   => true
                )
            );
        } catch (Exception $ex) {
            $this->json(array("error" => $ex->getMessage()));
        }
    }
}
