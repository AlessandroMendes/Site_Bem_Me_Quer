<?php 
$email = $_POST["email"];

include("conecta.php");

$s = "insert into news (email) values ('$email')";
$q = mysql_query($s);

$codigo  = mysql_insert_id($conecta); 

if ($q) {
	echo"<script>
	alert('Cadastrado com Sucesso');
    window.location.href='index.php';
    </script>";
}else {
	echo"<script>
	alert('Erro, preencha todos os campos');
	 history.go(-1);
	 </script>";
}
?>