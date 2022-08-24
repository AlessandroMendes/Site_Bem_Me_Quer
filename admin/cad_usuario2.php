<?php
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$data = date("Y-m-d");

	

include ('conecta.php');


$sqlVerificacao="select * from login where usuario = '$login'";
$dados = mysql_query($sqlVerificacao);

if(mysql_num_rows($dados) == 1) {
	
echo"<script>
		alert('Usuário já existente no sistema');
		history.go(-1);
	</script>";		
}	 

$sql = "insert into login (nome,senha,email,usuario)
values('$nome',sha1('$senha'),'$email','$login')";
$comando = mysql_query($sql);
$codigo  = mysql_insert_id($conecta); 

if($comando){
	
	echo"<script>
		alert('Usuário cadastrado com sucesso');
		window.location.href='cad_usuario.php';
	</script>";
	
	
}else{
	echo"<script>
		alert('Erro...usuário não cadastrado');
		history.go(-1);
	</script>";
	
}
?>