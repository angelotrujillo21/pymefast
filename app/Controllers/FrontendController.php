<?php

namespace Application\Controllers;

use Exception;
use Application\Libs\Session;
use Application\Models\Negocios;
use Application\Models\CatalogoTabla;
use Application\Core\Controller as Controller;
use Application\Models\Empleados;

class FrontendController extends Controller
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
                'frontend/index',
                array(
                    'titulo' => 'Home'
                )
            );
        } catch (Exception $ex) {
            $this->json(array("error" => $ex->getMessage()));
        }
    }

    public function plantilla()
    {
        try {

            $this->view(
                'frontend/plantilla',
                array(
                    'titulo' => 'Plantilla'
                )
            );
        } catch (Exception $ex) {
            $this->json(array("error" => $ex->getMessage()));
        }
    }

     public function solicitudCredito()
    {
        try {

            $this->view(
                'frontend/solicitud-credito',
                array(
                    'titulo' => 'Solicitud Credito'
                )
            );
        } catch (Exception $ex) {
            $this->json(array("error" => $ex->getMessage()));
        }
    }
}
