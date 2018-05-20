<?php

namespace App\Models\Entidades;

use DateTime;

class Produto
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;
    private $descricao;
    private $dataCadastro;

    private $idStatus;
    private $idSituacao;



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
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDataCadastro()
    {
        return new DateTime($this->dataCadastro);
    }

    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }



    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }


    public function getDataFim()
    {
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
            case 4:
                $retorno = "Concluido";
                break;
            default:
              $retorno = "Indefinido";  ;
        }
        
        return $retorno;
    }




    public function setIdStatus($idStatus)
    {
        $this->idstatus = $idStatus;
        
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