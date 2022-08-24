<?php
	$cod  = $_GET["cod"];
	include("conecta.php");
	$sql = "delete from convenios where id = $cod";
	
	$comando = mysql_query($sql);
  if ($comando) {
    	echo "<script>
        	 	 alert('Convenio Exclu�do!');
        		 window.location.href='cad_convenio.php';
          	 </script>";
  }  else {
  	echo "<script>
          alert('Erro... tente novamente');
          history.go(-1);
          </script>";
   	} 
   	mysql_close($conecta);
?>	