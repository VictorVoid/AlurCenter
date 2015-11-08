<?php include ('cabecalho.php');
	  include ('conecta.php');
	  include ('banco-produto.php');
/************************************/
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];	

	if (array_key_exists('usado', $_POST)){
		$usado  = "1";
	}else{
		$usado = "0";
	}

	if ($preco == '' || $nome == ''){ 
		echo '<p class="text-danger"> O produto não foi alterado!</p>';	
	}elseif (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){
		echo '<p class="text-success">Produto:'.$nome.' alterado com sucesso! Preco: '.$preco.'</p>';
	}else{
		echo '<p class="text-danger"> O produto não foi alterado!</p>';
	}
	include ('rodape.php');

?>