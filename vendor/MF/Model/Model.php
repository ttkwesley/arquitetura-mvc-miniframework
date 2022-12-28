<?php 
namespace MF\Model; 

class Model {
    //---ATRIBUTOS--//
    protected $db; //Responsavel por receber a conexão com o banco de dados
    //--METODOS--
    public function __construct(\PDO $db) //guardar conexao
    {
        $this->db = $db;
    }
}
