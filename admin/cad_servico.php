<?php include("topo.php"); ?>
<link href="css/jquery.click-calendario-1.0.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
<script type="text/javascript" src="js/jquery.click-calendario-1.0-min.js"></script>
<script type="text/javascript" src="js/jquery.click-calendario-1.0.js"></script>
<div id="direita">
	<div id="marcaForm">
			<fieldset>
				<legend>Cadastro de Not&iacute;cias</legend>
				<div id="dir_superior">
					<p class="itens">Titulo:</p> 
					<p class="itens">Subtitulo:</p>	
					<p class="itens">Palavra-Chave:</p>
					<p class="itens_foto">Foto:</p>
					
				</div>
				<div class="caixa_texto3">
					<form method="post" id="formMarca" action="cad_servico2.php" enctype="multipart/form-data">
						<input class="campos_cad" type="text" name="titulo" />
						<input class="campos_cad" type="text" name="subtitulo" />
						<input class="campos_cad" type="text" name="palavra_chave" />
						<input class="campos_img2" type="file" name="foto"/>
						<input type="submit" value="Cadastrar" class="btn_servico"/>
						<input type="reset" value="Limpar" class="btn_servico"/>
					</form>	
				</div>
			</fieldset>
		</div>
		<div id="pesqMarca">
		<fieldset>
			<legend>Listar Servi&ccedil;o</legend>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"enctype="multipart/form-data">
				<label>Nome da Servi&ccedil;o:</label><input type="text" size=30 name="nome"/>
                <input type="submit"value="Listar Servi&ccedil;o"/>
			</form>
			<table width=100%>
			  <tr class="ltitulo">
			   <td>Titulo</td>
			   <td>Subtitulo</td>
			   <td>Palavra-Chave</td>
			  </tr>
			<?php 
			error_reporting("1");
			 $nome = $_POST["nome"];
 
			 // empty: verifica se $nome ==""
			 
				 if (empty ($nome)or strlen($nome)< 3 ){
				 
				 echo "<script>
				 		alert('Informe pelo menos 3 caracteres do nome');
				 		        history.g(-1);
				 		        </script>";
				 exit;
				 }
							
	    include("conecta.php");
			  
	    $sql = "select * from servicos where titulo like '%$nome%'";
	
	    $comando = mysql_query($sql);
	    $num = 0;
	
	while ($linha = mysql_fetch_array($comando)) {
		$codigo       = $linha["id"];	
		$titulo      = $linha["titulo"];
		$subtitulo = $linha["subtitulo"];
		$descricao = $linha["palavra_chave"];
		$foto = "dicas/".$codigo.".jpg";
		
		$num++;
	    
		
		
	    if($num % 2 == 0)
	    	echo "<tr class='lsemcor'>";
	    else
	    	echo "<tr class='lcor'>";
	    	
	    	
	    echo " <td>$titulo</td>";
		echo " <td>$subtitulo</td>";
		echo " <td>$descricao</td>";
		echo "<td>$dataconv</td>";
	    echo " <td><a href='alt_servico.php?cod=$codigo'><img src='img/update.png' width='22' height='22' title='Alterar Portfólio' /></a>&nbsp;
	    <a href='excluir_servico.php?cod=$codigo' onclick='return confirmaExclusao(\"$codigo\");' ><img src='img/close.png' width='22' height='22' title='Excluir Portifólio' /></a>
	    &nbsp;</a></td>";
		echo"</div>";	
	 }
?> 
 
		</fieldset>
	</div>	
		</fieldset>
	</div>	
</div>	