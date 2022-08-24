<?php
session_start();

$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$subtitulo_peq= $_POST["subtitulo_peq"];
$descricao = $_POST["descricao"];
$data = $_POST["data"];
$dataconv =  implode(preg_match("~\/~", $data) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $data) == 0 ? "-" : "/", $data)));
$img = $_FILES["foto"]["tmp_name"];


include ('conecta.php');

if(empty($titulo)) {
	echo "<script> 
	alert('Preencha os campos obrigatórios!');
	 history.go(-1);
	  	  </script>";
		  exit;
}

$sqlVerificacao="select * from dicas where titulo = '$titulo'";
$dados = mysql_query($sqlVerificacao);

if(mysql_num_rows($dados) == 1) {
	
echo"<script>
		alert('Notícia já existente no sistema');
		history.go(-1);
	</script>";		
}	 
$sql = "insert into dicas (titulo,subtitulo,sub_titulo_pequeno,descricao,data)values('$titulo','$subtitulo','$subtitulo_peq', '$descricao','$dataconv');";
$comando = mysql_query($sql);
$codigo  = mysql_insert_id($conecta); 

if($comando){
	
	echo"<script>
		alert('Dica cadastrada com sucesso');
		window.location.href='cad_noticia.php';
	</script>";
	 $destino = "dicas/" . $codigo . ".jpg";
		$origem  = $_FILES["foto"]["tmp_name"];
		copy($origem, $destino);
}else{
	echo"<script>
		alert('Erro...dica não cadastrada');
		history.go(-1);
	</script>";
	
}
?>