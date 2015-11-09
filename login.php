<?php 
include ('conecta.php');
include ('banco-usuario.php');
include ('logica-usuario.php');
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuarios = buscaUsuario($conexao, $email, $senha);
if ($usuarios == null){
	$_SESSION["danger"] = "Usuario ou senha inválido.";
	header("Location: index.php");
	die();
}else{
	$_SESSION["success"] = "Usuário logado com sucesso!";
	logaUsuario($email);
	header("Location: index.php?login=1");
}
