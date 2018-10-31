<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Gipama</title>
		<link rel="shortcut icon" type="image/png " href="images/icone.png">
		
		<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="stylesheets/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="stylesheets/estilos.css">
		<link rel="stylesheet" href="stylesheets/carouselEstilo.css">
		<link rel="stylesheet" href="stylesheets/videos.css">
       
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
							<li><a href="videos.php">Videos</a></li>
							<li><a onclick="sizeFont('+');" id='btn_mais'>A+</a></li>
							<li><a onclick="sizeFont('-');" id='btn_menos'>A-</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- Configurando corpo da página -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-header">Um pouco mais sobre nosso trabalho</h1>
					</div>
					<div class="col-md-6">
						<div class="panel-body">
							<iframe width="530" height="400" src="https://www.youtube.com/embed/aJT9F2oHrSg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel-body">
							<iframe width="530" height="400" src="https://www.youtube.com/embed/aJT9F2oHrSg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12"></div>
					<div class="col-md-6">
						<div class="panel-body">
							<iframe width="530" height="400" src="https://www.youtube.com/embed/aJT9F2oHrSg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel-body">
							<iframe width="530" height="400" src="https://www.youtube.com/embed/aJT9F2oHrSg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src='javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
		<script src="javascripts/bootstrap.min.js"></script>
		<script src="javascripts/bootstrap-datepicker.min.js"></script>
		<script src="javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src='javascripts/animar.js' type='text/javascript'></script>
		<script src="javascripts/acessibilidade.js"></script>
	</body>
</html>