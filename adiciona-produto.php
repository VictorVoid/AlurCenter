<?php include ('cabecalho.php');
	  include ('conecta.php');
	  include ('banco-produto.php');
/************************************/


	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id'];
	if ($preco == '' || $nome == ''){ 
		echo '<p class="text-danger"> O produto não foi adicionado!</p>';	
	}elseif (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){
		echo '<p class="text-success">Produto:'.$nome.' adicionado com sucesso! Preco: '.$preco.'</p>';
	}else{
		echo '<p class="text-danger"> O produto não foi adicionado!</p>';
	}
	include ('rodape.php');

?>