<?php 
  $cod = $_GET["cod"];
  
  include("conecta.php");

  $sql = "select destaque from dicas 
          where id = $cod";
  
  $dados = mysql_query($sql);
  
  $linha = mysql_fetch_array($dados);
  
  $destaque = $linha["destaque"];
  
  if ($destaque == " ")     
    $sql = "update dicas set destaque = 'x'
            where id = $cod";
  else
    $sql = "update dicas set destaque = ' '
            where id = $cod";  
  
  $comando = mysql_query($sql);
  
  mysql_close($conecta);
  
  echo "<script>
        window.location.href='cad_noticia.php';
        </script>";
?>      