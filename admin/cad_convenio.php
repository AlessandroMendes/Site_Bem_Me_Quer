<?php include("topo.php"); ?>

<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
<div id="direita">
	<div id="marcaForm">
			<fieldset>
				<legend>Cadastro de Conv&ecirc;nio</legend>
				<div id="dir_superior">
					<p class="itens">*Nome:</p> 
					<p class="itens">Imagem:</p>	
					<p class="itens">*Descri&ccedil;&atilde;o:</p>
					
				</div>
				<div class="caixa_texto">
					<form method="post" action="cad_convenio2.php" enctype="multipart/form-data">
						<input class="campos_cad" type="text" name="nome" />
						<input class="campos_img" type="file" name="foto" id="foto"/>
						<textarea cols="15" class="campos_cad" name="descricao"></textarea>
						<input type="submit" value="Cadastrar"/>
						<input type="reset" value="Limpar"/>
					</form>	
				</div>
			</fieldset>
		</div>
		<div id="pesqMarca">
		<fieldset>
			<legend>Listar Conv&ecirc;nio</legend>
			<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<label>Nome do Conv&ecirc;nio:</label><input type="text" size=30 name="conv"/>
                <input type="submit"value="Listar Conv&ecirc;nio"/>
			</form>
			<table width=100%>
			  <tr class="ltitulo">
			   <td>Nome</td>
			   <td>Descri&ccedil;&atilde;o</td>
			   <td>A&ccedil;&otilde;es</td>
			  </tr>
			<?php 
			error_reporting("1");
			 $conv = $_POST["conv"];
 
			 // empty: verifica se $nome ==""
			 
				 if (empty ($conv)or strlen($conv)< 3 ){
				 
				 echo "<script>
				 		alert('Informe pelo menos 3 caracteres do nome');
				 		        history.g(-1);
				 		        </script>";
				 exit;
				 }
							
	    include("conecta.php");
			  
	    $sql = "select * from convenios where nome like '%$conv%'";
	
	    $comando = mysql_query($sql);
	    $num = 0;
	
	while ($linha = mysql_fetch_array($comando)) {
		$codigo       = $linha["id"];	
		$conv      = $linha["nome"];
		$descricao = $linha["descricao"];
		
		$num++;
	    
		
		
	    if($num % 2 == 0)
	    	echo "<tr class='lsemcor'>";
	    else
	    	echo "<tr class='lcor'>";
	    	
	    	
	    echo " <td>$conv</td>";
		echo " <td>$descricao</td>";
	    echo " <td><a href='alt_convenio.php?cod=$codigo'><img src='img/update.png' width='22' height='22' title='Alterar Portfólio' /></a>&nbsp;
	    <a href='excluir_convenio.php?cod=$codigo' onclick='return confirmaExclusao(\"$codigo\");' ><img src='img/close.png' width='22' height='22' title='Excluir Portifólio' /></a>
	    &nbsp;</a></td>";
		echo"</div>";	
	 }
?> 
 
		</fieldset>
	</div>	
		</fieldset>
	</div>	
</div>	