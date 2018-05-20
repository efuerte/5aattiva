<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <h3>Editar Atividade</h3>

            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo 'XXX' . $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/atividade/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['atividade']->getId(); ?>">

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['atividade']->getNome(); ?>" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="Descrição da atividade" required><?php echo $viewVar['atividade']->getDescricao(); ?></textarea>
                </div>


                <div class="form-group">
                    <label for="descricao">Data de Início</label>
                    <input type="text"  class="form-control" name="datainicio" id="datainicio" placeholder="" value="<?php echo $viewVar['atividade']->getDataInicio(); ?>" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Data Final</label>
                    <input type="text"  class="form-control" name="datafim" id="datafim" placeholder="" value="<?php echo $viewVar['atividade']->getDataFim(); ?>" >
                </div>

                <div class="form-group">
                    <label for="descricao">Status</label>
                    <input type="text"  class="form-control" name="status" id="idstatus" placeholder="" value="<?php echo $viewVar['atividade']->getStatus(); ?>" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Situação</label>
                    <input type="text"  class="form-control" name="situacao" id="idsituacao" placeholder="" value="<?php echo $viewVar['atividade']->getSituacao(); ?>" required>
                </div>


                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="http://<?php echo APP_HOST; ?>/atividade" class="btn btn-info btn-sm">Voltar</a>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>
