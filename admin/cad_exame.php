<?php include("topo.php"); ?>

<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>
<div id="direita">
	<div id="marcaForm">
			<fieldset>
				<legend>Cadastro de Exame</legend>
				<div id="dir_superior">
					<p class="itens">*Nome:</p> 	
					<p class="itens">*Descri&ccedil;&atilde;o:</p>
					
				</div>
				<div class="caixa_texto6">
					<form method="post" id="formMarca" action="cad_exame2.php" enctype="multipart/form-data">
						<input class="campos_cad" type="text" name="nome" />
						<textarea cols="15" class="campos_cad" name="descricao" id="elm1"></textarea>
						<input type="submit" value="Cadastrar"/>
						<input type="reset" value="Limpar"/>
					</form>	
				</div>
			</fieldset>
		</div>
		<div id="pesqMarca">
		<fieldset>
			<legend>Listar Conv&ecirc;nio</legend>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"enctype="multipart/form-data">
				<label>Nome do Exame:</label><input type="text" size=30 name="exame"/>
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
			 $exame = $_POST["exame"];
 
			 // empty: verifica se $nome ==""
			 
				 if (empty ($exame)or strlen($exame)< 3 ){
				 
				 echo "<script>
				 		alert('Informe pelo menos 3 caracteres do nome');
				 		        history.g(-1);
				 		        </script>";
				 exit;
				 }
							
	    include("conecta.php");
			  
	    $sql = "select * from exames where nome like '%$exame%'";
	
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
	    echo " <td><a href='alt_exame.php?cod=$codigo'><img src='img/update.png' width='22' height='22' title='Alterar Portfólio' /></a>&nbsp;
	    <a href='excluir_exame.php?cod=$codigo' onclick='return confirmaExclusao(\"$codigo\");' ><img src='img/close.png' width='22' height='22' title='Excluir Portifólio' /></a>
	    &nbsp;</a></td>";
		echo"</div>";	
	 }
?> 
 
		</fieldset>
	</div>	
		</fieldset>
	</div>	
</div>	