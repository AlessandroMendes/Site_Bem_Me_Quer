<?php include("topo.php");?>
<div id="dicas">
	<h2>Dicas de Sa&uacute;de</h2>
	<?php 
		include("conecta.php"); 
		$s = "select * from dicas order by id";
		$q = mysql_query($s);
		
		while ($r=mysql_fetch_array($q)) {
			$id = $r["id"];
			$titulo = $r["titulo"];
			$subtitulo = $r["subtitulo"];
			
			
			echo "
				<div id='noticia_interna'>
					<h3>$titulo</h3>
					<p>$subtitulo</p>
					<a class='btn_dica' href='noticia.php?cod=$id'><img style='border:none;' alt='$titulo' title='$titulo' src='img/bt_leiamais.JPG'/></a>
				</div>
			";
		}
	?>
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
				<a href="http://www.nossositeweb.com.br" target="_blank"><div id="nosso_site"><img src="estrutura/nosso_site.png" style="border: none;" alt="NossoSite" title="NossoSite" /></div></a>
			</div>
</div>
		<footer id="rodape">
			<article id="rodape_box">
				<aside id="mini_logo">
					<img src="imagens/logo_mini.png"/>
				</aside>
				<aside id="conteudo_rodape">
					<h1>Siga-nos</h1>
					<div id="midias">
						<ul>
							<li><img src="imagens/tw.png" /></li>
							<li><img src="imagens/fb.png" /></li>
							<li><img src="imagens/rss.png" /></li>
						</ul>
					</div>
					<div id="info">
						<p>Criativa Sleep Confort</p>
						<p>Gal. Osório, 906</p> 
						<p>Fone: (53) 3305.7319 - Pelotas/RS</p>
						<div id="linha_r"></div>
					</div>
					<div id="info">
						<p>Criativa Móveis Planejados</p>
						<p>Gal. Osório, 804</p> 
						<p>Fone: (53) 3303.2718 - Pelotas/RS</p>
						<div id="linha_r"></div>
					</div>
					<div id="info2">
						<p>Criativa Sleep Confort e Móveis Planejados</p>
						<p>Av. Sete de Setembro, 229</p> 
						<p>Fone: (53) 3761.4002 - Camaquã/RS</p>
					</div>
				</aside>
				<aside id="nosso_site">
					<a href="http://www.nossositeweb.com.br" target="_blank">
						<img src="imagens/ns.png"/>
					</a>
				</aside>
			</article>
		</footer>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.justifiedGallery.js"></script>
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript">
			$("#mygallery").justifiedGallery();
		</script>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-2196019-1']);
			_gaq.push(['_trackPageview']);
		
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
	</script>
		</body>
		</html>