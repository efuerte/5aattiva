<?php

namespace App\Models\DAO;

use App\Lib\Conexao;

abstract class BaseDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    public function select($sql) 
    {
        if(!empty($sql))
        {
            return $this->conexao->query($sql);
        }
    }

    public function insert($table, $cols, $values) 
    {
        if(!empty($table) && !empty($cols) && !empty($values))
        {
            $parametros    = $cols;
            $colunas       = str_replace(":", "", $cols);
            
            $stmt = $this->conexao->prepare("INSERT INTO $table ($colunas) VALUES ($parametros)");

             foreach ( $values as $key=>$value ) 
             {
    
                  if (strpos($value,'/'))
                  {
                        $value = substr($value,6,4)."-".substr($value,3,2)."-".substr($value,0,2);
                        $values[$key] = $value;       
                     }  
              }
    
            $stmt->execute($values);

            return $stmt->rowCount();

        }else{
            return false;
        }
    }

    public function update($table, $cols, $values, $where=null) 
    {
        if(!empty($table) && !empty($cols) && !empty($values))
        {
            if($where)
            {
                $where = " WHERE $where ";
            }

            $stmt = $this->conexao->prepare("UPDATE $table SET $cols $where");
            $stmt->execute($values);

            return $stmt->rowCount();
        }else{
            return false;
        }
    }
    
    public function delete($table, $where=null) 
    {
        if(!empty($table))
        {
            /*
                DELETE usuario WHERE id = 1
            */

            if($where)
            {
                $where = " WHERE $where ";
            }

            $stmt = $this->conexao->prepare("DELETE FROM $table $where");
            $stmt->execute();

            return $stmt->rowCount();
        }else{
            return false;
        }
    }
}