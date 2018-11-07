<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Gipama</title>
		<link rel="shortcut icon" type="image/png " href="<?=base_url()?>images/icone.png">
		
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/estilos.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/estilo_contatos.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/estilo_entrar_contatos.css">
       
    </head>

    <body>
	
		<div id = "conteudo">

			<!--incluindo o arquivo do menu-->
			<?= include('menu.php') ?>

			<!-- Corpo do formulário -->
			<div class="container" id="formulario">
				<div class = "page-header">
					<h1>Formulário para contato</h1>
				</div> 
				<div class="card" style="width: 50rem;">
					<div class="card-body">
						<form id="formID" novalidate="novalidate" onsubmit="return validarDados()">
							<div class="form-group">
								<label for="nomeCompleto">Nome Completo</label>
								<input type="text" title="Preencha o campo nome completo!" name="Nome Completo" class="form-control" id="nomeCompleto" 
								pattern="[a-zA-Z]{3,}([\s|_][a-zA-Z]+)*"
								placeholder="Digite seu nome completo..." required />
							</div>
							<div class="form-group">
								<label for="endereco">Endereço</label>
								<input type="text"name="Endereço" title="Preencha o campo endereço!" class="form-control" id="endereco" placeholder="Digite seu endereço..." required />
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="Email" title="exemplo@hotmail.com" class="form-control" id="email" pattern="[a-z][a-z0-9]*\.?[a-z]+@([a-z]+\.)+[a-z]+"  placeholder="Digite seu email..." required />
							</div>
							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="Mensagem" title="Preencha o campo mensagem!" class="form-control" id="mensagem" rows="3" placeholder="Digite sua mensagem..." required ></textarea>
							</div>
							<button type="reset" id="btnLimpar" class="btn btn-danger">Limpar</button>
							<button type="submit" id="btnEnviar" class="btn btn-success">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src='<?=base_url()?>javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
		<script src="<?=base_url()?>javascripts/bootstrap.min.js"></script>
		<script src="<?=base_url()?>javascripts/bootstrap-datepicker.min.js"></script>
		<script src="<?=base_url()?>javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src="<?=base_url()?>javascripts/valida_contato.js"></script>
		<script src="<?=base_url()?>javascripts/acessibilidade.js"></script>
	</body>
</html>		