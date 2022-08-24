<?php
session_start();
$login=addslashes($_POST["login"]);
$senha=addslashes($_POST["senha"]);

include("conecta.php");
$sql="SELECT * FROM login WHERE (`usuario` = '".$login."') AND (`senha` = '". sha1($senha) ."')";

//executa o comando sql
$dados = mysql_query($sql);

	if (mysql_num_rows($dados) != 1) {    // Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
	    echo "<script> 
	    alert ('Login invalido!'); 
	    history.go(-1); 
	    </script>"; 
	} else {
	    // Salva os dados encontados na vari�vel $resultado
	    $resultado = mysql_fetch_assoc($dados);
	 // Se a sess�o n�o existir, inicia uma
	    if (!isset($_SESSION)) session_start();
	 
	    // Salva os dados encontrados na sess�o
	    $_SESSION['UsuarioSenha'] = $resultado['senha'];
	    $_SESSION['UsuarioNome'] = $resultado['usuario'];
	 
    // Redireciona o visitante
	    header("Location: index.php"); exit;
	}
	$login = $_SESSION['UsuarioNome'];
	 
	?>
