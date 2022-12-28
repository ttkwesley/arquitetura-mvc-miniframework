<?php

namespace App\Controllers; //Namespace do script baseado na psr-4, conforme os diretorios

use stdClass;

//Recusos do miniFramework
use MF\Model\Container;
use MF\Controller\Action;

//Models
use App\Models\Produto;
use App\Models\Info;



class IndexController extends Action
{
    //----METODOOS----//---ACTIONS--- 
    public function index()
    {
        //$this->view->dados = array('Nootbook', 'Laptoop', 'pc de mesa');

        //Instancia de conexao do pdo 
        $produto = Container::getModel('Produto'); //Instancia do objeto 
        //Istancia do modelo 
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index', 'layout1'); //---ACTION--- 
    }

    public function sobreNos()
    {
        //Instancia de conexao do pdo 
        $info = Container::getModel('Info'); //Instancia do objeto

        //Istancia do modelo 
        $informacoes = $info->getInfo();
        $this->view->dados = $informacoes;

        $this->render('sobreNos', 'layout2'); //---ACTION--- 
    }
}
