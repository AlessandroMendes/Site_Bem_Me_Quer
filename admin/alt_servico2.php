<?php

 	$cod         = $_GET["cod"];	
  	$titulo     = $_POST["titulo"];
	$subtitulo     = $_POST["subtitulo"];
	$descricao   = $_POST["palavra_chave"];
	$foto        = $_FILES["foto"]["name"];
	
  
  include("conecta.php");
  
  
  $sql = "update servicos set titulo = '$titulo', subtitulo = '$subtitulo',
  		  palavra_chave = '$descricao' where id = $cod"; 
  
  $comando = mysql_query($sql);
  
mysql_close($conecta);
  
  // Se ok
  if ($comando) {
  	
    echo "<script>
          alert('Ok! Serviço Alterado Corretamente');
          window.location.href='cad_servico.php';
          </script>";
    
    if(! empty($foto)){   
    $destino = "servicos/" . $cod . ".jpg";
    $origem  = $_FILES["foto"]["tmp_name"];
    copy($origem, $destino);
    }    

}    
  else {
    echo "<script>
          alert('Erro... Serviço n&atilde;o Alterado');
          history.go(-1);
          </script>";
  }
?>  