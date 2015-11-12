<?php 
	require_once ('cabecalho.php');
?>	
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h3 class="text-primary">Entre em contato:</h3>
				<form action="envia-contato.php" class="form-horizontal">	
						<div class="form-group">
							<label for="idnome" class="col-sm-2">Nome:</label>
							<div class="col-sm-10">
								<input id="idnome" type="text" name="nome" placeholder= "Nome completo" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="idemail" class="col-sm-2">Email:</label>
							<div class="col-sm-10">
								<input id="idemail" type="email" name="email" class="form-control"></td>
							</div>
						</div>
						<div class="form-group">
							<label for="idmensagem" class="col-sm-2">Mensagem:</label>
							<div class="col-sm-10">
								<textarea id="idmensagem" name="mensagem" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Enviar</button>
						</div>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php require ('rodape.php') ?>