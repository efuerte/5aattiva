<?php

namespace App\Models\DAO;

use App\Models\Entidades\Produto;

class ProdutoDAO extends BaseDAO
{
    public  function listar($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM produto WHERE id = $id"
            );

            return $resultado->fetchObject(Produto::class);
        }else{
            $resultado = $this->select(
                'SELECT * FROM produto'
            );
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Produto::class);
        }

        return false;
    }

    public  function salvar(Produto $produto) 
    {
        try {

            $nome           = $produto->getNome();
            $preco          = $produto->getPreco();
            $quantidade     = $produto->getQuantidade();
            $descricao      = $produto->getDescricao();
            $dataInicio     = $produto->getDataInicio();
            $dataFim        = $produto->getDataFim();
            $idStatus       = $produto->getIdStatus();
            $idSituacao     = $produto->getIdSituacao();
            
            $dataCadastro = date('Y-m-d H:i:s');


            return $this->insert(
                'produto',
                ":nome,:preco,:quantidade,:descricao,:dataCadastro,:dataInicio,:dataFim,:idstatus,:idsituacao",
                [
                    ':nome'=>$nome,
                    ':preco'=>$preco,
                    ':quantidade'=>$quantidade,
                    ':descricao'=>$descricao,
                    
                    ':dataCadastro'=>$dataCadastro,
                    
                    ':dataInicio'=>$dataInicio,
                    ':dataFim'=>$dataFim,
                    
                    ':idstatus'=>$idStatus,
                    ':idsituacao'=>$idSituacao,
                    
                    
                ]
            );

        }catch (\Exception $e){
           
            
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public  function atualizar(Produto $produto) 
    {
        try {

            $id             = $produto->getId();
            $nome           = $produto->getNome();
//            $preco          = $produto->getPreco();
//            $quantidade     = $produto->getQuantidade();
            $descricao      = $produto->getDescricao();
            
            $datainicio = $produto->getDataInicio();
            
            $datafim = $produto->getDataFim();
            
            $idStatus = $produto->getIdStatus();
            $idSituacao = $produto->getIdSituacao();
            
            $dataCadastro = date('Y-m-d H:i:s');
            

            return $this->update(
                'produto',
                "nome = :nome, preco = :preco, quantidade = :quantidade, descricao = :descricao, datacadastro = :dataCadastro,datainicio=:datainicio, datafim =:datafim , idstatus=:idstatus, idsituacao=:idsituacao",
                [
                    ':id'=>$id,
                    ':nome'=>$nome,
                    ':preco'=>$preco,
                    ':quantidade'=>$quantidade,
                    ':descricao'=>$descricao,
                    ':dataCadastro'=>$dataCadastro,
                    ':datainicio'=>$datainicio,
                    ':datafim'=>$datafim,
                    ':idstatus'=>$idStatus,
                    ':idsituacao'=>$idSituacao,
                ],
                "id = :id"
            );


//            return $this->update(
//                'atividades',
//                ":nome,:descricao,:dataInicio,:dataFim,:idstatus,:idsituacao",
//                [
//                    ':id'=>$id,
//                    ':nome'=>$nome,
//                    ':descricao'=>$descricao,
//                    ':dataInicio'=>$dataInicio,
//                    ':dataFim'=>$dataFim,
//                    ':idstatus'=>$status,
//                    ':idsituacao'=>$situacao,
//                ],
//                "id = :id"
//            );
//


        }catch (\Exception $e){
            
            print_r($e);
            exit;
            
            
            throw new \Exception("Erro na gravação de dados.", 500);
        }
    }

    public function excluir(Produto $produto)
    {
        try {
            $id = $produto->getId();

            return $this->delete('produto',"id = $id");

        }catch (Exception $e){

            throw new \Exception("Erro ao deletar", 500);
        }
    }
    
    
    public  function listar_status($id = null)
    {
        if($id) {
            $resultado = $this->select(
                "SELECT * FROM status WHERE id = $id"
            );

            //return $resultado->fetchObject(Produto::class);
            
            return $resultado->fetchObject(Status::class);
            
            
        }else{
            $resultado = $this->select(
                'SELECT * FROM status'
            );
            //return $resultado->fetchAll(\PDO::FETCH_CLASS, Produto::class);
            
            return $resultado->fetchAll(\PDO::FETCH_CLASS, Status::class);
            
        }

        return false;
    }
    
    
    
    
}