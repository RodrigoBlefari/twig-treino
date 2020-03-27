<?php

require_once 'app/twigConfig.php';

class estruturaController
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
            ['nome' => 'rodrigo blefari gonçalves'],
            ['nome' => 'maria joana'],
            ['nome' => 'josué souza'],
        ];

        $view = $this->pagina . '.html.twig';

        $template = $this->twigConfig->twig->load($view);
        echo $template->render([
            'usuarios' => $usuarios,
            'pagina' => $this->pagina
        ]);
    }
}
