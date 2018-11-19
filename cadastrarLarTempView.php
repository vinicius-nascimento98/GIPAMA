<?php
/* defined('BASEPATH') OR exit('No direct script access allowed'); */
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Gipama</title>
		<link rel="shortcut icon" type="image/png " href="images/icone.png">
		
		<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/estilos.css">
		<link rel="stylesheet" href="stylesheets/estilo_contatos.css">
		<link rel="stylesheet" href="stylesheets/estilo_entrar_contatos.css">
		<link rel="stylesheet" href="stylesheets/onchange_div.css">
		<link rel="stylesheet" href="stylesheets/cadastrar_lar_temp.css">
       
    </head>
    <body>
		<div id = "conteudo">
			<nav class="navbar navbar-outro navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="home.php" class="navbar-brand logotipo">
							<img src="images/logo_GIPAMA.jpg" alt="GIPAMA">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav">
							<li><a href="home.php">Home</a></li>
							<li><a href="doacoes.php">Como Colaborar</a></li>
							<li><a href="legislacao.php">Legislação</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Contatos<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li class="bg-success"><a href="http://www.ssp.sp.gov.br/" target=“_blank”><strong>Delegacia Online</strong></a></li>
									<li class="divider" role = "separator"></li>
									<li><a href="contatos.php">Contatos Importantes</a></li>
									<li><a href="entrarContato.php">Entrar em contato</a></li>
								</ul>
							</li>
							<li><a href="cadastrarLarTempView.php">Cadastrar Lar Temp.</a></li>
							<li><a href="videos.php">Videos</a></li>
							<li><a onclick="sizeFont('+');" id='btn_mais'>A+</a></li>
							<li><a onclick="sizeFont('-');" id='btn_menos'>A-</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- Corpo do formulário -->
			<div class="container" id="formulario">
				<div class = "page-header">
					<h1>Cadastro de Lar Temporário</h1>
				</div> 
				<div class="card" style="width: 60rem;">
					<div class="card-body">
						<form id="formID">
							<div class="form-row">
    							<div class="col-md-8 mb-3">
							      <label for="endereco">Enredeço</label>
							      <input type="text" class="form-control" id="endereco" placeholder="Rua ou Avenida..." required>
						    	</div>
						    	<div class="col-md-4 mb-3">
						      		<label for="numeroEnd">Número</label>
						      		<input type="number" class="form-control" id="numeroEnd" required>
						    	</div>
						    	<div class="col-md-6 mb-3">
						      		<label for="complemento">Complemento</label>				
						        	<input type="text" class="form-control" id="complemento" required>
						    	</div>
						    	<div class="col-md-6 mb-3">
						      		<label for="cep">CEP</label>				
						        	<input type="number" class="form-control" id="cep" required>
						    	</div>
						    	<div class="col-md-10 mb-3">
								    <label for="cidade">Cidade</label>
								    <input type="text" class="form-control" id="cidade" placeholder="Informe sua cidade..." required>
								</div>
								<div class="col-md-2 mb-3">
							     	<label for="estado">Estado</label>
							      	<input type="text" class="form-control" id="estado" required>
    							</div>
    							<div class="col-md-6 mb-3">
						      		<label for="telefone">Telefone do local</label>
						      		<input type="number" class="form-control" id="telefoneLocal" required>
						    	</div>
						    	<div class="col-md-6 mb-3">
						      		<label for="qtdAnimais">Quantidade de animais</label>
						      		<input type="number" class="form-control" id="qtdAnimais" required>
						    	</div>
						    	<div class="col-md-8 mb-3">
						    		<h4>Tipos de animais</h4>
							    	<label class="checkbox-inline">
							    		<input type="checkbox" value="">Cães
							    	</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="">Gatos
									</label>
									<label class="checkbox-inline">
										<input type="checkbox" value="">Animais silvestres
									</label> 
								</div>
								<div class="col-md-4 mb-3">
									<h4>Responsável</h4>
									<div class="form-check">
									  	<input class="form-check-input" name="responsavel" type="radio" value="sim" id="sim">
									  	<label class="form-check-label" for="sim">
									    	Sim
									  	</label>
									  	<input class="form-check-input" name="responsavel" type="radio" value="nao" id="nao" onchange="habilita_div(this)">
									  	<label class="form-check-label" for="nao">
									    	Não
									  	</label>
									</div>
								</div>
						    	<div class="col-md-6 mb-3" id="nomeResp">
						      		<label for="nomeCompletoResponsavel">Nome Completo</label>	
						        	<input type="text" class="form-control" id="nomeCompletoResponsavel" required>
						    	</div>
						    	<div class="col-md-6 mb-3" id="telefoneResp">
						      		<label for="telefone">Telefone Responsável</label>
						      		<input type="number" class="form-control" id="telefoneResponsavel" required>
						    	</div>
						  	</div>						  	
						  	<button type="reset" id="btnLimpar" class="btn btn-danger">Limpar</button>
							<button type="submit" id="btnEnviar" class="btn btn-success">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src='javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
		<script src="javascripts/bootstrap.min.js"></script>
		<script src="javascripts/bootstrap-datepicker.min.js"></script>
		<script src="javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src="javascripts/valida_contato.js"></script>
		<script src="javascripts/acessibilidade.js"></script>
		<script src="javascripts/habilita_div.js"></script>
	</body>
</html>