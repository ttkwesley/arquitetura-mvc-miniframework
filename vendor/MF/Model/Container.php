<?php

namespace MF\Model;

use App\Connection;

class Container
{
    public static function getModel($model)
    {
        //Retornar o modelo solicitado ja instanciado e com a conexao estabelecida 
        $class = "\\App\\Models\\" . ucfirst($model); //Criar a classe de forma dinamica 
        $conn = Connection::getDb();

        return new $class($conn); //Retorna conexao 
    }
}
