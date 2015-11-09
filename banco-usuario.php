<?php
function buscaUsuario ($conexao, $email, $senha){
	$senhamd5 = md5($senha);
	$query = "select * from usuarios where email='{$email}' and senha='{$senhamd5}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
