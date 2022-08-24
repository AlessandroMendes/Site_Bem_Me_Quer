<?php
include ("topo.php");
?>
<div id="direita">
	<div id="pesqMarca">
		<fieldset>
			<legend>
				Listagem de Contatos para envio de Newsletter
			</legend>
			<form method="post" action="envia_news.php"enctype="multipart/form-data">
				<label>Mensagem:</label><textarea name="mensagem"></textarea>
				<table width=100%>
					<tr class="ltitulo">
						<td>Nome</td>
						<td>E-mail</td>
					</tr>
					<?php
						include ("conecta.php");

						$sql = "select * from news order by id";

						$comando = mysql_query($sql);
						$num = 0;

						while ($linha = mysql_fetch_array($comando)) {
							$codigo = $linha["id"];
							$nome = $linha["nome"];
							$email = $linha["email"];

							$num++;

							if ($num % 2 == 0)
								echo "<tr class='lsemcor'>";
							else
								echo "<tr class='lcor'>";

							echo " <td>$nome</td>";
							echo " <td>$email</td>";
							echo "</div>";
						}
					?>
		</fieldset>
		<input type="submit" value="Enviar Newsletter"/>
		</form>
	</div>
</div>