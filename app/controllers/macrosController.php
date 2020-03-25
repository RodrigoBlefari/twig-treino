<?php

require_once 'app/twigConfig.php';

class macrosController
{
    public $twig;
    public $pagina;

    public function __construct()
    {
        $this->twigConfig = new twigConfig();
        $this->pagina = 'filtros';
    }

    public function indexAction()
    {
        $usuario = [
            'nome' => '<h1> rodrigo blefari gonçalves </h1>',
            'idade' => 30,
            'sexo' => 'masculino',
        ];

        $view = $this->pagina . '.html.twig';

        $template = $this->twigConfig->twig->load($view);
        echo $template->render([
            'usuario' => $usuario,
            'pagina' => $this->pagina
        ]);
    }
}
