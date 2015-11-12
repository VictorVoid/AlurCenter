 <?php 
 		require_once ('mostra-alerta.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Victor's store</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/loja.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- *JS* -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav role="navigation "class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Navegação Responsiva</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">AlurCenter</a>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="produto-formulario.php">Adiciona Produto</a></li>
					<li><a href="produto-lista.php">Lista de produtos</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
	</nav>

	<div class="container">
		<div class="principal">
<?php 
	mostraAlerta("success");
  	mostraAlerta("danger");
?>