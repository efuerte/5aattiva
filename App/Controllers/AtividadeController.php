<?php

namespace App\Controllers;

use App\Lib\Sessao;
use App\Models\DAO\atividadeDAO;
use App\Models\Entidades\atividade;
use App\Models\Validacao\atividadeValidador;

class AtividadeController extends Controller
{
    public function index()
    {
        $atividadeDAO = new atividadeDAO();

        self::setViewParam('listaatividades',$atividadeDAO->listar());

        $this->render('/atividade/index');

        Sessao::limpaMensagem();
    }

    public function cadastro()
    {
        $this->render('/atividade/cadastro');

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();
    }

    public function salvar()
    {
        $atividade = new atividade();
        $atividade->setNome($_POST['nome']);
        $atividade->setDescricao($_POST['descricao']);
        $atividade->setDataInicio($_POST['datainicio']);
        $atividade->setDataFim($_POST['datafim']);
        $atividade->setStatus($_POST['idstatus']);
        $atividade->setIdSituacao($_POST['idsituacao']);
        
        Sessao::gravaFormulario($_POST);

        $atividadeValidador = new atividadeValidador();
        $resultadoValidacao = $atividadeValidador->validar($atividade);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/atividade/cadastro');
        }

        $atividadeDAO = new atividadeDAO();

        $atividadeDAO->salvar($atividade);
        
        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/atividade');
      
    }
    
    public function edicao($params)
    {
        $id = $params[0];

        $atividadeDAO = new atividadeDAO();

        $atividade = $atividadeDAO->listar($id);

        if(!$atividade){
            Sessao::gravaMensagem("atividade inexistente");
            $this->redirect('/atividade');
        }

        self::setViewParam('atividade',$atividade);

        $this->render('/atividade/editar');

        Sessao::limpaMensagem();

    }

    public function atualizar()
    {

//        print_r("atualizar");
//        exit;


        $atividade = new atividade();
        $atividade->setId($_POST['id']);
        $atividade->setNome($_POST['nome']);
        $atividade->setDescricao($_POST['descricao']);
        $atividade->setDataInicio($_POST['datainicio']);
        $atividade->setDataFim($_POST['datafim']);
        $atividade->setStatus($_POST['idstatus']);
        $atividade->setSituacao($_POST['idsituacao']);
        
        Sessao::gravaFormulario($_POST);

        $atividadeValidador = new atividadeValidador();
        $resultadoValidacao = $atividadeValidador->validar($atividade);

        if($resultadoValidacao->getErros()){
            Sessao::gravaErro($resultadoValidacao->getErros());
            $this->redirect('/atividade/edicao/'.$_POST['id']);
        }

        $atividadeDAO = new atividadeDAO();

        $atividadeDAO->atualizar($atividade);

        Sessao::limpaFormulario();
        Sessao::limpaMensagem();
        Sessao::limpaErro();

        $this->redirect('/atividade');

    }
    
    public function exclusao($params)
    {
        $id = $params[0];

        $atividadeDAO = new atividadeDAO();

        $atividade = $atividadeDAO->listar($id);

        if(!$atividade){
            Sessao::gravaMensagem("atividade inexistente");
            $this->redirect('/atividade');
        }

        self::setViewParam('atividade',$atividade);

        $this->render('/atividade/exclusao');

        Sessao::limpaMensagem();

    }

    public function excluir()
    {
        $atividade = new atividade();
        $atividade->setId($_POST['id']);

        $atividadeDAO = new atividadeDAO();

        if(!$atividadeDAO->excluir($atividade)){
            Sessao::gravaMensagem("atividade inexistente");
            $this->redirect('/atividade');
        }

        Sessao::gravaMensagem("atividade excluido com sucesso!");

        $this->redirect('/atividade');

    }
}