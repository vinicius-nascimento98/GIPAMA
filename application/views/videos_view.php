<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Gipama</title>
		<link rel="shortcut icon" type="image/png " href="<?=base_url()?>images/icone.png">
		
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/estilos.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/carouselEstilo.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/videos.css">
       
    </head>

    <body>
	
		<div id = "conteudo">
			
			<!--incluindo o arquivo do menu-->
			<?= include('menu.php') ?>

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
		<script src="<?=base_url()?>javascripts/jquery-2.2.4.min.js" type='text/javascript'></script>
		<script src="<?=base_url()?>javascripts/bootstrap.min.js"></script>
		<script src="<?=base_url()?>javascripts/bootstrap-datepicker.min.js"></script>
		<script src="<?=base_url()?>javascripts/bootstrap-datepicker.pt-BR.min.js"></script>
		<script src="<?=base_url()?>javascripts/animar.js" type='text/javascript'></script>
		<script src="<?=base_url()?>javascripts/acessibilidade.js"></script>
	</body>
</html>