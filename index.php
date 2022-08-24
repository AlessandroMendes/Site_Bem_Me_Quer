<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//PT""http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Laborat&oacute;rio Bem Me Quer</title>
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
		<!--<link rel="stylesheet" type="text/css" href="css/popup.css" />!-->
		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="js/cycle.js"></script>
		<script type="text/javascript" src="js/slider.js"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>
		<!--<script type="text/javascript" src="js/popup.js"</script>!-->
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
			<!--// building select nav for mobile width only -->
			$(function() {
				// building select menu
				$('<select />').appendTo('nav');

				// building an option for select menu
				$('<option />', {
					'selected' : 'selected',
					'value' : '',
					'text' : 'Choose Page...'
				}).appendTo('nav select');

				$('nav ul li a').each(function() {
					var target = $(this);

					$('<option />', {
						'value' : target.attr('href'),
						'text' : target.text()
					}).appendTo('nav select');

				});

				// on clicking on link
				$('nav select').on('change', function() {
					window.location = $(this).find('option:selected').val();
				});
			});

			// show and hide sub menu
			$(function() {
				$('nav ul li').hover(function() {
					//show its submenu
					$('ul', this).slideDown(150);
				}, function() {
					//hide its submenu
					$('ul', this).slideUp(150);
				});
			});
			//end

		</script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider();
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#slideshow').cycle({
					fx : 'scrollHorz',
					speed : 3000,
					prev : "#prev2",
					next : "#next2"
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#noticias').cycle({
					fx : 'scrollHorz',
					speed : 3000,
					prev : "#prev",
					next : "#next"
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();
				$('#mask').css({
					'width' : maskWidth,
					'height' : maskHeight
				});

				$('#mask').fadeIn(1000);
				$('#mask').fadeTo("slow", 0.8);
				//Get the window height and width
				var winH = $(window).height();
				var winW = $(window).width();
				$('#dialog2').css('top', winH / 2 - $('#dialog2').height() / 2);
				$('#dialog2').css('left', winW / 2 - $('#dialog2').width() / 2);
				$('#dialog2').fadeIn(2000);
				$('.window .close').click(function(e) {
					e.preventDefault();
					$('#mask').hide();
					$('.window').hide();
				});
				$('#mask').click(function() {
					$(this).hide();
					$('.window').hide();
				});
			});
		</script>
		<style type="text/css">
			#mask {
				position: absolute;
				left: 0;
				top: 0;
				z-index: 9000;
				background-color: transparent;
				display: none;
			}
			#boxes .window {
				position: absolute;
				left: 0;
				top: 0;
				width: 440px;
				height: 200px;
				display: none;
				z-index: 9999;
				padding: 20px;
			}

			#boxes #dialog2 {
				background: transparent;
				width: 428px;
				margin: 0 auto;
				margin-top: -160px;
			}

			.close {
				display: block;
				text-align: right;
			}

		</style>
	</head>
	<body>

		<div id="faixa"></div>
		<div id="container">
			<div id="topo">
				<div id="logo">
					<a href="index.php"><img style="border: none;" src="img/logo.PNG" alt="Bem Me Quer Logo" title="Ir para a p&aacute;gina inicial"/></a>
				</div>
				<div id="pesquisa">
					<form action="pesquisa.php" method="post" enctype="multipart/form-data">
						<input type="text" style="border: 0px;" size="15" class="pesquisa" name="palavra" placeholder="Busca"/>
						<input type="submit" class="submit" style="border:0px;" value=""/>
					</form>
				</div>
			</div>
			<div id="fdw">
				<nav>
					<ul>
						<li class="current">
							<a href="index.php">Home<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
						</li>
						<li>
							<a href="empresa.php">Quem Somos<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
						</li>
						<li>
							<a href="exames.php">Exames<img class="icone" src="img/icone_menu.png" /style="border:none;"></a>
						</li>
						<li>
							<a href="vacinas.php">Vacinas<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
						</li>
						<li>
							<a href="convenios.php">Conv&ecirc;nios <img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
						</li>

						<li>
							<a href="#">Servi&ccedil;os<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
							<ul style="display: none;" class="sub_menu">
								<li class="arrow_top"></li>
								<li>
									<a href="at_infantil.php">Atendimento Infantil</a>
								</li>
								<li>
									<a href="atendimento.php">Atendimento Domiciliar e
									<br/>
									Empresarial</a>
								</li>
								<li>
									<a href="serv_amb.php">Servi&ccedil;os Ambulatoriais</a>
								</li>
								<li>
									<a href="dicas.php">Dicas de Sa&uacute;de</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="contato.php">Contato<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
						</li>
					</ul>
				</nav>
			</div>
			<div id="banner">
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="slider/banner1.jpg" alt="" />
						<img src="slider/banner2.jpg" alt="" />
					</div>
				</div>
			</div>
			<div id="sombra"></div>
			<div id="conteudo">
				<div id="cont1">
					<p class="titulo">
						Agendamentos
					</p>
					<p class="texto">
						Possu&iacute;mos agendamento on-line para exames e vacinas.
						<br/>
						Mais comodidade e tempo para voc&ecirc; curtir sua vida.
					</p>
					<a href="agendar.php"><img class="btn" style="border:none;" src="img/btn_agendar.png"/></a>
				</div>
				<div id="cont2">
					<p class="titulo">
						Sa&uacute;de em Dia
					</p>
					<div class='noticias' id='noticias'>
						<?php
						include ("conecta.php");
						$s = "select * from dicas where destaque='x' order by data asc";
						$q = mysql_query($s);
						while ($r = mysql_fetch_array($q)) {
							$id = $r["id"];
							$titulo = $r["titulo"];
							$data = $r["data"];
							$subtitulo = $r["sub_titulo_pequeno"];
							$foto = "admin/dicas/" . $id . ".jpg";

							echo "<div id='group'><h2 id='noticia'>$titulo</h2>
<img class='img_pequena' src='$foto' alt='$titulo' title='$titulo'/>
<h3 id='noticia_sub'><a alt='$titulo' href='noticia.php?cod=$id'>$subtitulo Leia Mais</a></h3>
</div>";
						}
						?>
					</div>
					<div id="prev_next">
						<a href="#" id="prev"><img style="border: none;" src="img/flecha_verde_esquerda.png"/></a>
						<a href="#" id="next"><img style="border: none;" src="img/flecha_verde_direita.png"/></a>
					</div>
				</div>
				<div id="cont3">
					<p class="titulo">
						Resultado de Exames
					</p>
					<form method="post" name="autenticacao" action="https://www.resultadosonline.com.br/rol/login/cli_valid.php" >
						<p class="form4">
							C&oacute;digo:
						</p>
						<input type="text" class="login_form" name="login" maxlength="12"/>
						<p class="form2">
							Senha:
						</p>
						<input type="password" class="senha_form" name="senha" maxlength="12" size="15"/>
						<button type="submit" class="btn_cadastra2" alt="Cadastrar" title="Cadastrar"></button>
						<input type="hidden" value="bemmequer" name="cfg_codigo">
					</form>

				</div>
				<div id="cont4">
					<p class="titulo">
						Novidades
					</p>
					<p class="texto">
						Receba novidades do Bem Me Quer no seu
						e-mail.
					</p>
					<form method="post" action="news.php" enctype="multipart/form-data">
						<p class="form">
							Nome:
						</p>
						<input type="text" class="nome_form" name="nome" size"15"/>
						<p class="form3">
							E-mail:
						</p>
						<input type="text" class="email_form" name="email" size"15"/>
						<button type="submit" class="btn_cadastra" alt="Cadastrar" title="Cadastrar"></button>
					</form>

				</div>
				<div id="cont5">
					<p class="titulo">
						Servi&ccedil;os
					</p>
					<div id="slideshow">
						<?php
						include ("conecta.php");
						$s = "select * from servicos";
						$q = mysql_query($s);
						while ($r = mysql_fetch_array($q)) {
							$id = $r["id"];
							$titulo = $r["titulo"];
							$palavra_chave = $r["palavra_chave"];
							$subtitulo = $r["subtitulo"];
							$foto = "admin/servicos/" . $id . ".jpg";

							echo "<div id='group'><h2 id='noticia'>$titulo</h2>
<img class='img_pequena' src='$foto' alt='$titulo' title='$titulo'/>
<h3 id='noticia_sub'><a alt='$titulo' href='$palavra_chave.php''>$subtitulo</a></h3>
</div>";
						}
						?>
						</div>
						<div id="prev_next">
						<a href="#" id="prev2"><img style="border: none;" src="img/flecha_vermelha_esquerda.png"/></a>
						<a href="#" id="next2"><img style="border: none;" src="img/flecha_vermelha_direita.png"/></a>
						</div>
						</div>
						</div>
						<div id="rodape_box">
						<div id="logo_rodape">
						<img style="border: none;" src="img/logo_rodape.png" alt="Laborat&oacute;rio Bem me Quer" title="Laborat&oacute;rio Bem me Quer" />
						</div>
						<div id="info">
						<p class="info">
						Fone: (53) 3028.7728<br/>
						Andrade Neves, 3559
						</p>
						<p class="visual">Site melhor visualizado nos navegadores: IE9, Firefox e Chrome.</p>
						</div>
						<a href="http://www.nossositeweb.com.br" target="_blank">
						<div id="nosso_site"><img src="estrutura/nosso_site.png" style="border: none;" alt="NossoSite" title="NossoSite" />
						</div></a>
					</div>
				</div>
				<div id="rodape"></div>
				<div id="boxes">

					<!-- Janela Modal 
					<div id="dialog2" class="window" style="display: block; top: 180px; left: 460px; ">
						<div align="right">
							<input type="button" value="Fechar" class="close"/>
						</div>
						<img src="d.jpg" width="426" height="602" />
						<br />
					</div>
					<!-- Fim Janela Modal-->

					<!-- Máscara para cobrir a tela -->
					<div id="mask"></div>

				</div>
	</body>
</html>
