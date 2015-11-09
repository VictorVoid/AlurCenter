<?php
	/* **************************
		BANCO DE DADOS DOS PRODUTOS
	   **************************
	*/
	function listaProdutos($conexao){
		$produtos = array();
		$query = "SELECT p.*, c.nome as categoria_nome FROM produtos as p join categorias as c on c.id=p.categoria_id";
		$exQuery = mysqli_query($conexao, $query);
		while ($produto = mysqli_fetch_assoc($exQuery)){  
			array_push ($produtos, $produto);
		}
		return $produtos;
	}
	function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
		$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}','{$preco}', '{$descricao}', '{$categoria_id}','{$usado}')";
		$resultadoDaInsercao = mysqli_query($conexao, $query);
		return $resultadoDaInsercao;
	}
	function removeProduto($conexao, $id){
		$query = "DELETE from produtos WHERE id=$id";
		return mysqli_query($conexao, $query);
	}
	function buscaProduto($conexao, $id){
		$query = "SELECT * FROM produtos where id=$id";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}
	function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
		$query = "UPDATE produtos set nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria_id}, usado ={$usado} WHERE id='{$id}'";
		return mysqli_query($conexao, $query);		
	}