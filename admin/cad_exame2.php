<?php
session_start();

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];


include ('conecta.php');

if(empty($nome)) {
	echo "<script> 
	alert('Preencha os campos obrigatórios!');
	 history.go(-1);
	  	  </script>";
		  exit;
}

$sqlVerificacao="select * from exames where nome = '$nome'";
$dados = mysql_query($sqlVerificacao);

if(mysql_num_rows($dados) == 1) {
	
echo"<script>
		alert('Exame já existente no sistema');
		history.go(-1);
	</script>";		
}	 
$sql = "insert into exames (nome,descricao)values('$nome','$descricao');";
$comando = mysql_query($sql);
$codigo  = mysql_insert_id($conecta); 

if($comando){
	
	echo"<script>
		alert('Exame cadastrado com sucesso');
		window.location.href='cad_exame.php';
	</script>";
}else{
	echo"<script>
		alert('Erro...exame não cadastrado');
		history.go(-1);
	</script>";
	
}
?>