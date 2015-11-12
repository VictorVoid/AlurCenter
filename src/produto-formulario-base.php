				<div class="form-group">
					<label for="idnome" class="col-sm-2">Nome:</label>
					<div class="col-sm-10">
						<input id="idnome"type="text" name="nome" class="form-control" value="<?=$produto['nome']?>">
					</div>
				</div>
				<div class="form-group">
					<label for="idpreco" class="col-sm-2">Preço:</label>
					<div class="col-sm-10">
						<input id="idpreco" type="number" name="preco" class="form-control" value= "<?=$produto['preco']?>">
					</div>
				</div> 
				<div class="form-group">
					<label for="iddescricao" class="col-sm-2">Descricão</label>
					<div class="col-sm-10">
						<textarea  id="iddescricao"class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="idselect" class="col-sm-2">Categoria</label>
						<div class="col-sm-10">
							<select name="categoria_id" class="form-control" id="idselect">
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
					 	</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-3">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="usado" value="true" <?=$usado?>>Usado
							</label>
						</div>	
					</div>
				</div>
