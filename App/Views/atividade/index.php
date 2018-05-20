<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/atividade/cadastro" class="btn btn-success btn-sm">Adicionar</a>
        <hr>
    </div>
    <div class="col-md-12">
        <?php if($Sessao::retornaMensagem()){ ?>
            <div class="alert alert-warning" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $Sessao::retornaMensagem(); ?>
            </div>
        <?php } ?>

        <?php
            if(!count($viewVar['listaatividades'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhuma atividade encontrada</div>
        <?php
            } else {
        ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Nome</td>
                        <td class="info">Descrição</td>
                        <td class="info">Data de Início</td>
                        <td class="info">Data de Fim</td>
                        <td class="info">Status</td>
                        <td class="info">Situação</td>
                        <td class="info"></td>
                    </tr>
                    <?php
                        foreach($viewVar['listaatividades'] as $atividade) {
                    ?>
                        <tr>
                            <td><?php echo $atividade->getNome(); ?></td>
                            <td><?php echo $atividade->getDescricao(); ?></td>
                            <td><?php echo $atividade->getDataInicio(); ?></td>
                            <td><?php echo $atividade->getDataFim(); ?></td>
                            <td><?php echo $atividade->getIdStatus(); ?></td>
                            <td><?php echo $atividade->getIdSituacao(); ?></td>
                            
                            <td>
                                <a href="http://<?php echo APP_HOST; ?>/atividade/edicao/<?php echo $atividade->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                <a href="http://<?php echo APP_HOST; ?>/atividade/exclusao/<?php echo $atividade->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        <?php
            }
        ?>
    </div>
</div>
</div>