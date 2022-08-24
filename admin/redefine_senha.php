<?php
$cod = $_GET["cod"];
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Bem Me Quer- Área Administrativa</title>
		<link rel="stylesheet" href="../admin/css/estilologin.css" type="text/css" />
	</head>
	<body>
		<div id="topo"></div>
		<div id="meio">
			<div id="conteiner">
				<div id="logo"></div>
		<div id="form">
		<form name="esqueceuSenha" method="post" action="redefine2.php?cod=<?php echo $cod; ?>">
			<input type="password" size="35" name="senha" class="inputLogin" style="border:1px solid;" placeholder="Digite uma senha nova"/>
			<input type="submit" value="Enviar" style="position:absolute; margin-left: 360px;">
			</button>
		</form>
		</div>
	</div>
				</div>

			</div>
			<div id="rodape"></div>
	</body>
</html>