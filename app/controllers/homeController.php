<?php

require_once 'app/twigConfig.php';

class homeController
{
    public $twig;
    public $pagina;

    public function __construct()
    {
        $this->twigConfig = new twigConfig();
        $this->pagina = 'home';
        if (array_key_exists('pg', $_REQUEST)) $this->pagina = $_REQUEST['pg'];
    }

    public function indexAction()
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

        $view = $this->pagina . '.html.twig';

        $template = $this->twigConfig->twig->load($view);
        echo $template->render([
            'usuarios' => $usuarios,
            'pagina' => $this->pagina
        ]);
    }
}
