<?php
session_start();

$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$palavra_chave = $_POST["palavra_chave"];
$img = $_FILES["foto"]["tmp_name"];


include ('conecta.php');

if(empty($titulo)) {
	echo "<script> 
	alert('Preencha os campos obrigatórios!');
	 history.go(-1);
	  	  </script>";
		  exit;
}

$sqlVerificacao="select * from servicos where titulo = '$titulo'";
$dados = mysql_query($sqlVerificacao);

if(mysql_num_rows($dados) == 1) {
	
echo"<script>
		alert('Serviço já existente no sistema');
		history.go(-1);
	</script>";		
}	 
$sql = "insert into servicos (titulo,subtitulo,palavra_chave)values('$titulo','$subtitulo','$palavra_chave');";
$comando = mysql_query($sql);
$codigo  = mysql_insert_id($conecta); 

if($comando){
	
	echo"<script>
		alert('Serviço cadastrado com sucesso');
		window.location.href='cad_servico.php';
	</script>";
	 $destino = "servicos/" . $codigo . ".jpg";
		$origem  = $_FILES["foto"]["tmp_name"];
		copy($origem, $destino);
}else{
	echo"<script>
		alert('Erro...serviço não cadastrado');
		history.go(-1);
	</script>";
	
}
?>