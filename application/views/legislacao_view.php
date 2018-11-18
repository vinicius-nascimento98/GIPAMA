<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>GIPAMA</title>
		<link rel="shortcut icon" type="image/png " href="<?=base_url()?>images/icone.png">
		
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/bootstrap.min.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="<?=base_url()?>stylesheets/estilos.css">
       
    </head>

    <body>
	
		<div id = "conteudo">

			<!--incluindo o arquivo do menu-->
			<?= include('menu.php') ?>

			<!-- Configuração de Colunas da página legislação -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-header">Legislação</h1>
					</div>
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Leis estaduais</h4>
							</div>
							<div class="panel-body">
								 <ul class="list-group">
									<li class="list-group-item">
										Lei 12.916/08 ou Lei Feliciano, “O Fim da Cultura de Extermínio e das antigas Carrocinhas” – proíbe a matança de animais de rua: “Fica vedada a eliminação da vida de cães e de gatos pelos órgãos de controle de zoonoses, canis públicos e estabelecimentos oficiais congêneres, exceção feita à eutanásia, permitida nos casos de males, doenças graves ou enfermidades infecto-contagiosas  incuráveis que coloquem em risco a saúde de pessoas ou de outros animais”. Cães e Gatos Comunitários – Outro ponto muito importante da Lei Feliciano: “O animal reconhecido como comunitário será recolhido para fins de esterilização, registro e devolução à comunidade de origem, após identificação e assinatura de termo de compromisso de seu cuidador principal. 
									</li>
								</ul>
								<ul class="list-group" id="informacao1">
									<li class="list-group-item">
										
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
								<h4>Leis federais</h4>
							</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">
										LEI Nº 9.605, DE 12 DE FEVEREIRO DE 1998, quem, de qualquer forma, concorre para a prática dos crimes previstos nesta Lei, incide nas penas a estes cominadas, na medida da sua culpabilidade, bem como o diretor, o administrador, o membro de conselho e de órgão técnico, o auditor, o gerente, o preposto ou mandatário de pessoa jurídica, que, sabendo da conduta criminosa de outrem, deixar de impedir a sua prática, quando podia agir para evitá-la. As pessoas jurídicas serão responsabilizadas administrativa, civil e penalmente conforme o disposto nesta Lei, nos casos em que a infração seja cometida por decisão de seu representante legal ou contratual, ou de seu órgão colegiado, no interesse ou benefício da sua entidade.
									</li>
								</ul>
								<ul class="list-group" id="informacao2">
									<li class="list-group-item">
										LEI N° 5.197, DE 3 DE JANEIRO DE 1967, os animais de quaisquer espécies, em qualquer fase do seu desenvolvimento e que vivem naturalmente fora do cativeiro, constituindo a fauna silvestre, bem como seus ninhos, abrigos e criadouros naturais são propriedades do Estado, sendo proibida a sua utilização, perseguição, destruição, caça ou apanha.
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
								<h4>Leis municipais</h4>
							</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item">
										LEI Nº 5821, De 15 de maio de 2002, o PREFEITO DO MUNICÍPIO DE ARARAQUARA, Estado de São Paulo, no exercício de suas atribuições legais, e de acordo com o que aprovou a Câmara Municipal, em sessão ordinária de 18 de abril de 2002, promulga a seguinte lei:
										Fica instituído o "Programa de Regulamentação do Transporte de Carroças; de Proteção aos Animais Tracionados e de Correção Ambiental", no âmbito do Município, que compreende normas de cadastramento e plano de reciclagem da atividade profissional de carroceiros, plano de proteção aos animais de tração, medidas de proteção ambiental no deslocamento e despejo de materiais transportados pelas carroças e dá outras providências.
									</li>
								</ul>
								<ul class="list-group" id="informacao3">
									<li class="list-group-item">
										LEI MUNICIPAL Nº 4.564, De 24 de outubro de 1.995, o Prefeito do Município de Araraquara, Estado de São Paulo, no exercício de suas atribuições legais, e de acordo com o que aprovou a Câmara Municipal em sessão ordinária de 2 de outubro de 1.995, promulga a seguinte lei:
										O desenvolvimento de ações objetivando o controle das populações animais, bem como a prevenção e o controle das zoonoses no Município de Araraquara, passam a ser regulados pela presente lei.
										Fica o Centro Municipal de Controle de Zoonoses da Secretaria Municipal de Saúde, responsável, no Âmbito Municipal, pela execução das ações mencionadas no artigo anterior, sendo os respectivos funcionários incluídos na Equipe Técnica de Vigilância em Saúde da Prefeitura Municipal de Araraquara para os devidos efeitos de fiscalização.
									</li>
									
								</ul>
							
								<a class="btn btn-success" onclick="mostrarInformacao3()">Mostrar mais...</a>
								<a class="btn btn-success" onclick="ocultarInformacao3()">Mostrar menos...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="page-header">O que são maus tratos ?</h1>
					</div>
					<div class="col-md-6">
						<div class="panel-body">
							<ul class = "list-group">
								<li class = "list-group-item list-group-item-action">Abandonar, espancar, golpear, mutilar e envenenar</li>
								<li class = "list-group-item list-group-item-action">Manter preso permanentemente em correntes</li>
								<li class = "list-group-item list-group-item-action">Manter em locais pequenos e anti-higiênico</li>
								<li class = "list-group-item list-group-item-action">Não abrigar do sol, da chuva e do frio</li>
								<li class = "list-group-item list-group-item-action">Deixar sem ventilação ou luz solar</li>
								<li class = "list-group-item list-group-item-action">Não dar água e comida diariamente</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel-body">
							<ul class = "list-group">
								<li class = "list-group-item list-group-item-action">Negar assistência veterinária ao animal doente ou ferido</li>
								<li class = "list-group-item list-group-item-action">Obrigar a trabalho excessivo ou superior a sua força</li>
								<li class = "list-group-item list-group-item-action">Capturar animais silvestres</li>
								<li class = "list-group-item list-group-item-action">Utilizar animal em shows que possam lhe causar pânico ou estresse</li>
								<li class = "list-group-item list-group-item-action">Promover violência como rinhas de galo, farra-do-boi etc..</li>
								<li class = "list-group-item list-group-item-action">Outros exemplos estão descritos no Decreto Lei 24.645/1934.</li>
							</ul>
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