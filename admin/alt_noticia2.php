<?php

 	$cod         = $_GET["cod"];	
  	$titulo     = $_POST["titulo"];
	$subtitulo     = $_POST["subtitulo"];
	$descricao   = $_POST["descricao"];
	$data     = $_POST["data"];
	$foto        = $_FILES["foto"]["name"];
	
  
  include("conecta.php");
  
  
  $sql = "update dicas set titulo = '$titulo', subtitulo = '$subtitulo',
  		  descricao = '$descricao', data = '$data' where id = $cod"; 
  
  $comando = mysql_query($sql);
  
mysql_close($conecta);
  
  // Se ok
  if ($comando) {
  	
    echo "<script>
          alert('Ok! Dica Alterada Corretamente');
          window.location.href='cad_noticia.php';
          </script>";
    
    if(! empty($foto)){   
    $destino = "dicas/" . $cod . ".jpg";
    $origem  = $_FILES["foto"]["tmp_name"];
    copy($origem, $destino);
    }    

}    
  else {
    echo "<script>
          alert('Erro... Dica n&atilde;o Alterada');
          history.go(-1);
          </script>";
  }
?>  