<?php
	$cod  = $_GET["cod"];
	include("conecta.php");
	$sql = "delete from dicas where id = $cod";
	
	$comando = mysql_query($sql);
  if ($comando) {
    	echo "<script>
        	 	 alert('Dica Excluída!');
        		 window.location.href='cad_noticia.php';
          	 </script>";
  }  else {
  	echo "<script>
          alert('Erro... tente novamente');
          history.go(-1);
          </script>";
   	} 
   	mysql_close($conecta);
?>	