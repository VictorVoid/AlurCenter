<?php include ('cabecalho.php');
	  include ('conecta.php');
	  include ('banco-categoria.php');
	  include ('logica-usuario.php');
	  verificaUsuario();
	  $categorias = listaCategorias($conexao);
?>	
	  
				<h1>Formulário de produto</h1>
			
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>Nome:</td>
				 <td><input type="text" name="nome" class="form-control"></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input type="number" name="preco" class="form-control"></td>
			</tr> 
			<tr>
				<td>Descricão</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php
						 foreach($categorias as $categoria):
					 ?>
						<option value="<?=$categoria['id']?>
									 "><?=$categoria['nome']?>
						</option>
				 	<?php endforeach?>
				 	</select>
			 	</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="usado" value="true">Usado</td>	
			</tr>
			<tr>
				<td><input type="submit" value="Cadastrar" class="btn btn-primary"></td>
			</tr>
			
		</table>
	</form>

<?php include ('rodape.php');?>