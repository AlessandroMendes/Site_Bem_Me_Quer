<?php 
// A sessão precisa ser iniciada em cada página diferente
session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION["UsuarioNome"])) {
    // Destrói a sessão por segurança
 session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: login.php"); exit;

}else
	   $login = $_SESSION["UsuarioNome"];	
?>
<?php include("topo.php"); ?>
	<div id="direita">
		<div id="welcome">
			<p class="welcome">Bem vindo ao setor administrativo, <?php echo $login ?>.</p>
		</div>
	</div>
</body>
</html>