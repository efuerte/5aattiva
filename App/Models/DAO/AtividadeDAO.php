<?php

namespace App\Models\DAO;

use App\Models\Entidades\Atividade;

class AtividadeDAO extends BaseDAO
{
    public  function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM atividades WHERE id = $id"
            );

            return $resultado->fetchObject(Atividade::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM atividades'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Atividade::class);
        }

        return false;
    }

    public  function salvar(Atividade $atividade) 
    {
        try {


 //           print_r('001');
//            exit;


            $nome           = $atividade->getNome();
            $descricao      = $atividade->getDescricao();
            $dataInicio     = $atividade->getDataInicio();
            $dataFim        = $atividade->getDataFim();
            $status         = $atividade->getIdStatus();
            $situacao       = $atividade->getIdSituacao();
    
    
 //           print_r($dataInicio);
//            exit;
    
    
    
            return $this->insert(
                'atividades',
                ":nome,:descricao,:dataInicio,:dataFim,:idstatus,:idsituacao",
                [
                    ':nome'=>$nome,
                    ':descricao'=>$descricao,
                    ':dataInicio'=>$dataInicio,
                    ':dataFim'=>$dataFim,
                    ':idstatus'=>$status,
                    ':idsituacao'=>$situacao
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Atividade $atividade) 
    {
        try {

            $id             = $atividade->getId();
            
            //$id = (int)$id;
            
            
            
            
            
//            print_r($id);
//            exit;
//            
            
            
            
            $nome           = $atividade->getNome();
            $descricao      = $atividade->getDescricao();
            
            $dataInicio     = $atividade->getDataInicio();
            $dataFim        = $atividade->getDataFim();

//            $dataInicio     =  date('Y-m-d',$dataInicio);
//            $dataFim        = date('Y-m-d',$dataFim);
//
            $status         = $atividade->getIdStatus();
            $situacao       = $atividade->getIdSituacao();

//            print_r($dataInicio) ."<br>";
//            print_r($dataFim)."<br>";
//            print_r($status)."<br>";
//            print_r($situacao)."<br>";
//            
//            
//            exit;
//            

            return $this->update(
                'atividades',
                ":nome,:descricao,:dataInicio,:dataFim,:idstatus,:idsituacao",
                [
                    ':id'=>$id,
                    ':nome'=>$nome,
                    ':descricao'=>$descricao,
                    ':dataInicio'=>$dataInicio,
                    ':dataFim'=>$dataFim,
                    ':idstatus'=>$status,
                    ':idsituacao'=>$situacao,
                ],
                "id = :id"
            );

        }catch (\Exception $e){
            
            print_r($e);
            die;
            
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Atividade $atividade)
    {
        try {
            $id = $atividade->getId();

            return $this->delete('atividades',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar", 500);
        }
    }
}