<?php include("topo.php"); ?>
<?php 

$cod = $_GET["cod"];

include("conecta.php");

$sql = "select * from servicos where id = $cod";
$dados = mysql_query($sql);

$linha = mysql_fetch_array($dados);
		$titulo      = $linha["titulo"];
		$subtitulo      = $linha["subtitulo"];
		$descricao = $linha["palavra_chave"];
		$foto   	  = "servicos/" . $cod . ".jpg";

?>

<div id="direita"> 
<div id="marcaForm">
			<fieldset>
				<legend>Alteração de Servi&ccedil;os</legend>
				<div id="dir_superior">
					<p class="itens">Titulo:</p> 
					<p class="itens">Subtitulo:</p>
					<p class="itens">Palavra-Chave:</p>
					<p class="itens3">Imagem:</p>
				</div>
				<div class="caixa_texto3">
					<form method="post" enctype="multipart/form-data" action="alt_servico2.php?cod=<?php echo $cod ?>">
						<input type="text" class="campos_cad" size"15" name="titulo" value="<?php echo $titulo ?>"/>
						<input type="text" class="campos_cad" size"15" name="subtitulo" value="<?php echo $subtitulo ?>"/>
						<input type="text" class="campos_cad" size"15" name="palavra_chave" value="<?php echo $descricao ?>"/>
						<img class="img_noticia" src=<?php echo $foto ?> align='right' hspace=30/>
						<input type="file" class="foto" name="foto" id="foto"/>
						<input type="submit" class="btn_servico" value="Alterar"/>
						<input type="reset" class="btn_servico" value="Limpar"/>
					</form>	
				</div>
			</fieldset>
		</div>
</div>
</fieldset>
</div>
</body>
</html>
