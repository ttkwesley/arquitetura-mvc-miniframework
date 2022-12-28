<?php
//Definição das rotas
namespace App;

//Abstração das classe de routes
use MF\Init\Bootstrap;

class Route extends Bootstrap
{
    //Rotas que possui a aplicação 
    protected function initRoutes()
    {
        $routes['home'] = array(
            'route' => '/', //Rota a ser redirecionada
            'controller' => 'indexController', //Controler responsavel
            'action' => 'index'  //Ação a ser tomada
        );

        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos', //Rota direcionada
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );
        $this->setRoutes($routes);
    }
}
