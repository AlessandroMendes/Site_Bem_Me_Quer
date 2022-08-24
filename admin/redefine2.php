<?php
session_start();
$cod = $_GET["cod"];
$senha = $_POST["senha"];

include("conecta.php");

if(empty($senha)) {
	echo "<script> 
	alert('Campo obrigatório!');
	 history.go(-1);
	  	  </script>";
}

$sql = "update login set senha = sha1('$senha') where cod = $cod";
$comando = mysql_query($sql);

if($comando){
	
	echo"<script>
		alert('Senha alterada com sucesso');
		window.location.href='login.php';
	</script>";
	
}else{
	echo"<script>
		alert('Erro... senha não alterada');
		history.go(-1);
	</script>";
	
}


?>