<?php
    require_once 'vendor/autoload.php';

    class twigConfig 
    {   
        public $loader;
        public $twig;
    
        function __construct()
        {
            $this->loader = new Twig_Loader_Filesystem('./app/views/');
            $this->twig = new Twig_Environment($this->loader, [
                'cache' => 'views/cache/',
                'cache' => false
            ]);
        }
    
    }