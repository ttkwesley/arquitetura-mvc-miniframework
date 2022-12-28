<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model
{
    //Metodo
    public function getInfo()
    {
        $query = "
        select 
            id, titulo, descricao
        from 
            tb_info";
        return $this->db->query($query)->fetchAll();
    }
}
