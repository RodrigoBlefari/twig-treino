<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require 'vendor/autoload.php';

class Routes
{

    private $pagina;
    private $loader;
    private $twig;

    function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem('./views/');
        $this->twig = new Twig_Environment($this->loader, [
            'cache' => 'views/cache/',
            'cache' => false
        ]);
        $this->pagina = 'home';
        if (array_key_exists('pg', $_REQUEST)) $this->pagina = $_REQUEST['pg'];
        $this->redirectUrl();
    }

    public function redirectUrl()
    {

        if ($this->pagina == '') $this->goHome();
        if ($this->pagina == 'home') $this->goHome();
        if ($this->pagina == 'vars') $this->goVars();
        if ($this->pagina == 'array') $this->goArray();
    }

    private function goHome()
    {

        $usuarios = [
            [
                'nome' => 'Rodrigo Blefari Gonçalves',
                'idade' => 30,
                'sexo' => 'Masculino'
            ],
            [
                'nome' => 'Maria Joaquina',
                'idade' => 25,
                'sexo' => 'Feminino'
            ]
        ];

        $view = 'home.html.twig';

        $template = $this->twig->load($view);
        echo $template->render([
            'usuarios' => $usuarios,
            'pagina' =>$this->pagina
        ]);
    }

    private function goVars()
    {

        $usuarios = [
            [
                'nome' => 'Rodrigo Blefari Gonçalves',
                'idade' => 30,
                'sexo' => 'Masculino'
            ],
            [
                'nome' => 'Maria Joaquina',
                'idade' => 25,
                'sexo' => 'Feminino'
            ]
        ];

        $view = 'variables.html.twig';

        $template = $this->twig->load($view);
        echo $template->render([
            'usuarios' => $usuarios,
            'pagina' =>$this->pagina
        ]);
    }

    private function goArrays()
    {

        $usuarios = [
            [
                'nome' => 'Rodrigo Blefari Gonçalves',
                'idade' => 30,
                'sexo' => 'Masculino'
            ],
            [
                'nome' => 'Maria Joaquina',
                'idade' => 25,
                'sexo' => 'Feminino'
            ]
        ];

        $view = 'array.html.twig';

        $template = $this->twig->load($view);
        echo $template->render([
            'usuarios' => $usuarios,
            'pagina' =>$this->pagina
        ]);
    }
}
