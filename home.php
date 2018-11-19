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
			<!-- Configuração carousel da página home -->
			<div id="meuSlider" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#meuSlider" data-slide-to="0" class="active"></li>
					<li data-target="#meuSlider" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active"><img class="d-block w-100" src="images/Logo_GIPAMA_Off.png" alt="Slide 1" /></div>
					<div class="item"><img  class="d-block w-100" src="images/Logo_GIPAMA_Off.png" alt ="Slide 2" /></div>
				</div>
				<a class="left carousel-control" href="#meuSlider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#meuSlider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>	
			<!-- Configuração de Colunas da página home -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p><h1 class="page-header">Um pouco da nossa história</h1></p>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>O que é o Gipama ?</h4>
							</div>
							<div class="panel-body">
								 <ul class="list-group">
									<li class="list-group-item">
										O Grupo Independente de Proteção Animal e ao Meio Ambiente de Araraquara (GIPAMA) conta com pessoas que se preocupam com os animais e o meio ambiente. Com o passar do tempo, a credibilidade do grupo permitiu que ele se tornasse amplamente conhecido e procurado por pessoas de todo o país.
									</li>
								</ul>
								<ul class="list-group" id="informacao1">
									<li class="list-group-item">	
										Como grande experiência, o GIPAMA ajudou de forma direta na coordenação das feiras oficiais de adoção do município de Araraquara no período de Janeiro de 2014 até Janeiro de 2017. Dessa forma, até hoje promove iniciativas voltadas para a causa animal. As adoções permanecem de forma constante e rotineira em nossa página na rede social. Eventos e rifas, são organizados para custearmos os diversos animais que mantemos e assistimos. 
									</li>
									<li class="list-group-item">
										Não temos como precisar um número exato de animais resgatados, mas já passamos das <strong>“milhares de centenas”</strong> de animais atendidos, cuidados, castrados, doados e assistidos ao longo desse tempo.
										Hoje cuidamos de forma específica, de gatos, cães, cavalos, galinhas e exótico que eventualmente surjam, que mantemos de forma exclusiva, com dedicação diária e manutenção integral. Muitos se encontram em lares temporários espalhados pela cidade.
									</li>
								</ul>
								<a class="btn btn-success" onclick="mostrarInformacao1()">Mostrar mais...</a>
								<a class="btn btn-success" onclick="ocultarInformacao1()">Mostrar menos...</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Nossa Missão</h4>
							</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">
										Prover alimentações, cuidados, assistências, medicações e limpezas DIÁRIAS, juntamente com todo o suporte dos veterinários.
									</li>
								</ul>
								<ul class="list-group" id="informacao2">
									<li class="list-group-item">
										É									válido ressaltar que boa parte trata-se de animais de rua,
										adultos e doentes que provavelmente passarão o resto de suas vidas sob
										nossos cuidados.
									</li>
								</ul>
								<a class="btn btn-success" onclick="mostrarInformacao2()">Mostrar mais...</a>
								<a class="btn btn-success" onclick="ocultarInformacao2()">Mostrar menos...</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Como Surgimos</h4>
							</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">
										O GIPAMA, na realidade é um grupo de apaixonados e loucos por animais, e que, inconformados com tanta injustiça praticada contra seres inocentes e o meio ambiente, resolveu tomar a frente da situação caótica para tentar mudar algumas tristes realidades.
										Algumas soluções, encontramos dentro de nossos limites, mas a maioria, fora deles.	
									</li>
								</ul>
								<ul class="list-group" id="informacao3">
									<li class="list-group-item" >
										O GIPAMA surgiu em Araraquara no ano de 2013, e os principais integrantes do grupo têm atuado à frente da causa animal desde 2011.
									</li>
									<li class="list-group-item" >
										Não temos sede, realizamos todo o trabalho utilizando veículos próprios, custeamos o combustível e demais despesas com <strong>recursos próprios</strong>. Contamos com a ajuda de várias caronas solidárias. O nosso trabalho é exclusivamente voluntário, desta forma, não recebemos nada por isso. Como resultado, dependemos da população para nos ajudar a quitar nossas altas dívidas, que não são poucas. Estas dívidas incluem: veterinários pois os problemas não escolhem dia e nem hora para acontecer, remédios, castrações, rações, higiene, exames, produtos diversos, etc.
									</li>
								</ul>
								<a class="btn btn-success" onclick="mostrarInformacao3()">Mostrar mais...</a>
								<a class="btn btn-success" onclick="ocultarInformacao3()">Mostrar menos...</a>
							</div>
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