<?php
	session_start();
	function usuarioEstaLogado(){
		return isset($_SESSION["usuario_logado"]);
	}
	
	function verificaUsuario(){
		if (!usuarioEstaLogado()){
			header("Location: index.php");
			$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade." ;
		    die();
		}  
	}
	function usuarioLogado(){
		return $_SESSION["usuario_logado"];
	}
	function logaUsuario($email){
		$_SESSION["usuario_logado"] = $email;
	}
	function logout(){
		session_destroy();
		session_start(); //Depois que destroi ela toda, precisa criar para que possa ser criada em outro métodos.
	}