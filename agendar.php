<?php include("topo.php"); ?>
<link href="css/jquery.click-calendario-1.0.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.click-calendario-1.0.js"></script>
<script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-1.2-utf8.js"></script>
<script type="text/javascript">
window.onload = function() {
  new dgCidadesEstados({
    estado: document.getElementById('estado'),
    cidade: document.getElementById('cidade')
  });
}
</script>
<div id="agenda">
	<p class="agenda">Agende aqui seu exame ou vacina</p>
	<div id="form_agenda">
		<form method="post" enctype="multipart/form-data" action="registra_agenda.php">
			<label class="label_form">Nome:</label><input type="text" name="nome" class="nome"/>
			<label class="label_form">E-mail:</label><input type="text" name="email" class="email2" />
			<label class="label_form">Telefone:</label><input type="text" name="tel" class="tel2" />
			<label class="label_form">Exame(s):</label><input type="text" name="exame" class="assunto2" /><br/>
			<p class="opcao">Op&ccedil;&atilde;o 1</p>
			<label class="label_form">Data :</label><input type="text" name="data" class="data" id="data"/>
			<script type="text/javascript">
						$('#data').focus(function() {
							$(this).calendario({
								target : '#data',
								top : 40
							});
						});
					</script>
			<label class="label_form">Hora :</label><select name="hora" class="hora">
				<option>07:00</option>
				<option>07:15</option>
				<option>07:30</option>
				<option>07:45</option>
				<option>08:00</option>
				<option>08:15</option>
				<option>08:30</option>
				<option>08:45</option>
				<option>09:00</option>
				<option>09:15</option>
				<option>09:30</option>
				<option>09:45</option>
				<option>10:00</option>
				<option>10:15</option>
				<option>10:30</option>
				<option>10:45</option>
				<option>11:00</option>
			</select><br/>
			<p class="opcao">Op&ccedil;&atilde;o 2</p>	
			<label class="label_form">Data :</label><input type="text" name="data2" class="data2" id="data2"/>
			<script type="text/javascript">
						$('#data2').focus(function() {
							$(this).calendario({
								target : '#data2',
								top : 40
							});
						});
					</script>
			<label class="label_form">Hora :</label><select name="hora2" class="hora2">
				<option>07:00</option>
				<option>07:15</option>
				<option>07:30</option>
				<option>07:45</option>
				<option>08:00</option>
				<option>08:15</option>
				<option>08:30</option>
				<option>08:45</option>
				<option>09:00</option>
				<option>09:15</option>
				<option>09:30</option>
				<option>09:45</option>
				<option>10:00</option>
				<option>10:15</option>
				<option>10:30</option>
				<option>10:45</option>
				<option>11:00</option>
			</select>
			<label class="label_form">Endere&ccedil;o:</label><input type="text" name="endereco" class="endereco"/>
			<label class="label_form">Estado:</label><select name="estado" class="estado" id="estado"></select>
			<label class="label_form">Cidade:</label><select name="cidade" class="cidade" id="cidade"></select>
			<input type="submit" value="Agendar" class="btn_agenda"/>
		</form>
	</div>
</div>
<div id="rodape_box">
				<div id="logo_rodape">
					<img style="border: none;" src="img/logo_rodape.png" alt="Laborat&oacute;rio Bem me Quer" title="Laborat&oacute;rio Bem me Quer" />
				</div>
				<div id="info">
					<p class="info">
						Fone: (53) 3028.7728<br/>
						Andrade Neves, 3559
					</p>
					<p class="visual">Site melhor visualizado nos navegadores: IE9, Firefox e Chrome.</p>
				</div>
				<a href="http://www.nossositeweb.com.br" target="_blank"><div id="nosso_site"><img src="estrutura/nosso_site.png" style="border: none;" alt="NossoSite" title="NossoSite" /></div></a>
			</div>
</div>
<?php include("rodape.php"); ?>