<?php include("topo.php"); ?>
<div id="direita">
	<div id="marcaForm">
			<fieldset>
				<legend>Cadastro de Usuários do Sistema Administrativo</legend>
				<div id="dir_superior">
					<p class="itens">Nome:</p> 
					<p class="itens">E-Mail:</p>
					<p class="itens">Login:</p>
					<p class="itens">Senha:</p>	
				</div>
				<div class="caixa_texto3">
					<form method="post" id="formUsuario" action="cad_usuario2.php" name="usuario">
						<input type="text" class="campos_cad" size"15" name="nome"/>
						<input type="text" class="campos_cad" size"15" name="email"/>
						<input type="text" class="campos_cad" size"15" name="login"/>
						<input type="password" class="campos_cad" size"15" name="senha"/>
						<input type="submit" value="Cadastrar"/>
						<input type="reset" value="Limpar"/>
					</form>	
				</div>
			</fieldset>
		</div>
	<div id="pesqMarca">
		<fieldset>
			<legend>Listar Usuários Cadastrados</legend>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"enctype="multipart/form-data">
				<label >Nome do Usuário:</label><input type="text" size=30 name="usuario"/>
                <input type="submit"value="Listar Usuários"/>
			</form>
			<table width=100%>
			  <tr class="ltitulo">
			   <td>Nome</td>
			   <td>E-Mail</td>
			   <td>Login</td>
			   <td>Senha</td>
			   <td>Ações</td>
			  </tr>
			<?php 
			error_reporting("1");
			 $usuario = $_POST["usuario"];
 
			 // empty: verifica se $nome ==""
			 
				 if (empty ($usuario) or strlen ($usuario)< 3 ){
				 
				 echo "<script>
				 		alert('Informe pelo menos 3 caracteres do nome');
				 		        history.g(-1);
				 		        </script>";
				 exit;
				 }
							
	    include("conecta.php");
			  
	    $sql = "select * from login where usuario like '%$usuario%'";
	
	    $comando = mysql_query($sql);
	    $num = 0;
	
	while ($linha = mysql_fetch_array($comando)) {
		$codigo       = $linha["cod"];	
		$nome      = $linha["nome"];
		$email         = $linha["email"];
		$login   = $linha["usuario"];
		$senha        = $linha["senha"];
		
		$num++;
	    
		
		
	    if($num % 2 == 0)
	    	echo "<tr class='lsemcor'>";
	    else
	    	echo "<tr class='lcor'>";
	    	
	    	
	    echo " <td>$nome</td>";
		echo " <td>$email</td>";
		echo " <td>$login</td>";
		echo " <td>$senha</td>";
	    echo " <td><a href='altera_usuario.php?cod=$codigo'><img src='img/update.png' width='22' height='22' title='Alterar Dados de Usuário' /></a>&nbsp;
	    <a href='exclui_usuario.php?cod=$codigo' onclick='return confirmaExclusao(\"$codigo\");' ><img src='img/close.png' width='22' height='22' title='Excluir Usuário' /></a>
	    &nbsp;</a></td>";
		echo"</div>";	
	 }
?> 
 
		</fieldset>
	</div>	