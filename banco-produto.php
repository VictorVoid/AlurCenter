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

	function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
		$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id ) values ( '{$nome}','{$preco}', '{$descricao}', {$categoria_id})";
		$resultadoDaInsercao = mysqli_query($conexao, $query);
		return $resultadoDaInsercao;
	}

	function removeProduto($conexao, $id){
		$query = "DELETE from produtos WHERE id=$id";
		return mysqli_query($conexao, $query);
	}
	