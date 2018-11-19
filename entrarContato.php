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
		<script src='javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
		<script src="javascripts/bootstrap.min.js"></script>
		<script src="javascripts/bootstrap-datepicker.min.js"></script>
		<script src="javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src="javascripts/valida_contato.js"></script>
		<script src="javascripts/acessibilidade.js"></script>
	</body>
</html>		