<?php include("topo.php"); ?>
<?php 

$cod = $_GET["cod"];

include("conecta.php");

$sql = "select * from dicas where id = $cod";
$dados = mysql_query($sql);

$linha = mysql_fetch_array($dados);
		$titulo      = $linha["titulo"];
		$subtitulo      = $linha["subtitulo"];
		$subtitulo_p = $linha["sub_titulo_pequeno"];
		$descricao = $linha["descricao"];
		$data = $linha["data"];
		$foto   	  = "dicas/" . $cod . ".jpg";

?>

<div id="direita"> 
<div id="marcaForm">
			<fieldset>
				<legend>Alteração de Marcas</legend>
				<div id="dir_superior">
					<p class="itens">Titulo:</p> 
					<p class="itens">Subtitulo:</p>
					<p class="itens">Subtitulo Menor:</p>
					<p class="itens">Descri&ccedil;&atilde;o:</p>
					<p class="itens2">Data:</p>	
					<p class="itens3">Imagem:</p>
				</div>
				<div class="caixa_texto4">
					<form method="post" enctype="multipart/form-data" action="alt_noticia2.php?cod=<?php echo $cod ?>">
						<input type="text" class="campos_cad2" size"15" name="titulo" value="<?php echo $titulo ?>"/>
						<input type="text" class="campos_cad2" size"15" name="subtitulo" value="<?php echo $subtitulo ?>"/>
						<input type="text" class="campos_cad2" size"15" name="subtitulo_p" value="<?php echo $subtitulo_p ?>"/>
						<textarea cols="15" name="descricao" id="elm1"><?php echo $descricao ?></textarea>
						<input type="text" class="campos_cad2" size"15" name="data" value="<?php echo $data ?>"/>
						<img class="img_noticia" src=<?php echo $foto ?> align='right' hspace=30/>
						<input type="file" name="foto" id="foto"/>
						<p class="campo">* - Campo  obrigat&oacute;rio</p>
						<input type="submit" value="Alterar"/>
						<input type="reset" value="Limpar"/>
					</form>	
				</div>
			</fieldset>
		</div>
</div>
</fieldset>
</div>
</body>
</html>
