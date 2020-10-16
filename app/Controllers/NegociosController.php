<?php

namespace Application\Controllers;

use Exception;
use Application\Libs\Upload;
use Application\Libs\Session;
use Application\Models\Negocios;
use Application\Models\Entidades;
use Application\Models\CatalogoTabla;
use Application\Core\Controller as Controller;

class NegociosController extends Controller
{

    //model principal
    public $negocios;
    public $session;
    public $entidades;
    public $catalogoTabla;
    public $users;

    public function __construct()
    {
        parent::__construct();
        $this->session = new Session();
    }

    public function misNegocios()
    {
        try {
            $this->view(
                'frontend/mis-negocios',
                array(
                    'user'                   => $this->session->get('user'),
                    'menu'                   => false,
                    'showNotificacion'       => false,
                    'titulo'                 => 'Mis Negocios'
                )
            );
        } catch (Exception $ex) {
            $this->json(array("error" => $ex->getMessage()));
        }
    }
}
