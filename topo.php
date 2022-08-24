<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//PT""http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Laborat&oacute;rio Bem Me Quer</title>
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/normalize2.css" type="text/css"/>
	<link rel="stylesheet" href="css/main2.css" type="text/css"/>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/more_show.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
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
  </head>
  <body>
  	<div id="faixa"></div>	
		<div id="container">
			<div id="topo">
				<div id="logo"><a href="index.php"><img style="border:none;" src="img/logo.PNG" title="Ir para Home" alt="Logo Marca Bem Me Quer"></a></div>
				<div id="pesquisa">
					<form action="pesquisa.php" method="post" enctype="multipart/form-data">
						<input type="text" style="border: 0px;" size="15" class="pesquisa" name="palavra" placeholder="Busca"/>
						<input type="submit" class="submit" style="border:0px;" value=""/>
					</form>
				</div>
			</div>   
			<div id="fdw">
				<!--nav-->
					<nav>
						<ul>
							<li class="current"><a href="index.php">Home<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
							</li>
							<li><a href="empresa.php">Quem Somos<img class="icone" src="img/icone_menu.png" style="border:none;"/></a></li>
							<li><a href="exames.php">Exames<img class="icone" src="img/icone_menu.png" /style="border:none;"></a></li>
							<li>
								<a href="vacinas.php">Vacinas<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
							</li>
							<li>
								<a href="convenios.php">Conv&ecirc;nios <img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
							</li>
							
							<li>
								<a href="convenios.php">Servi&ccedil;os<img class="icone" src="img/icone_menu.png" style="border:none;"/></a>
								<ul style="display: none;" class="sub_menu">
									<li class="arrow_top"></li>
									<li><a href="at_infantil.php">Atendimento Infantil</a></li>
									<li><a href="atendimento.php">Atendimento Domiciliar e <br/> Empresarial</a></li>
									<li><a href="serv_amb.php">Servi&ccedil;os Ambulatoriais</a></li>
									<li><a href="dicas.php">Dicas de Sa&uacute;de</a></li>
								</ul>
							</li>
						
							<li><a href="contato.php">Contato<img class="icone" src="img/icone_menu.png" style="border:none;"/></a></li>
						</ul>
					</nav>
		</div>