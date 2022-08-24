<?php 

$nome     = addslashes(htmlentities(utf8_decode(trim($_POST["nome"]))));
$telefone = addslashes(htmlentities(utf8_decode(trim($_POST["tel"]))));
$mensagem = addslashes(htmlentities(utf8_decode(trim($_POST["mensagem" ]))));
$email    = addslashes(htmlentities(utf8_decode(trim($_POST["email"]))));
$assunto  = addslashes(htmlentities(utf8_decode(trim($_POST["assunto"]))));

$email2   = "sac@bemmequer.med.br";

if ($nome ==""){
	echo "<script>
	        alert('Preencha o campo Nome');
	        document.location.href ='agendar.php'
	    </script>";
	
}
   
else if($telefone ==""){
	echo "<script>
	        alert('Preencha o campo Telefone');
	        document.location.href ='agendar.php'
	    </script>";
}   
		
else if($assunto ==""){
	echo "<script>
	        alert('Preencha o campo Assunto');
	        document.location.href ='agendar.php'
	    </script>";
}   
		
		//------------------------------------------
		
		//Instancia a classe phpmailer.php
		require("class.phpmailer.php");
		$mail = new PHPMailer();
		
		$mail->IsHTML(true);                            // fun�ao que determina que o navegador ir� interpretar as tags HTML
		$mail->SetLanguage("br");						//Na classe, h� a op��o de idioma, setei como br
		$mail->isSMTP();								//Ativa o envio de e-mails por meio de SMTP
		$mail->Port     	= 587;						//Porta do servidor: 25,465 e 587
		$mail->Host     	= "smtp.bemmequer.med.br";  //Servidor SMTP do Gmail
		$mail->SMTPAuth  	= true;					    //Define a autentica��o como verdadeiro
		$mail->Username  	= "sac@bemmequer.med.br";	//Usu�rio do contato nossosite.
		$mail->Password		= "30287728";			    //Vari�vel que captura a senha para autenticar
		$mail->FromName  	= "Site Bem Me Quer";		//Nome de quem t� mandando o email
		$mail->From		 	= "$email2";				//Email de quem ta recebendo o email
		$mail->Subject 	 	= $assunto;					//Vari�vel do assunto
		$mail->Body			= " <html>
									<body>
										<div align='center'><h2>Mensagem do(a) $nome </h2></div>
										<br/>
										<div style='text-align:justify;'>
											<h2>Assunto: $assunto</h2><br>
											<h3>Mensagem:  $mensagem.</h3>
											<br/><br/>
											<h4>Email para contato: $email || Telefone para contato: $telefone</h4><br>
											
										</div>
										<div><hr/></div>	
									</body>
								</html>";				//Vari�vel da mensagem
		$mail->AddAddress($email2);				    //Endere�o com o par�metro entre parenteses
	
		//Verifica��o de envio. se o email for enviado ir� apresentar a mensagem OK sen�o dar� erro.
		
		if ($mail->send()){
			echo "<script> alert('Mensagem Enviada com Sucesso!')
					window.location.href='index.php';
				</script>";
			
		}else{
			echo "<script> alert('Mensagem não enviada')</script>
			history.go(-1); ";	
		}
?>