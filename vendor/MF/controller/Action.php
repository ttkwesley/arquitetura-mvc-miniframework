<?php

namespace MF\Controller;

use stdClass;

abstract class action
{
    //----ATRIBUTOS --- 
    protected $view;

    //--METODOS --- 
    public function __construct()
    {
        $this->view = new stdClass();
    }
    protected function render($view, $layout) //Reenderização do conteudo
    {
        $this->view->page = $view;

        if (file_exists("../app/Views/" . $layout . ".phtml")) {
            require_once "../app/Views/" . $layout . ".phtml";
        } else {
            $this->content();
        }
    }
    protected function content() //Conteudo
    {
        $classAltual = get_class($this);
        $classAltual = str_replace('App\\Controllers\\', '', $classAltual);
        $classAltual = strtolower(str_replace('Controller', '', $classAltual));

        require_once "../app/Views/" . $classAltual . "/" . $this->view->page . ".phtml"; //requisição para a recuperação
    }
}
