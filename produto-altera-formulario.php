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
				<?php include ('produto-formulario-base.php');?>
			<tr>
				<td><input type="submit" value="Alterar" class="btn btn-primary"></td>
			</tr>
			
		</table>
	</form>

<?php include ('rodape.php');?>