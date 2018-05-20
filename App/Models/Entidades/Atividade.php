<?php

namespace App\Models\Entidades;

use DateTime;

class Atividade
{
    private $id;
    private $nome;
    private $descricao;
    private $dataInicio;
    private $dataFim;
    private $Status;
    private $Situacao;
    
    private $quantidade;
    
    private $dataCadastro;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        
//        print_r($this->nome);
//die;
        
        
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDataInicio()
    {
        //return new DateTime($this->dataInicio);
        return $this->dataInicio;
        
    }

    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    public function getDataFim()
    {
        //return new DateTime($this->dataFim);
        return $this->dataFim;

    }

    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;
    }
    
   public function getIdStatus()
    {
        return $this->idstatus;
    }

 public function getIdStatus_literal()
    {
        
        $retorno="";
        
        switch ($this->idstatus) {
            case 1:
                $retorno = "Pendente";
                break;
            case 2:
                $retorno = "Em Desenvolvimento";
                break;
            case 3:
                $retorno = "Em Teste";
                break;
            default:
              $retorno = "Indefinido";  ;
        }
        
        return $retorno;
    }



    public function setStatus($status)
    {
        $this->status = $status;
    }
  
   public function getIdSituacao()
    {
        return $this->idsituacao;
    }

    public function setIdSituacao($idSituacao)
    {
        $this->idsituacao = $idSituacao;
    }   

    public function getIdSituacao_literal()
    {
        
        $retorno="";
        
        switch ($this->idsituacao) {
            case 1:
                $retorno = "Ativo";
                break;
            case 2:
                $retorno = "Inativo";
                break;
            default:
              $retorno = "Indefinido";  ;
        }
        
        return $retorno;
    }    



}