<?php 	require_once ('logica-usuario.php');
		require_once ('cabecalho.php');
?>

	<?php if (usuarioEstaLogado()){?>
	  		<p class="text-success">Você está logado como <?=usuarioLogado();?>
	  		<a href="logout.php">Deslogar</a></p>
	<?php }else{?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<p class="text-danger"> Login do ADMIN</p>
				<form class="form-inline" action="login.php" method="post">
					 <div class="form-group">
					    <label for="idmail">Email</label>
					    <input type="email" class="form-control" name="email" id="idmail" placeholder="jane.doe@example.com">
					 </div>
					  <div class="form-group">
					    <label for="idsenha">Senha</label>
					    <input type="password" class="form-control" name="senha" id="idsenha">
					 </div>
					 <button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	<?php }?>
<?php include ('rodape.php');?>