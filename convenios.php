<?php include("topo.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
	function showLoader(){
		$('.search-background').fadeIn(200);
	}
	function hideLoader(){
		$('.search-background').fadeOut(200);
	};
	
	$("#paging_button li").click(function(){
		showLoader();
		
		$("#paging_button li").css({'background-color' : ''});
		$(this).css({'background-color' : '#0893b9'});

		$("#content").load("data.php?page=" + this.id, hideLoader);
		
		return false;
	});
	
	$("#1").css({'background-color' : '#0893b9'});
	showLoader();
	$("#content").load("data.php?page=1", hideLoader);
});
</script>
<p class="titulo_convenio">Nossos Conv&ecirc;nios</p>
<p class="texto_convenio2">O Bem me Quer possui diversos conv&ecirc;nios para que possa atender da melhor maneira os seus clientes.</p>
<div id="direita2">
	<div id="convenio">
		<?php 
$per_page = 9;
include("conecta.php");
$sql = "select * from convenios order by id";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>
		 <div id="content"></div>
		 <div id="paging_button" align="center">
		<ul>
		<?php
		//Show page links
		for($i=1; $i<=$pages; $i++)
		{
			echo '<li id="'.$i.'">'.$i.'</li>';
		}?>
		</ul>
	</div>
	
	</div>
</div>
<div id="rodape_box">
				<div id="logo_rodape"><img src="img/logo_rodape.png" alt="Bem me Quer" title="Bem me Quer"/></div>
				<div id="info">
					<p class="info">
						Fone: (53) 3028.7728<br/>
						Andrade Neves, 3559
					</p>
					<p class="visual">Site melhor visualizado nos navegadores: IE9, Firefox e Chrome.</p>
				</div>
				<a href="http://www.nossositeweb.com.br" target="_blank"><div id="nosso_site"><img src="estrutura/nosso_site.png" alt="NossoSite" title="NossoSite"/></div></a>
</div>
</div>
<?php include("rodape.php"); ?>