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

            <form action="http://<?php echo APP_HOST; ?>/produto/salvar" method="post" id="form_cadastro">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control"  name="nome" placeholder="Nome da Atividade" value="<?php echo $Sessao::retornaValorFormulario('nome'); ?>" required>
                </div>

                
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="Descrição da Atividade" required><?php echo $Sessao::retornaValorFormulario('descricao'); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="nome">Data de Início</label>
                    <input type="text" class="form-control" id="datainicio" name="datainicio" placeholder="Data de Início" value="<?php echo $Sessao::retornaValorFormulario('datainicio'); ?>" required>
                </div>


                <div class="form-group">
                    <label for="nome">Data de Fim</label>
                    <input type="text" class="form-control"  id="datafim"name="datafim" placeholder="Data de Fim" value="<?php echo $Sessao::retornaValorFormulario('datafim'); ?>">
                </div>

                <!--
                <div class="form-group">
                    <label for="nome">Status</label>
                    <input type="text" class="form-control"  name="idstatus" placeholder="Status" value="<?php echo $Sessao::retornaValorFormulario('status'); ?>" required>
                </div>
                -->
                
                <?php
                    $dsn    = "mysql:dbname=5aattiva;host=localhost";
                    $user   = "root";
                    $pass   = "espiriplug";
                    
                    try {
                    
                        $dbh = new PDO($dsn, $user, $pass);
                        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                        $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                    
                        $status = $dbh->query("SELECT id, nome FROM status ORDER BY id")->fetchAll();
                    
                    } catch(PDOException $e) {
                    
                        die($e->getMessage());
                    
                    }
                ?>
                
                <label for="nome">Status</label>    
                <select name="idstatus" id="idstatus">
                    <option value="">Selecione ...</option>
                    <?php foreach ($status as $option): ?>
                    <option value="<?php echo $option->id ?>"><?php echo $option->nome ?></option>
                    <?php endforeach; ?>
                </select>
                
                <!--
                <div class="form-group">
                    <label for="nome">Status</label>
                    <?php $val = 0; ?>
                    <select name="idstatus" id="idstatus">
                        <option value="">Selecione ...</option>
                        <option value="1" <?php echo ($val == 1) ? 'selected' : null ; ?>>Pendente</option>
                        <option value="2" <?php echo ($val == 2) ? 'selected' : null ; ?>>Em Desenvolvimento</option>
                        <option value="3" <?php echo ($val == 3) ? 'selected' : null ; ?>>Em Teste</option>
                        <option value="4" <?php echo ($val == 4) ? 'selected' : null ; ?>>Concluido</option>
                    </select>
                </div>
                -->
                
                <div class="form-group">
                    <label for="nome">Situação</label>
                    <?php $val = 0; ?>
                    <select name="idsituacao" id="idsituacao">
                        <option value="">Selecione ...</option>
                        <option value="1" <?php echo ($val == 1) ? 'selected' : null ; ?>>Ativo</option>
                        <option value="2" <?php echo ($val == 2) ? 'selected' : null ; ?>>Inativo</option>
                    </select>
                </div>
                

                <button type="submit" class="btn btn-success btn-sm">Salvar</button>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	
<script type="text/javascript" >
    $(document).ready(function(){
      var date_input=$('input[name="datainicio"]'); 
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>




