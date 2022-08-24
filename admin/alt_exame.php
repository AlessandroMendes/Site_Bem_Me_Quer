<?php include("topo.php"); ?>
<?php 

$cod = $_GET["cod"];

include("conecta.php");

$sql = "select * from exames where id = $cod";
$dados = mysql_query($sql);

$linha = mysql_fetch_array($dados);
		$nome      = $linha["nome"];
		$descricao = $linha["descricao"];
?>

<div id="direita"> 
<div id="marcaForm">
			<fieldset>
				<legend>Altera&ccedil;&atilde;o de Exames</legend>
				<div id="dir_superior">
					<p class="itens">* Nome:</p> 
					<p class="itens">Descri&ccedil;&atilde;o:</p>	
				</div>
				<div class="caixa_texto6">
					<form method="post" enctype="multipart/form-data" action="alt_exame2.php?cod=<?php echo $cod ?>">
						<input type="text" class="campos_cad" size"15" name="nome" value="<?php echo $nome ?>"/>
						<textarea cols="15" name="descricao"><?php echo $descricao ?></textarea>
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
