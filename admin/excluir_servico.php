<?php
	$cod  = $_GET["cod"];
	include("conecta.php");
	$sql = "delete from servicos where id = $cod";
	
	$comando = mysql_query($sql);
  if ($comando) {
    	echo "<script>
        	 	 alert('Serviço Excluído!');
        		 window.location.href='cad_servico.php';
          	 </script>";
  }  else {
  	echo "<script>
          alert('Erro... tente novamente');
          history.go(-1);
          </script>";
   	} 
   	mysql_close($conecta);
?>	