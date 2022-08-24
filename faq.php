<?php include("topo.php"); ?>

<div id="menu_esquerda">
	<p class="titulo_exame">Exames</p>
	<ul>
		<li><a href="orientacao.php">Exames e Orienta&ccedil;&otilde;es                  <img  src="img/seta.png" style="border:none; position: relative; margin-left:216px;  bottom:10px; "/></a></li>
		<li><a href="faq.php">       D&uacute;vidasFrequentes                    <img  src="img/seta.png"/ style="border:none; position: relative; margin-left:216px; bottom:10px;"></a></li>
	</ul>
</div>	
<div id="direita_faq">
	<?php 
		include("conecta.php");
		$s = "select * from faq order by id";
		$q = mysql_query($s);
		while($r=mysql_fetch_array($q)) {
			$pergunta = $r["pergunta"];
			$resposta = $r["resposta"];
			
			
			echo "<div class='demo-show2'>
			       <h3 class='titulo'>$pergunta</h3>
			       <div class='resposta' >$resposta</div>
			      </div>";
		}
	?>
</div>
<div id="rodape_box">
				<div id="logo_rodape"></div>
				<div id="info">
					<p class="info">
						Fone: (53) 3028.7728<br/>
						Andrade Neves, 3559
					</p>
					<p class="visual">Site melhor visualizado nos navegadores: IE9, Firefox e Chrome.</p>
				</div>
				<a href="http://www.nossositeweb.com.br" target="_blank"><div id="nosso_site"></div></a>
</div>
</div>
<?php include("rodape.php");?>