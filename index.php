<?php 	include ('logica-usuario.php');
		include ('cabecalho.php');
?>
	<h1> Bem vindo!</h1>

	<?php if (usuarioEstaLogado()){?>
	  		<p class="text-success">Você está logado como <?=usuarioLogado();?>
	  		<a href="logout.php">Deslogar</a></p>
	<?php }else{?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha" class="form-control"></td>
			</tr>
			<td>
				<td><button class="btn btn-primary">Login</button></td>
			</td>
		</table>
	</form>
	<?php }?>
<?php include ('rodape.php');?>