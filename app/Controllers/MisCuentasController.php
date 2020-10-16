<?php

namespace Application\Controllers;

use Exception;
use Application\Libs\Session;
use Application\Core\Controller as Controller;

class MisCuentasController extends Controller
{

    //model principal
    public $negocios;
    public $session;
    public $users;

    public function __construct()
    {
        parent::__construct();
        $this->session  = new Session();
    }

    public function cuentasJuridicas()
    {
        try {
            $this->view(
                'intranet/cuentas-juridicas',
                array(
                    'user'               => $this->session->get('user'),
                    'menu'               => true,
                    'titulo'             => 'Cuentas Juridicas',
                    'showNotificacion'   => true
                )
            );
        } catch (Exception $ex) {
            $this->json(array("error" => $ex->getMessage()));
        }
    }

    public function salir()
    {
        $this->session->close();
        $this->redirect('admin/acceso');
    }
}
