<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--

    Link para delegacia online (http://www.ssp.sp.gov.br/)
    Telefones de contato para:
        Polícia ambiental - 16 3331-3797 (http://www3.policiamilitar.sp.gov.br/unidades/cpamb/)
        Polícia militar - 190 (http://www.policiamilitar.sp.gov.br/)
        Bombeiros - 193 (http://www.corpodebombeiros.sp.gov.br/)
        Prefeitura de Aqa - 16 3301-5000 (http://www.araraquara.sp.gov.br/)
        Zoonoses de Aqa - 16 3339-4940 / 4441 (http://www.araraquara.sp.gov.br/espaco-do-cidadao/animal-amigo/)
        Ouvidoria animal de Aqa 16 3301-2999 / 0800 774 04 40 - 153
        Guarda municipal Aqa 16 3335-2370
        Trânsito de Aqa (16) 3335-7728

-->
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Gipama</title>
		<link rel="shortcut icon" type="image/png " href="<?= base_url() ?>images/icone.png">
		
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/estilos.css">
		<link rel="stylesheet" href="<?= base_url() ?>stylesheets/estilo_contatos.css">
       
    </head>

    <body>
		<div id="conteudo">
			
			<!--incluindo o arquivo do menu-->
			<?= include('menu.php') ?>

			<div class="container content" id="container">

				<h1 class="page-header">Contatos Importantes</h1>
			
				<div class="accordion" id="accordion">
				<!--card de contato Polícia ambiental-->
					<div class="card">
						<div class="card-header" id="policiaAmbientalContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapsePoliciaAmbientalContact" aria-expanded="false" aria-controls="collapsePoliciaAmbientalContact">
								<strong>Policia Ambiental de Araraquara</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapsePoliciaAmbientalContact" class="collapse" aria-labelledby="policiaAmbientalContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Policia Ambiental de Araraquara: </strong>
								<p>(16) 3331-3797</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Polícia militar-->
					<div class="card">
						<div class="card-header" id="policiaMilitarContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapsePoliciaMilitarContact" aria-expanded="false" aria-controls="collapsePoliciaMilitarContact">
								<strong>Policia Militar</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapsePoliciaMilitarContact" class="collapse" aria-labelledby="policiaMilitarContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Policia Militar: </strong>
								<p>190</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Bombeiros-->
					<div class="card">
						<div class="card-header" id="bombeirosContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseBombeirosContact" aria-expanded="false" aria-controls="collapseBombeirosContact">
								<strong>Corpo de Bombeiros</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapseBombeirosContact" class="collapse" aria-labelledby="bombeirosContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Corpo de Bombeiros: </strong>
								<p>193</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Prefeitura araraquara-->
					<div class="card">
						<div class="card-header" id="prefeituraContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapsePrefeituraContact" aria-expanded="false" aria-controls="collapsePrefeituraContact">
								<strong>Prefeitura Araraquara</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapsePrefeituraContact" class="collapse" aria-labelledby="prefeituraContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Prefeitura Araraquara: </strong>
								<p>(16) 3301-5000</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Zoonoses araraquara-->
					<div class="card">
						<div class="card-header" id="zoonosesContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseZoonosesContact" aria-expanded="false" aria-controls="collapseZoonosesContact">
								<strong>Zoonosis Araraquara</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapseZoonosesContact" class="collapse" aria-labelledby="zoonosesContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Zoonosis Araraquara: </strong>
								<p>(16) 3339-4940 / 3339-4441</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Ouvidoria animal araraquara-->
					<div class="card">
						<div class="card-header" id="ouvidoriaContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseOuvidoriaContact" aria-expanded="false" aria-controls="collapseOuvidoriaContact">
								<strong>Ouvidoria Animal Araraquara</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapseOuvidoriaContact" class="collapse" aria-labelledby="ouvidoriaContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Ouvidoria Animal Araraquara: </strong>
								<p>(16) 3301-2999 / 0800 774 04 40 - 153</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Guarda Municipal araraquara-->
					<div class="card">
						<div class="card-header" id="guardmunicContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseGuardmunicContact" aria-expanded="false" aria-controls="collapseGuardmunicContact">
								<strong>Guarda Municipal</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapseGuardmunicContact" class="collapse" aria-labelledby="guardmunicContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Guarda Municipal: </strong>
								<p>(16) 3335-2370</p>
							</address>
							</div>
						</div>
					</div>

					<!--card de contato Secretaria transito araraquara-->
					<div class="card">
						<div class="card-header" id="transitoContact">
							<h5 class="mb-0">
							<button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseTransitoContact" aria-expanded="false" aria-controls="collapseTransitoContact">
								<strong>Secretaria de Transito Araraquara</strong> <span class="caret"></span>
							</button>
							</h5>
						</div>

						<div id="collapseTransitoContact" class="collapse" aria-labelledby="transitoContact" data-parent="#accordion">
							<div class="card-body">
								<address>
								<strong>Secretaria de Transito Araraquara: </strong>
								<p>(16) 3335-7728</p>
							</address>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src='<?= base_url() ?>javascripts/jquery-2.2.4.min.js' type='text/javascript'></script>
		<script src="<?= base_url() ?>javascripts/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>javascripts/bootstrap-datepicker.min.js"></script>
		<script src="<?= base_url() ?>javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src='<?= base_url() ?>javascripts/animar.js' type='text/javascript'></script>
		<script src="<?= base_url() ?>javascripts/acessibilidade.js"></script>
	</body>
</html>