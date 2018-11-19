<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  
	<title>Gipama</title>
	<link rel="shortcut icon" type="image/png " href="<?= base_url() ?>images/icone.png">
	
    <link rel="stylesheet" href="<?= base_url() ?>stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>stylesheets/estilos.css">
	<link rel="stylesheet" href="<?= base_url() ?>stylesheets/login.css">
</head>
<body>
	
    <div class="conteudo">
        <!--incluindo o arquivo do menu-->
		<?= include('menu.php') ?>

        <div class="login-form col-xs-10 col-xs-offset-1 
            col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <header>
                <h2 class="text-center">Entre com seu <b>usuário</b> e <b>senha</b></h2>
            </header>

            <!--Alterar aqui o caminho que o post irai ao ser submetido para logar-->
            <form action="login.php" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </div>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuário">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock"></span>
                        </div>
                        <input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senha" placeholder="Senha" required="required"  />
                    </div>
                </div>

                <footer>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-default">Entrar</button>
                    </div>
                    <div class="pull-left"></div>
                <button class="btn btn-warning btn-cadastrar" data-toggle="modal" data-target="#NovoUsuario">
                    Cadastrar</button>
            </div>
                </footer>
            </form>
        </div>

        <div class="modal fade" id="NovoUsuario">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" class="close">
                        <span>&times;</span>
                    </button>
                    <h4 class="modal-title">Novo Usuário</h4>
                </div>

                <!--Alterar aqui o caminho a ser seguido pelo post ao ser submetido para inserir um novo usuário-->
                <form action="salvarUsuario.php" method="post">
                    <div class="modal-body">
                            
                        <div class="row">
                            <input type="hidden" name="papel" value="0" />
                            <div class="form-group col-xs-12">
                                <label class="control-label" for="nome">Nome completo</label>
                                <input type="text" name="nome" id="nome" class="form-control so-texto" required="required" placeholder="Digite seu nome..." />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" required="required" />
                            </div>
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="rg">RG</label>
                                <input type="text" name="rg" id="rg" class="form-control" placeholder="00.000.000-00" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="cidade">Cidade</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Informe sua cidade..." required="required" />
                            </div>
                            <div class="form-group col-xs-2">
                                <label class="control-label" for="estado">Estado</label>
                                <input type="text" name="estado" id="estado" max="2" class="form-control" placeholder="ex.: UF" required="required" />
                            </div>
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="data_nasc">Data Nascimento</label>
                                <input type="date" name="data_nasc" id="data_nasc" class="form-control" required="required" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="tel1">Tel 1</label>
                                <input type="tel" name="tel1" id="tel1" class="form-control tel" placeholder="(00)0000-0000" required="required" />
                            </div>
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="tel2">Tel 2</label>
                                <input type="tel" name="tel2" id="tel2" class="form-control tel" placeholder="(00)0000-0000" />
                            </div>
                            <div class="form-group col-xs-4">
                                <label class="control-label" for="tel3">Tel 3</label>
                                <input type="tel" name="tel3" id="tel3" class="form-control tel" placeholder="(00)0000-0000" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="senha">Senha</label>
                                <input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senha" placeholder="Senha..." required="required"  />
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="senha">Confirmação de Senha</label>
                                <input type="password" name="senha" class="form-control password" data-cript="sha1, md5" id="senha" placeholder="Confirme sua Senha..." required="required" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="e-mail">E-mail</label>
                                <input type="email" name="email" id="e-mail" class="form-control" required="required" placeholder="E-mail..." />
                            </div>
                            <div class="form-group col-xs-6">
                                <label class="control-label" for="e-mail">Confirmação de E-mail</label>
                                <input type="email" name="email" id="e-mail" class="form-control" required="required" placeholder="Confirme seu E-mail..." />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Limpar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
            </div>
        </div> 
	</div>

	<script src='<?= base_url() ?>javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
    <script src="<?= base_url() ?>javascripts/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>javascripts/acessibilidade.js"></script>
    <script src="<?= base_url() ?>javascripts/jquery.mask.js"></script>
    <script src="<?= base_url() ?>javascripts/jquery.mask.min.js"></script>
    <script src="<?= base_url() ?>javascripts/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="<?= base_url() ?>javascripts/mascara.js"></script>
    <script src="<?= base_url() ?>javascripts/validaform.min.js"></script>
</body>
</html>