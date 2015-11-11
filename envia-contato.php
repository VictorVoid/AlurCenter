<?php
	session_start();
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	require_once("php-mailer/PHPMailerAutoload.php");

	$mail = new PHPMailer();//criando novo mailer
	$mail->isSMTP(); 
	$mail->Host = 'smtp.gmail.com';//pego o email e falo que eu quero setar o host dele pro meu servidor de smtp
	$mail->Port = 587;//porta do servidro smtp, depende do seu host
	$mail->SMTPSecure = 'tls';//usa protocolo de seguranca o tls, o mais famoso de email
	$mail->SMTPAuth = true; //autenticacao
	$mail->Username= "coloqueaquiousuario"; //usuario da loja
	$mail->Password= "suasenha"; //senha da loja

	$mail->setFrom (" {$email} ", "{$nome}");//quem ta enviando esse email e o nome
	$mail->addAdress("  "); //o endereco alvo, é quem vai receber esse email
	$mail->Subject = "Email de contato da loja";
	$mail->msgHTML ("<html>de: {$nome}</br>email:{$email}</br>mensgem:{$mensagem}</html>");
	$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem:{$mensagem}"; //alternativa de texto puro
	if ($mail->send()){
		$_SESSION["success"] = "Enviado com sucesso";
		header("Location: index.php");
	}else{
		$_SESSION['danger'] = "Erro ao enviar"+$mail->ErrorInfo;
		header("Location: contato.php");
	}
	die();
?>