<?php

 	$cod         = $_GET["cod"];	
  	$nome     = $_POST["nome"];
	$descricao   = $_POST["descricao"];
	
  
  include("conecta.php");
  
  
  $sql = "update exames set nome = '$nome',
  		  descricao = '$descricao' where id = $cod"; 
  
  $comando = mysql_query($sql);
  
mysql_close($conecta);
  
  // Se ok
  if ($comando) {
  	
    echo "<script>
          alert('Ok! Exame Alterado Corretamente');
          window.location.href='cad_exame.php';
          </script>";
}    
  else {
    echo "<script>
          alert('Erro... Exame n&atilde;o Alterado');
          history.go(-1);
          </script>";
  }
?>  