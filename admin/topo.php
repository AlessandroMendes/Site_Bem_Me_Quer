<?php
// A sessão precisa ser iniciada em cada página diferente

if (!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioNome'])) {
    // Destrói a sessão por segurança
 session_destroy();
    // Redireciona o visitante de volta pro login
    header("Location: login.php"); exit;

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	 <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Laborat&oacute;rio Bem Me Quer -&Aacute;rea Administrativa</title>
		<link rel="stylesheet" href="../admin/css/estilologin.css" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/jquery.maskedinput-1.1.4.pack.js"    type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#telefone").mask("(99)9999-9999");
				$("#cnpj").mask("99.999.999/9999-99");
				$("#cep").mask("99999-999");
			});
		</script>
		<script type="text/javascript" src="tinymce/jscripts/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "examples/lists/template_list.js",
        external_link_list_url : "examples/lists/link_list.js",
        external_image_list_url : "examples/lists/image_list.js",
        media_external_list_url : "examples/lists/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
	 </head>
<body>
	<div id="barralateral">
		<a href="index.php">
			<img src="../admin/img/1.png"/>
			<p class="info">P&aacute;gina Inicial</p>
		</a><br/>
		<a href="cad_convenio.php">
			<img src="../admin/img/3.png"/>
			<p class="info">Cadastrar Conv&ecirc;nios</p>
		</a><br/>
		<a href="cad_exame.php">
			<img src="../admin/img/2.png"/>
			<p class="info">Cadastrar Exame</p>
		</a><br/>
		<a href="cad_noticia.php">
			<img src="../admin/img/7.png"/>
			<p class="info">Cadastrar Not&iacute;cia</p>
		</a><br/>
		<a href="cad_servico.php">
			<img src="../admin/img/7.png"/>
			<p class="info">Cadastrar Servi&ccedil;o</p>
		</a><br/>
		<a href="email.php">
			<img src="../admin/img/4.png"/>
			<p class="info">Enviar E-mail de Newsletter</p>
		</a><br/>
		</br/>
		<a href="cad_usuario.php">
			<img src="../admin/img/5.png"/>
			<p class="info">Administrativo</p>
		</a><br/>
		<a href="logout.php">
			<img src="../admin/img/6.png"/>
			<p class="info">Sair</p>
		</a>
	</div>