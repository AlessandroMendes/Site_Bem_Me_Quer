<?php

 	$cod         = $_GET["cod"];	
  	$nome     = $_POST["nome"];
	$descricao   = $_POST["descricao"];
	$foto        = $_FILES["foto"]["name"];
	
  
  include("conecta.php");
  
  
  $sql = "update convenios set nome = '$nome',
  		  descricao = '$descricao' where id = $cod"; 
  
  $comando = mysql_query($sql);
  
mysql_close($conecta);
  
  // Se ok
  if ($comando) {
  	
    echo "<script>
          alert('Ok! Convenio Alterado Corretamente');
          window.location.href='cad_convenio.php';
          </script>";
    
    if(! empty($foto)){   
    $destino = "fotos_convenios/" . $cod . ".jpg";
    $origem  = $_FILES["foto"]["tmp_name"];
    copy($origem, $destino);
    }    

}    
  else {
    echo "<script>
          alert('Erro... Conv&ecirc;nio n&atilde;o Alterado');
          history.go(-1);
          </script>";
  }
?>  