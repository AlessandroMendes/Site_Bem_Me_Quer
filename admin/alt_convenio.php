<?php include("topo.php"); ?>
<?php 

$cod = $_GET["cod"];

include("conecta.php");

$sql = "select * from convenios where id = $cod";
$dados = mysql_query($sql);

$linha = mysql_fetch_array($dados);
		$nome      = $linha["nome"];
		$descricao = $linha["descricao"];
		$foto   	  = "fotos_convenios/" . $cod . ".jpg";

?>

<div id="direita"> 
<div id="marcaForm">
			<fieldset>
				<legend>Altera&ccedil;&atilde;o de Marcas</legend>
				<div id="dir_superior">
					<p class="itens">* Nome:</p> 
					<p class="itens">Imagem:</p>
					<p class="itens">Descri&ccedil;&atilde;o:</p>	
				</div>
				<div class="caixa_texto7">
					<form method="post" enctype="multipart/form-data" action="alt2.php?cod=<?php echo $cod ?>">
						<input type="text" class="campos_cad" size"15" name="nome" value="<?php echo $nome ?>"/>
						<textarea cols="15" name="descricao"><?php echo $descricao ?></textarea>
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
