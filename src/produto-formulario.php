<?php require_once ('cabecalho.php');
	  require_once ('banco-categoria.php');
	  require_once ('logica-usuario.php');
	  verificaUsuario();
	  $produto = array("nome"=>"", "descricao"=> "", "preco"=>"", "categoria_id"=>"1");
	  $usado = "";
	  $categorias = listaCategorias($conexao);
?>	
	<div class="row">
		<div class="col-sm-8">
			<h1 class="text-primary">Formulário de produto</h1>
		</div>
	</div>	
	<form action="adiciona-produto.php" method="post" class="form-horizontal">
			<?php include ('produto-formulario-base.php'); ?>
			
		<input type="submit" value="Cadastrar" class="btn btn-primary"></td>
	</form>

<?php include ('rodape.php');?>