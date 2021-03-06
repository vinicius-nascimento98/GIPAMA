<nav class="navbar navbar-outro navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="<?= base_url() ?>index.php/home" class="navbar-brand logotipo">
							<img src="<?= base_url() ?>images/logo_GIPAMA.jpg" alt="GIPAMA">
						</a>
					</div>
					<div class="collapse navbar-collapse" id="menu">
					<ul class="nav navbar-nav">
							<li><a href="<?= base_url() ?>index.php/home">Home</a></li>
							<li><a href="<?= base_url() ?>index.php/doacoes">Como Colaborar</a></li>
							<li><a href="<?= base_url() ?>index.php/legislacao">Legislação</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Contatos<span class="caret"></span>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li class="bg-success"><a href="http://www.ssp.sp.gov.br/" target=“_blank”><strong>Delegacia Online</strong></a></li>
									<li class="divider" role = "separator"></li>
									<li><a href="<?= base_url() ?>index.php/contatos">Contatos Importantes</a></li>
									<li><a href="<?= base_url() ?>index.php/entrarContato">Entrar em contato</a></li>
								</ul>
							</li>
							
							<?php
								if($this->session->has_userdata('nome') && $this->session->has_userdata('id')){
							?>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Cadastrar<span class="caret"></span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a href="<?= base_url() ?>index.php/cadastrarLarTemp">Cadastrar Lar Temp.</a></li>
									</ul>
								</li>
							<?php
								}
							?>

							<li><a href="<?= base_url() ?>index.php/videos">Videos</a></li>
							<li><a href="#" onclick="sizeFont('+');" id='btn_mais'>A+</a></li>
							<li><a href="#" onclick="sizeFont('-');" id='btn_menos'>A-</a></li>
						
							<?php
								if($this->session->has_userdata('nome') && $this->session->has_userdata('id')){
							?>
								<li>
								<li class="dropdown">
									<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Minha conta<span class="caret"></span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a><?=$this->session->userdata('nome')?></a></li>
										<li><a href="<?= base_url() ?>index.php/login/logout">Sair</a></li>
									</ul>
									</li>
							<?php
								}else{
							?>	
								<li id="entrar"><a href="<?= base_url() ?>index.php/login">Entrar</a></li>
							<?php
								}
							?>
						</ul>
					</div>
				</div>
			</nav>