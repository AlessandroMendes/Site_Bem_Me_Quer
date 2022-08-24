<?php include("topo.php"); ?>
<link href="css/jquery.click-calendario-1.0.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.click-calendario-1.0-min.js"></script>
<script type="text/javascript" src="js/jquery.click-calendario-1.0.js"></script>
<div id="direita">
	<div id="marcaForm">
			<fieldset>
				<legend>Cadastro de Not&iacute;cias</legend>
				<div id="dir_superior">
					<p class="itens">Titulo:</p> 
					<p class="itens">Subtitulo:</p>	
					<p class="itens">Subtitulo Pequeno:</p>
					<p class="itens">Descri&ccedil;&atilde;o:</p>
					<p class="itens_data">Data:</p>
					<p class="itens_foto">Foto:</p>
					
				</div>
				<div class="caixa_texto2">
					<form method="post" id="formMarca" action="cad_noticia2.php" enctype="multipart/form-data">
						<input class="campos_cad2" type="text" name="titulo" />
						<input class="campos_cad2" type="text" name="subtitulo" />
						<input class="campos_cad2" type="text" name="subtitulo_peq" />
						<textarea cols="15" class="campos_cad3" name="descricao" id="elm1"></textarea>
						<input type="text" name="data" class="campos_cad2" id="data" />
						<script type="text/javascript">
							$('#data').focus(function() {
							$(this).calendario({
								target : '#data',
								top : 40
							});
							});
						</script>
						<input class="campos_img" type="file" name="foto"/>
						<input type="submit" value="Cadastrar"/>
						<input type="reset" value="Limpar"/>
					</form>	
				</div>
			</fieldset>
		</div>
		<div id="pesqMarca">
		<fieldset>
			<legend>Listagem de Notícias</legend>
			<table width=100%>
			  <tr class="ltitulo">
			   <td>Titulo</td>
			   <td>Subtitulo</td>
			   <td>Data</td>
			   <td>A&ccedil;&otilde;es</td>
			  </tr>
			<?php 
	    include("conecta.php");
			  
	    $sql = "select * from dicas";
	
	    $comando = mysql_query($sql);
	    $num = 0;
	
	while ($linha = mysql_fetch_array($comando)) {
		$codigo       = $linha["id"];	
		$titulo      = $linha["titulo"];
		$subtitulo = $linha["subtitulo"];
		$descricao = $linha["descricao"];
		$data = $linha["data"];
		$destaque = $linha["destaque"];
		$dataconv =  implode(preg_match("~\/~", $data) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $data) == 0 ? "-" : "/", $data)));
		$foto = "dicas/".$codigo.".jpg";
		
	    
		
 if($destaque == 'x')
    	$complemento = "style='color: #ff0000'";
    else
    	$complemento = " ";	
    
    $num++;
    
    if($num % 2 == 0)
    	echo "<tr class='lsemcor' $complemento>";
    else
    	echo "<tr class='lcor' $complemento>";	
	    	
	    	
	    echo " <td>$titulo</td>";
		echo " <td>$subtitulo</td>";
		echo "<td>$dataconv</td>";
	    echo " <td><a href='alt_noticia.php?cod=$codigo'><img src='img/update.png' width='22' height='22' title='Alterar Portfólio' /></a>&nbsp;
	    <a href='excluir_noticia.php?cod=$codigo' onclick='return confirmaExclusao(\"$codigo\");' ><img src='img/close.png' width='22' height='22' title='Excluir Portifólio' /></a>
	    <a href='destaca.php?cod=$codigo'><img src='img/destaque.png'/></a>
	    &nbsp;</a></td>";
		echo"</div>";	
	 }
?> 
 
		</fieldset>
	</div>	
		</fieldset>
	</div>	
</div>	