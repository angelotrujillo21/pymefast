<?php

namespace Application\Controllers;

use Exception;
use Application\Libs\Session;
use Application\Core\Controller as Controller;

class AuthController extends Controller
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

    public function acceso()
    {
        try {
            $this->view(
                'intranet/login',
                array(
                    'user'               => $this->session->get('user'),
                    'menu'               => true,
                    'titulo'             => 'Home',
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
