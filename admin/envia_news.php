<?php 
session_start();
$mensagem = $_POST["mensagem"];
include("conecta.php");
$email2 ="sac@bemmequer.med.br";
$assunto ="E-mail para cliente";

		
		//Instancia a classe phpmailer.php
		include("class.phpmailer.php");
		$mail = new PHPMailer();
		
		$mail->IsHTML(true);                            // fun�ao que determina que o navegador ir� interpretar as tags HTML
		$mail->SetLanguage("br");						//Na classe, h� a op��o de idioma, setei como br
		$mail->isSMTP();								//Ativa o envio de e-mails por meio de SMTP
		$mail->Port     	= 587;						//Porta do servidor: 25,465 e 587
		$mail->Host     	= "smtp.bemmequer.med.br";			//Servidor SMTP do Gmail
		$mail->SMTPAuth  	= (true);						//Define a autentica��o como verdadeiro
		$mail->Username  	= "sac@bemmequer.med.br";	//Usu�rio do contato nossosite.
		$mail->Password		= "30287728";			//Vari�vel que captura a senha para autenticar
		$mail->FromName  	= "Bem Me Quer";				//Nome de quem t� mandando o email
		$mail->From		 	= "$email2";					//Email de quem ta recebendo o email
		$mail->Subject 	 	= $assunto;					//Vari�vel do assunto
		$mail->Body			= $mensagem;				//Vari�vel da mensagem
		
		$s = "select * from news";
		$q = mysql_query($s);

		while ($r = mysql_fetch_array($q)) {
			$mensagem = " 
						<html
							<body>
								<div align='center'><h2>O Laboratório Bem Me Quer está mandando e-mail pra você</h2></div>
								<br/>
								<div style='text-align:justify;'>
									<h3>Senhor(a) $r[nome]</h3>
									<h3>Mensagem:  $mensagem.</h3>
									<br/><br/>
								</div>
								<div><hr/></div>	
							</body>
						</html>";
			
			$mail->AddAddress($r["email"]);				//Endere�o com o par�metro entre parenteses
	
		//Verifica��o de envio. se o email for enviado ir� apresentar a mensagem OK sen�o dar� erro.
		
		if ($mail->send()){
			echo "<script> alert('Mensagem Enviada com Sucesso')
					window.location.href='index.php';
				</script>";
				//Limpando a lista de endereços
        $mail->ClearAddresses();

        //Aumentando o $i
		sleep(5);	
		
		}
        
		else{
			echo "<script> alert('Mensagem não enviada')</script>
			history.go(-1); 
				  $mail->ErrorInfo ";	
		}
		}
		$mail->ClearAddresses();
		$mail->ClearAttachments()
		
	
?>