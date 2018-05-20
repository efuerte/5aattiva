<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Cadastro de Atividades</h3>
            
            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/atividade/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome da Atividade" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="nome">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="Descrição da Atividade" required><?php echo $Sessao::retornaValorFormulario('descricao'); ?> </textarea>
                </div>

                <div class="form-group">
                    <label for="nome">Data de Início</label>
                    <input type="text" class="form-control"  name="datainicio" placeholder="Data de Início" value="<?php echo $Sessao::retornaValorFormulario('datainicio'); ?>" required>
                </div>

                <div class="form-group">
                    <label for="nome">Data de Fim</label>
                    <input type="text" class="form-control"  name="datafim" placeholder="Data de Fim" value="<?php echo $Sessao::retornaValorFormulario('datafim'); ?>">
                </div>

                <div class="form-group">
                    <label for="nome">Status</label>
                    <input type="text" class="form-control"  name="idstatus" placeholder="Status" value="<?php echo $Sessao::retornaValorFormulario('status'); ?>" required>
                </div>


                <div class="form-group">
                    <label for="nome">Situação</label>
                    <input type="text" class="form-control"  name="idsituacao" placeholder="Situação" value="<?php echo $Sessao::retornaValorFormulario('situacao'); ?>" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>