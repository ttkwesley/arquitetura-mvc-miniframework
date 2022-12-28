<?php

namespace App;

use PDO;
use PDOException;

class Connection
{


    //----METODOS /-- 
    public static function getDb()
    {
        try { //Tentativa de conexao
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8", //Conexao
                "root", //usuario
                "" //senha
            );
            return $conn;
        } catch (\PDOException $e) { //tratamento de erro
            echo ('Erro:') . $e;
        }
    }
}
