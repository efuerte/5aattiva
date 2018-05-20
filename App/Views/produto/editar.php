<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

            <h3>Editar Produto</h3>

            <?php if($Sessao::retornaErro()){ ?>
                <div class="alert alert-warning" role="alert">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php foreach($Sessao::retornaErro() as $key => $mensagem){ ?>
                        <?php echo $mensagem; ?> <br>
                    <?php } ?>
                </div>
            <?php } ?>

            <form action="http://<?php echo APP_HOST; ?>/produto/atualizar" method="post" id="form_cadastro">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $viewVar['produto']->getId(); ?>">

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text"  class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $viewVar['produto']->getNome(); ?>" required>
                </div>

                <!--                
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text"  class="form-control"  name="preco" id="preco" placeholder="" value="<?php echo $viewVar['produto']->getPreco(); ?>" required>
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade</label>
                    <input type="number"  class="form-control"  name="quantidade" id="quantidade" placeholder="" value="<?php echo $viewVar['produto']->getQuantidade(); ?>" required>
                </div>
                -->
                
                <div class="form-group">
                    <label for="quantidade">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="Descrição do produto" required><?php echo $viewVar['produto']->getDescricao(); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="nome">Data de Início</label>
                    <input type="text" class="form-control"  name="datainicio" placeholder="Data de Início" value="<?php echo $viewVar['produto']->getDataInicio();  ?>" required>
                </div>

                <div class="form-group">
                    <label for="nome">Data de Fim</label>
                    <input type="text" class="form-control"  name="datafim" placeholder="Data de Fim" value="<?php echo $viewVar['produto']->getDataFim(); ?>">
                </div>

                <!--
                <div class="form-group">
                    <label for="nome">Status</label>
                    <input type="text" class="form-control"  name="idstatus" placeholder="Status" value="<?php echo $viewVar['produto']->getIdStatus(); ?>" required>
                </div>
                -->
                
                <div class="form-group">
                    <label for="nome">Status</label>
                    <?php $val = $viewVar['produto']->getIdStatus(); ?>
                    <select name="idstatus" id="idstatus">
                        <option value="">Selecione ...</option>
                        <option value="1" <?php echo ($val == 1) ? 'selected' : null ; ?>>Pendente</option>
                        <option value="2" <?php echo ($val == 2) ? 'selected' : null ; ?>>Em Desenvolvimento</option>
                        <option value="3" <?php echo ($val == 3) ? 'selected' : null ; ?>>Em Teste</option>
                        <option value="4" <?php echo ($val == 4) ? 'selected' : null ; ?>>Concluido</option>
                    </select>
                </div>

                <!--                    
                <div class="form-group">
                    <label for="nome">Situação</label>
                    <input type="text" class="form-control"  name="idsituacao" placeholder="Situação" value="<?php echo $viewVar['produto']->getIdSituacao(); ?>" required>
                </div>
                -->
                <div class="form-group">
                    <label for="nome">Situação</label>
                    <?php $val = $viewVar['produto']->getIdSituacao(); ?>
                    <select name="idsituacao" id="idsituacao">
                        <option value="">Selecione ...</option>
                        <option value="1" <?php echo ($val == 1) ? 'selected' : null ; ?>>Ativo</option>
                        <option value="2" <?php echo ($val == 2) ? 'selected' : null ; ?>>Inativo</option>
                    </select>
                </div>


                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                <a href="http://<?php echo APP_HOST; ?>/produto" class="btn btn-info btn-sm">Voltar</a>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>
