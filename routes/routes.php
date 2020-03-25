<?php

error_reporting(-1);
ini_set('display_errors', 'On');

//require 'vendor/autoload.php';

require 'app/controllers/homeController.php';
require 'app/controllers/variaveisController.php';
require 'app/controllers/filtrosController.php';
require 'app/controllers/funcoesController.php';
require 'app/controllers/argumentosController.php';
require 'app/controllers/estruturaController.php';
require 'app/controllers/comentariosController.php';
require 'app/controllers/modelosController.php';
require 'app/controllers/herancaController.php';
require 'app/controllers/escapamentoController.php';
require 'app/controllers/macrosController.php';
require 'app/controllers/expressoesController.php';
require 'app/controllers/comparacoesController.php';
require 'app/controllers/operadorController.php';

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

        if ($this->pagina == 'argumentos') $this->goArgumentos();
        if ($this->pagina == 'estrutura') $this->goEstrutura();
        if ($this->pagina == 'comentarios') $this->goComentarios();
        if ($this->pagina == 'modelos') $this->goModelos();
        if ($this->pagina == 'heranca') $this->goHeranca();
        if ($this->pagina == 'escapamento') $this->goEscapamento();
        if ($this->pagina == 'macros') $this->goMacros();
        if ($this->pagina == 'expressoes') $this->goMacros();
        if ($this->pagina == 'comparacoes') $this->goExpressoes();
        if ($this->pagina == 'operador') $this->goComparacoes();
        if ($this->pagina == 'controle') $this->goOperador();
        
    }

    private function goHome(){(new homeController())->indexAction();}
    private function goVariaveis(){(new variaveisController())->indexAction();}
    private function goFiltros(){(new filtrosController())->indexAction();}
    private function goFuncoes(){(new funcoesController())->indexAction();}
    private function goArgumentos(){(new argumentosController())->indexAction();}
    private function goEstrutura(){(new estruturaController())->indexAction();}
    private function goComentarios(){(new comentariosController())->indexAction();}
    private function goModelos(){(new modelosController())->indexAction();}
    private function goHeranca(){(new herancaController())->indexAction();}
    private function goEscapamento(){(new escapamentoController())->indexAction();}
    private function goMacros(){(new macrosController())->indexAction();}
    private function goExpressoes(){(new expressoesController())->indexAction();}
    private function goComparacoes(){(new comparacoesController())->indexAction();}
    private function goOperador(){(new operadorController())->indexAction();}
    
}