<?php

namespace App\Models\Validacao;

use \App\Models\Validacao\ResultadoValidacao;
use \App\Models\Entidades\Atividade;

class AtividadeValidador{

    public function validar(Atividade $atividade)
    {
        $resultadoValidacao = new ResultadoValidacao();

        if(empty($atividade->getNome()))
        {
            $resultadoValidacao->addErro('nome',"Nome: Este campo não pode ser vazio");
        }
        
//        if(empty($atividade->getDescricao()))
//        {
//            $resultadoValidacao->addErro('descricao',"Descrição: Este campo não pode ser vazio");
//        }

//        if(empty($atividade->getDataInicio()))
//        {
//            $resultadoValidacao->addErro('datainicio',"Data de Inicio: Este campo não pode ser vazio");
//        }

        if(empty($atividade->getIdStatus()))
        {
            $resultadoValidacao->addErro('status',"Status: Este campo não pode ser vazio");
        }

        if(empty($atividade->getIdSituacao()))
        {
            $resultadoValidacao->addErro('situacao',"Descrição: Este campo não pode ser vazio");
        }

        return $resultadoValidacao;
    }
}