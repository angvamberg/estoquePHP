<h1>Cadastrar Produto</h1>
<form action="index.php?page=sal-produto" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nomeproduto" class="form-control" autocomplete="off">
	</div>

	<?php
		$sql = "SELECT * FROM categoria";
		
		$res = $conn->query($sql);
		
		print "<div class='form-group'>";
		print "<label>Categoria</label>";
		
		print "<select name='idcategoria' class='form-control'>";
		if($res->num_rows > 0){		
			while($row = $res->fetch_assoc()){
				print "<option value='".$row["idcategoria"]."'>".$row["nomecategoria"]."</option>";
			}		
		}else{
			print "<option>Sem categorias/option>";
		}
		print "</select>";
		
		print "</div>";
		
		print "<div class='form-group'>";
		print "<label>Fornecedor</label>";
		
		$sql = "SELECT * FROM fornecedor";
		
		$res = $conn->query($sql);
		
		print "<select name='idfornecedor' class='form-control'>";
		if($res->num_rows > 0){		
			while($row = $res->fetch_assoc()){
				print "<option value='".$row["idfornecedor"]."'>".$row["nomefornecedor"]."</option>";
			}		
		}else{
			print "<option>Sem fornecedores</option>";
		}
		print "</select>";
		
		print "</div>";
	?>
	<button type="submit" class="btn btn-dark">Enviar</button>
</form>



















