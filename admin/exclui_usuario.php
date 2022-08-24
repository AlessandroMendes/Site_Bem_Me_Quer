<?php 
$cod = $_GET["cod"];

include ("conecta.php");

$sql = "delete from login where cod = $cod";
$comando = mysql_query($sql);

if($comando){
	echo"<script>
		alert('Usuário excluido com sucesso');
		window.location.href='cad_usuario.php';
	</script>";
}else{
	echo"<script>
		alert('Erro... usuário não excluido')
		history.go(-1);
	</script>";
	
}
?>