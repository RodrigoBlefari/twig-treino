<?php

require_once 'app/twigConfig.php';

class argumentosController
{
    public $twig;
    public $pagina;

    public function __construct()
    {
        $this->twigConfig = new twigConfig();
        $this->pagina = 'argumentos';
    }

    public function indexAction()
    {
        $usuario = [
            'nome' => 'Rodrigo Blefari Gonçalves',
            'idade' => 30,
            'sexo' => 'Masculino'
        ];

        $view = $this->pagina . '.html.twig';

        $template = $this->twigConfig->twig->load($view);
        echo $template->render([
            'usuario' => $usuario,
            'pagina' => $this->pagina
        ]);
    }
}
