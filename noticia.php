<?php 
include("topo.php");
include("conecta.php");
$cod = $_GET["cod"];

$s = "select * from dicas where id = $cod";
$q = mysql_query($s);

$r = mysql_fetch_array($q);

$id = $r["id"];
$titulo = $r["titulo"];
$subtitulo = $r["subtitulo"];
$descricao = $r["descricao"];
$data = $r["data"];
$dataconv =  implode(preg_match("~\/~", $data) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $data) == 0 ? "-" : "/", $data)));

$foto = "admin/dicas/". $id. ".jpg";
?>
<div id="noticia_grande">
	<h2 class="titulo_noticia"><?php echo "$titulo"; ?></h2>
	<h3 class="data_noticia">Publicada no dia <?php echo "$dataconv"; ?> pela revista Sa&uacute;de Legal.</h3>
	<p class="texto_noticia"><?php echo "$descricao"; ?></p>
	<div class="imagem_noticia">
		<img class="imagem_noticia" src=<?php echo $foto ?> />
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
				<a href="http://www.nossositeweb.com.br" target="_blank"><div id="nosso_site"><img src="estrutura/nosso_site.png" style="border: none;" alt="NossoSite" title="NossoSite" /></div></a>
			</div>
</div>
<?php include("rodape.php"); ?>