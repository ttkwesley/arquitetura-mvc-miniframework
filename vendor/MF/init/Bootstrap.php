<?php

namespace MF\Init;

abstract class Bootstrap
{
    // ---ATRIBUTOS ---- 
    private $routes;

    // --METODOS -- 
    abstract protected function initRoutes();
    public function __construct() //Executa os metodos apartir do momento que a classe é instanciada
    {
        $this->initRoutes(); // Inicialização das rotas
        $this->run($this->getUrl()); // 
    }
    //recuperação
    public function getRoutes()
    {
        return $this->routes;
    }
    //setagem
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }
    //Executando a instancia de forma dinamica 
    protected function run($url)
    {
        foreach ($this->getRoutes() as $key => $route) {
            if ($url == $route['route']) { // Verifica se a url é igual a rota recuperada
                $class = "App\\Controllers\\" . ucfirst($route['controller']); //
                $controller = new $class; //
                $action = $route['action'];
                $controller->$action();
            }
        }
    }
    //Recupera a url que está o usuario 
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //Retorna apenas o path da uri 
    }
}
