<?php require_once ('cabecalho.php');
	  require_once ('banco-categoria.php');
	  require_once ('banco-produto.php');  
	  require_once('logica-usuario.php');
	  verificaUsuario();
	  $categorias = listaCategorias($conexao);
	  $id_produto = $_GET['id'];
	  $produto 	  = buscaProduto($conexao, $id_produto);
	  $usado 	  = $produto['usado'] ? "checked='checked'":"";
?>	
				<h1>Alterando produto</h1>			
	<form action="altera-produto.php" method="post" class="form-horizontal">
		<input type="hidden" name="id" value="<?= $produto['id']?>" >
		
		<?php include ('produto-formulario-base.php');?>
		<input type="submit" value="Alterar" class="btn btn-danger btn-lg">		
	</form>

<?php include ('rodape.php');?>