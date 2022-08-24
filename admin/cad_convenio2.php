<?php
session_start();

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$img = $_FILES["foto"]["tmp_name"];

 
include ('conecta.php');

if(empty($nome)) {
	echo "<script> 
	alert('Preencha os campos obrigatórios!');
	 history.go(-1);
	  	  </script>";
		  exit;
}
 
$sql = "insert into convenios (nome,descricao) values ('$nome','$descricao');";
$comando = mysql_query($sql);
$codigo  = mysql_insert_id($conecta); 

if($comando){
	
	echo"<script>
		alert('Convênio cadastrado com sucesso');
		window.location.href='cad_convenio.php';
	</script>";
		$destino = "fotos_convenios/" . $codigo . ".jpg";
		$origem  = $_FILES["foto"]["tmp_name"];
		copy($origem, $destino);}else{
	echo"<script>
		alert('Erro...modalidade não cadastrada');
		history.go(-1);
	</script>";
	
}
?>