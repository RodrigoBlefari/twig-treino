<?php

error_reporting(-1);
ini_set('display_errors', 'On');

//require 'vendor/autoload.php';

require 'app/controllers/homeController.php';
require 'app/controllers/variaveisController.php';
require 'app/controllers/filtrosController.php';
require 'app/controllers/funcoesController.php';

class Routes
{
    private $pagina;

    function __construct()
    {
        $this->pagina = 'home';
        if (array_key_exists('pg', $_REQUEST)) $this->pagina = $_REQUEST['pg'];
        $this->redirectUrl();
    }

    public function redirectUrl()
    {
        if (($this->pagina == 'home') || ($this->pagina == '')) $this->goHome();
        if ($this->pagina == 'variaveis') $this->goVariaveis();
        if ($this->pagina == 'filtros') $this->goFiltros();
        if ($this->pagina == 'funcoes') $this->goFuncoes();
    }

    //Home
    private function goHome(){(new homeController())->indexAction();}
    //Vars
    private function goVariaveis(){(new variaveisController())->indexAction();}
    //Filtros
    private function goFiltros(){(new filtrosController())->indexAction();}
    //Filtros
    private function goFuncoes(){(new funcoesController())->indexAction();}
}
