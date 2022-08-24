<?php
  $email =addslashes(htmlentities(utf8_decode(trim($_POST["email"]))));
 
  include ("conecta.php"); 
  $sql =  "SELECT * FROM login WHERE email = '$email' ";

  $resposta = mysql_query($sql);
  


if(mysql_num_rows($resposta) > 0 ){


  $linha  = mysql_fetch_array($resposta);
  $codigo = $linha["cod"];	
  $email3 = $linha["email"];  
  $nome = $linha["nome"];

  $msg = "
              <h2 style='font-family:Verdana;'>Recupera&ccedil;&atilde;o de Senha</h2><br/>
              <div>Seu email: $email3</div>
              Se você quiser redefinir sua senha, clique <a href='http://127.0.0.1/bem_me_quer/admin/redefine_senha.php?cod=$codigo' target='_blank'>aqui</a>
              </div>";

require("class.phpmailer.php");
		$mail = new PHPMailer();
		
	$mail->IsHTML(true);                            // fun�ao que determina que o navegador ir� interpretar as tags HTML
		$mail->SetLanguage("br");						//Na classe, h� a op��o de idioma, setei como br
		$mail->isSMTP();								//Ativa o envio de e-mails por meio de SMTP
		$mail->Port     	= 587;						//Porta do servidor: 25,465 e 587
		$mail->Host     	= "smtp.nossositeweb.com.br";			//Servidor SMTP do Gmail
		$mail->SMTPAuth  	= true;						//Define a autentica��o como verdadeiro
		$mail->SMTPSecure 	= "TLS";					//Seguran�a
		$mail->Username  	= "contato@nossositeweb.com.br";	//Usu�rio do contato nossosite.
		$mail->Password		= "yasmim2010";			//Vari�vel que captura a senha para autenticar
		$mail->FromName  	= "Laboratório Bem Me Quer";				//Nome de quem t� mandando o email
		$mail->From		 	= "contato@nossositeweb.com.br";					//Email de quem ta mandando o email
		$mail->Subject 	 	= "Recuperação de Senha";					//Vari�vel do assunto
		$mail->Body			= $msg;				//Vari�vel da mensagem
		$mail->AddAddress($email);				//Endere�o com o par�metro entre parenteses
	
		//Verifica��o de envio. se o email for enviado ir� apresentar a mensagem OK sen�o dar� erro.
		
		if ($mail->send()){
			echo "<script> alert('Mensagem Enviada com Sucesso')
					window.location.href='login.php';
				</script>";
			
		}else{
			echo "<script>
			 alert('Mensagem não enviada');
			history.go(-1); 
			$mail->ErrorInfo;
			</script>";
		}

}else{
  echo "Não Consta na base de dados;
  		history.go(-1);
  ";

}
?>