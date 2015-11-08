<?php include ('cabecalho.php');
	  include ('conecta.php');
	  include ('banco-categoria.php');
	  include ('banco-produto.php');
	  $categorias = listaCategorias($conexao);
	  $id_produto = $_GET['id'];
	  $produto 	  = buscaProduto($conexao, $id_produto);
	  $usado 	  = $produto['usado'] ? "checked='checked'":"";
?>	
				<h1>Alterando produto</h1>
			
	<form action="altera-produto.php" method="post">
		<input type="hidden" name="id" value="<?= $produto['id']?>" >
		<table class="table">
			<tr>
				<td>Nome:</td>
				 <td><input type="text" name="nome" class="form-control" value="<?=$produto['nome']?>"></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input type="number" name="preco" class="form-control" value= "<?=$produto['preco']?>"></td>
			</tr> 
			<tr>
				<td>Descricão</td>
				<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php
						 foreach($categorias as $categoria):
						 $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];//$produto é a selecionada
						 $selecao = $essaEhACategoria ? "selected = 'selected'":"";
					 ?>
						<option value="<?=$categoria['id']?>
									 "<?=$selecao?>><?=$categoria['nome']?>
						</option>
				 	<?php endforeach?>
				 	</select>
			 	</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="usado" value="true" <?=$usado?>>Usado</td>	
			</tr>
			<tr>
				<td><input type="submit" value="Alterar" class="btn btn-primary"></td>
			</tr>
			
		</table>
	</form>

<?php include ('rodape.php');?>