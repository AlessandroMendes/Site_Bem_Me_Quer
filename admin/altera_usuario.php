<?php include("topo.php"); ?>
<?php 

$codigo = $_GET["cod"];

include("conecta.php");

$sql = "select * from login where cod = $codigo";
$dados = mysql_query($sql);

$linha = mysql_fetch_array($dados);
		$codigo       = $linha["cod"];	
		$nome      = $linha["nome"];
		$email         = $linha["email"];
		$login   = $linha["usuario"];
		$senha        = $linha["senha"];

?>

<div id="direita"> 
<div id="marcaForm">
			<fieldset>
				<legend>Alteração de Dados de Usuário</legend>
				<div id="dir_superior">
					<p class="itens">Nome:</p> 
					<p class="itens">E-Mail:</p>
					<p class="itens">Login:</p>
				</div>
				<div class="caixa_texto5">
					<form method="post" id="alterar" action="altera_usuario2.php?cod=<?php echo $codigo ?>" name="alt_usuario">
						<input type="text" class="campos_cad2" size"15" name="nome" value="<?php echo $nome ?>"/>
						<input type="text" class="campos_cad2" size"15" name="email" value="<?php echo $email ?>"/>
						<input type="text" class="campos_cad2" size"15" name="login" value="<?php echo $login ?>"/>
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
