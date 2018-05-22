<html><head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/result-light.css">
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">  
  <style type="text/css">
  </style>
  <title></title>
  
  
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
                  	<input class="form-control" id="datainicio" name="datainicio" placeholder="Data de Início" value="<?php echo $Sessao::retornaValorFormulario('datainicio'); ?>" required="" type="text">
                    <!--
                    <input type="text" class="form-control" id="datainicio" name="datainicio" placeholder="Data de Início" value="<?php echo $Sessao::retornaValorFormulario('datainicio'); ?>" required>
                    -->                        
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
                
<!--                
        define('PATH'           , realpath('./'));
        define('TITLE'          , "Cadastro de Atividades - 5A Attiva");
        define('DB_HOST'        , "localhost");
        define('DB_USER'        , "root");
        define('DB_PASSWORD'    , "espiriplug"); // Sua senha
        define('DB_NAME'        , "5aattiva");
        define('DB_DRIVER'      , "mysql");
-->                
                
                
                
                <?php
                    $dsn    = "mysql:dbname=5aattiva;host=localhost";
                    
                    $user   = DB_USER;
                    $pass   = DB_PASSWORD;
                    
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
                <a href="http://<?php echo APP_HOST; ?>/produto" class="btn btn-info btn-sm">Voltar</a>
            </form>
        </div>
        <div class=" col-md-3"></div>
    </div>
</div>


<script>
  // tell the embed parent frame the height of the content
  if (window.parent && window.parent.parent){
    window.parent.parent.postMessage(["resultsFrame", {
      height: document.body.getBoundingClientRect().height,
      slug: "9h7sqc4o"
    }], "*")
  }
</script>
	


<script type="text/javascript">
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

</body></html>
