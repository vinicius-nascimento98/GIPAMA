<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Gipama</title>
		<link rel="shortcut icon" type="image/png " href="<?= base_url() ?>images/icone.png">
		
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/estilos.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/estilo_contatos.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/estilo_entrar_contatos.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/onchange_div.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/cadastrar_lar_temp.css">
       
    </head>
    <body>
		<div id = "conteudo">
			
			<!--incluindo o arquivo do menu-->
			<?= include('menu.php') ?>

			<!-- Corpo do formulário -->
			<div class="container" id="formulario">
				<div class = "page-header">
					<h1>Cadastro de Lar Temporário</h1>
				</div> 
				<div class="card" style="width: 60rem;">
					<div class="card-body">
						<form id="formID" action = "<?= base_url() ?>index.php/CadastrarLarTemp/submit_lar_temp" method="POST">
							<div class="form-row">
    							<div class="col-md-8 mb-3">
							      <label for="endereco">Enredeço</label>
							      <input type="text" class="form-control" id="endereco" name="endereco"  placeholder="Rua ou Avenida..." required />
						    	</div>
						    	<div class="col-md-4 mb-3">
						      		<label for="numeroEnd">Número</label>
						      		<input type="number" class="form-control" id="numeroEnd" name="numeroEnd" placeholder="Número da residencia..." required />
						    	</div>
						    	<div class="col-md-6 mb-3">
						      		<label for="complemento">Complemento</label>				
						        	<input type="text" class="form-control" id="complemento" name="complemento"
						        	placeholder="Informe um complemento..." />
						    	</div>
						    	<div class="col-md-6 mb-3">
						      		<label for="cep">CEP</label>				
						        	<input type="text" class="form-control" id="cep" name="cep" placeholder="Ex.: 00000-000"required />
						    	</div>
						    	<div class="col-md-10 mb-3">
								    <label for="cidade">Cidade</label>
								    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe sua cidade..." required />
								</div>
								<div class="col-md-2 mb-3">
							     	<label for="estado">Estado</label>
							      	<input type="text" class="form-control" id="estado" name="estado" placeholder="UF" required />
    							</div>
    							<div class="col-md-6 mb-3">
						      		<label for="telefoneLocal">Telefone do local</label>
						      		<input type="tel" class="form-control" id="telefoneLocal" name="telefoneLocal" placeholder="Ex.: (00)0000-0000" required />
						    	</div>
						    	<div class="col-md-6 mb-3">
						      		<label for="qtdAnimais">Quantidade de animais</label>
						      		<input type="number" class="form-control" id="qtdAnimais" name="qtdAnimais" placeholder="Informe a quantidade de animais..." required />
						    	</div>
						    	<div class="col-md-8 mb-3">
						    		<h4>Tipos de animais</h4>
							    	<select class="custom-select" name="tipoAnimais">
									  <option value="caes" selected>Cães</option>
									  <option value="gatos">Gatos</option>
									  <option value="animaisSilvestres">Animais Silvestres</option>
									</select>
								</div>
								<div class="col-md-4 mb-3">
									<h4>Responsável</h4>
									<div class="form-check">
									  	<input class="form-check-input" name="responsavel" type="radio" value="sim" id="sim" onchange="habilita_div(this)" />
									  	<label class="form-check-label" for="sim">
									    	Sim
									  	</label>
									  	<input class="form-check-input" name="responsavel" type="radio" value="nao" id="nao" onchange="habilita_div(this)" />
									  	<label class="form-check-label" for="nao">
									    	Não
									  	</label>
									</div>
								</div>
						    	<div class="col-md-6 mb-3" id="nomeResp">
						      		<label for="nomeCompletoResponsavel">Nome Completo</label>	
						        	<input type="text" class="form-control" id="nomeCompletoResponsavel" name="nomeCompletoResponsavel" placeholder="Informe o nome do responsável..." required />
						    	</div>
						    	<div class="col-md-6 mb-3" id="telefoneResp">
						      		<label for="telefone">Telefone Responsável</label>
						      		<input type="tel" class="form-control" id="telefoneResponsavel" name="telefoneResponsavel" placeholder="Ex.: (00)0000-0000" required />
						    	</div>
						  	</div>						  	
						  	<button type="reset" id="btnLimpar" class="btn btn-danger">Limpar</button>
							<button type="submit" id="btnEnviar" class="btn btn-success">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src='<?= base_url() ?>javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
		<script src="<?= base_url() ?>javascripts/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>javascripts/bootstrap-datepicker.min.js"></script>
		<script src="<?= base_url() ?>javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src="<?= base_url() ?>javascripts/valida_contato.js"></script>
		<script src="<?= base_url() ?>javascripts/acessibilidade.js"></script>
		<script src="<?= base_url() ?>javascripts/habilita_div.js"></script>
		<script src="<?= base_url() ?>javascripts/mascara.js"></script>
	</body>
</html>