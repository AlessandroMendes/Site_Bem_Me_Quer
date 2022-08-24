<?php include("topo.php"); ?>
<div id="menu_esquerda">
	<p class="titulo_exame">Exames</p>
	<ul>
		<li><a href="orientacao.php">Exames e Orienta&ccedil;&otilde;es                 <img  src="img/seta.png" style="border:none; position: relative; margin-left:216px;  bottom:10px; "/></a></li>
		<li><a href="faq.php">       D&uacute;vidas Frequentes                    <img  src="img/seta.png"/ style="border:none; position: relative; margin-left:216px; bottom:10px;"></a></li>
	</ul>
</div>	
<div id="exames_interno">
	<div class="img_exame2">
		<ul>
			<li><a href="orientacao_interno.php?letra=a">A</a></li>
			<li><a href="orientacao_interno.php?letra=b">B</a></li>
			<li><a href="orientacao_interno.php?letra=c">C</a></li>
			<li><a href="orientacao_interno.php?letra=d">D</a></li>
			<li><a href="orientacao_interno.php?letra=e">E</a></li>
			<li><a href="orientacao_interno.php?letra=f">F</a></li>
			<li><a href="orientacao_interno.php?letra=g">G</a></li>
			<li><a href="orientacao_interno.php?letra=h">H</a></li>
			<li><a href="orientacao_interno.php?letra=i">I</a></li>
			<li><a href="orientacao_interno.php?letra=j">J</a></li>
			<li><a href="orientacao_interno.php?letra=k">K</a></li>
			<li><a href="orientacao_interno.php?letra=l">L</a></li>
			<li><a href="orientacao_interno.php?letra=m">M</a></li>
			<li><a href="orientacao_interno.php?letra=n">N</a></li>
			<li><a href="orientacao_interno.php?letra=o">O</a></li>
			<li><a href="orientacao_interno.php?letra=p">P</a></li>
			<li><a href="orientacao_interno.php?letra=q">Q</a></li>
			<li><a href="orientacao_interno.php?letra=r">R</a></li>
			<li><a href="orientacao_interno.php?letra=s">S</a></li>
			<li><a href="orientacao_interno.php?letra=t">T</a></li>
			<li><a href="orientacao_interno.php?letra=u">U</a></li>
			<li><a href="orientacao_interno.php?letra=v">V</a></li>
			<li><a href="orientacao_interno.php?letra=w">W</a></li>
			<li><a href="orientacao_interno.php?letra=x">X</a></li>
			<li><a href="orientacao_interno.php?letra=y">Y</a></li>
			<li><a href="orientacao_interno.php?letra=z">Z</a></li>
		</ul>
	</div>
    <?php
		include("conecta.php");
		$letra = $_GET["letra"];
		
		$s = "select * from exames where nome like '$letra%' order by nome asc";
		$q = mysql_query($s);
		while ($r= mysql_fetch_array($q)) {
			$nome = $r["nome"];
			$descricao = $r["descricao"];
	echo 		
	"<ul>
		<li><span>$nome</span><br/>$descricao</li>
	</ul>	";
		}
		
	
			
		  // Libera o vetor $dados e fecha a conex�o
		 // mysql_free_result($dados);
						mysql_close($conecta);
	?>
      </div>

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
<?php include("rodape.php"); ?>	 