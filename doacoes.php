<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<title>Doações</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png " href="images/icone.png">
	<link rel="stylesheet" href="stylesheets/bootstrap.min.css">
	<link rel="stylesheet" href="stylesheets/estilos.css">
	<link rel="stylesheet" href="stylesheets/estilo_doacoes.css">
</head>
<body>

	<div id="conteudo">
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
							<li><a href="videos.php">Videos</a></li>
							<li><a onclick="sizeFont('+');" id='btn_mais'>A+</a></li>
							<li><a onclick="sizeFont('-');" id='btn_menos'>A-</a></li>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="content">
			<h1 class="page-header">Como Colaborar?</h1>
			<div class='list-ajuda container'>
				<div class="accordion" id="accordion">
					<!--card de doações-->
					<div class="card">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							  Doações <span class="caret"></span>
							</button>
						  </h5>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						  <div class="card-body">
							<ul class = "list-group">
								<li class = "list-group-item list-group-item-action">Jornais.</li>
								<li class = "list-group-item list-group-item-action">Areias Higiênicas.</li>
								<li class = "list-group-item list-group-item-action">Produtos de Limpeza - baldes, rodos, vassouras, água sanitária, desinfetantes, detergentes, panos de chão, sabão em pó, etc.</li>
								<li class = "list-group-item list-group-item-action">Panos / Toalhas / Cobertores / Edredons / Lençois / Mantas / Casinhas.</li>
								<li class = "list-group-item list-group-item-action">Medicamentos - Farmácia Solidária Expressa Ecopet.</li>
								<li class = "list-group-item list-group-item-action">Alimentos - Rações e fenos para cavalos, rações para gatos, cães, milhos, quireras, patês, sachês, latas de AD ou recovery, leite em pó específico para animais e ração desmame.</li>
							</ul>
						  </div>
						</div>
					</div>
					
					<!--card da conta corrente-->
					<div class="card">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							  Ajude-nos com qualquer quantia <span class="caret"></span>
							</button>
						  </h5>
						</div>

						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						  <div class="card-body">
							<p><strong>Izabela Luznick De Ponte</strong></p>
							<p><strong>Banco: </strong> Banco do Brasil</p>
							<p><strong>Agência:</strong> 3221-6</p>
							<p><strong>C/c:</strong> 6715-6</p>
						  </div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="divMap">
				<div id='map' class="container xs-col-4" alt="Pontos para Doações"></div>
			</div>
		</div>
	
	</div>
		
	<script src='javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
	<script src="javascripts/bootstrap.min.js"></script>
	<script src="javascripts/maps_script.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj26zJ1pE9F4V1EGz0cSaqfyIS08522rw&callback=initMap"
	async defer></script>
	<script src="javascripts/acessibilidade.js"></script>
</body>
</html>