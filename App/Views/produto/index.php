<script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>


<div class="container">
    <div class="row">
    <br>
    <div class="col-md-12">
        <a href="http://<?php echo APP_HOST; ?>/produto/cadastro" class="btn btn-success btn-sm">Adicionar</a>
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
            if(!count($viewVar['listaProdutos'])){
        ?>
            <div class="alert alert-info" role="alert">Nenhum produto encontrado</div>
        <?php
            } else {
        ?>
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="info">Nome</td>
                        <!--
                        <td class="info">Preço</td>
                        <td class="info">Quantidade</td>
                        <td class="info">Data Cadastro</td>
                        -->
                        <td class="info">Descrição</td>
                        
                        <td class="info">Data de Início</td>
                        <td class="info">Data de Fim</td>
                        
                        <td class="info">Status</td>
                        <td class="info">Situação</td>
                        
                        <td class="info"></td>
                    </tr>
                    <?php
                        foreach($viewVar['listaProdutos'] as $produto) {
                    ?>
                    
                        <!--td class="status_info"-->
                            <tr>
                                <td><?php echo $produto->getNome(); ?></td>
                            
                                <!--    
                                <td>R$ <?php echo $produto->getPreco(); ?></td>
                                <td><?php echo $produto->getQuantidade(); ?></td>
                                <td><?php echo $produto->getDataCadastro()->format('d/m/Y'); ?></td>
                                -->    
                                
                                <td><?php echo $produto->getDescricao(); ?></td>
                                <td><?php echo $produto->getDataInicio(); ?></td>
                                <td><?php echo $produto->getDataFim(); ?></td>
                                
                                <td><?php echo $produto->getIdStatus_literal(); ?></td>
                                <td><?php echo $produto->getIdSituacao_literal(); ?></td>
                            
                                <td>
                                    <a href="http://<?php echo APP_HOST; ?>/produto/edicao/<?php echo $produto->getId(); ?>" class="btn btn-info btn-sm">Editar</a>
                                    <a href="http://<?php echo APP_HOST; ?>/produto/exclusao/<?php echo $produto->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        <!--/td-->
                        
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




<script>
$(document).ready(function(){
    $(".status_info").css("color","green");
});
</script>
