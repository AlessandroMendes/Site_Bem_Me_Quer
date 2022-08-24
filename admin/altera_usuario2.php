<?php 

$codigo = $_GET["cod"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$data = date("Y-m-d");

include("conecta.php");


$sql = "update login set usuario = '$nome', email= '$email', usuario = '$login' where cod = $codigo";
$comando = mysql_query($sql);

if($comando){
	
	echo"<script>
		alert('Dados alterados com sucesso');
		window.location.href='cad_usuario.php';
	</script>";
	
}else{
	echo"<script>
		alert('Erro... dados não alterados');
		history.go(-1);
	</script>";
	
}


?>