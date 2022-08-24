<?php 
$palavra = addslashes(htmlentities(utf8_decode(trim($_POST["palavra"]))));

if ($palavra == "empresa") {
	echo"<script>window.location.href='empresa.php'</script>";
}else if ($palavra == "vacina" or $palavra == "vacinas")  {
	echo"<script>window.location.href='vacinas.php'</script>";
}else if ($palavra == "exame" or $palavra == "exames") {
	echo"<script>window.location.href='exames.php'</script>";
}else if ($palavra == "convenio" or $palavra == "convenios") {
	echo"<script>window.location.href='convenios.php'</script>";
}else if ($palavra == "faq" or $palavra == "duvida" or $palavra == "duvidas") {
	echo"<script>window.location.href='faq.php'</script>";
} else {
	echo"<script>
	alert('Nenhum dado foi encontrado em sua pesquisa')
	history.go(-1);
	</script>";
}
?>