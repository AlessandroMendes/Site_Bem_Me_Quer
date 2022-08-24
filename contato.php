<?php include("topo.php"); ?>
<div id="contato">
	<p class="titulo_contato">Contato</p>
	<p class="texto_contato">
		Em caso de d&uacute;vidas, sugest&otilde;es ou esclarecimentos, entre em
		contato conosco.Estamos &agrave; sua disposi&ccedil;&atilde;o e retornaremos o
		mais r&aacute;pido poss&iacute;vel.
	</p>
	<form method="post" action="envia.php" enctype="multipart/form-data">
		<input type="text" name="nome" class="nome" placeholder="Nome:" title="Digite seu Nome"/>
		<input type="text" name="tel" class="tel" placeholder="Telefone:" title="Digite seu Telefone"/>
		<input type="text" name="email" class="email" placeholder="E-mail:" title="Digite seu E-mail"/>
		<input type="assunto" name="assunto" class="assunto" placeholder="Assunto:" title="Digite o Assunto"/>
		<textarea name="mensagem" class="mensagem" placeholder="Mensagem:" title="Mensagem"></textarea>
		<input type="submit" value="Enviar" class="btn_contato"/>
	</form>
</div>
<div id="localizacao">
	<p class="titulo_local">Localiza&ccedil;&atilde;o</p>
	<div id="mapa">
		<iframe width="340" height="315" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=Rua+Andrade+Neves,+3559,+Pelotas+-+Rio+Grande+do+Sul&amp;sll=-31.753274,-52.336100&amp;hl=pt-BR&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Andrade+Neves,+3559+-+Centro,+Pelotas+-+Rio+Grande+do+Sul,+96020-080&amp;ll=-31.753274,-52.3361&amp;spn=0.005173,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.br/maps?q=Rua+Andrade+Neves,+3559,+Pelotas+-+Rio+Grande+do+Sul&amp;sll=-31.753274,-52.336100&amp;hl=pt-BR&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Andrade+Neves,+3559+-+Centro,+Pelotas+-+Rio+Grande+do+Sul,+96020-080&amp;ll=-31.753274,-52.3361&amp;spn=0.005173,0.010568&amp;t=m&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF; position:relative; top:5px; text-align:left; font-family: Tahoma,Arial, Helvetica, sans-serif; text-decoration: none; color:#089389;">Exibir mapa ampliado</a></small>
		<p class="info_local">
			Rua Andrade Neves, 3559<br/>
			Centro - Pelotas/RS<br/>
			CEP: 96020-080<br/>
			Fone:(53)3028.7728
		</p>
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
<?php include("rodape.php");?>
