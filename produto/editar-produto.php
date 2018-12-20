<h1>Editar Produto</h1>
<?php
	$sql = "SELECT * FROM produto WHERE idproduto = ".$_REQUEST["idproduto"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc(); 
?>
<form action="index.php?page=sal-produto" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idproduto" value="<?php print $_REQUEST["idproduto"]; ?>">
	<div class="form-group">
	<label>Nome do Produto</label>
	<input type="text" name="nomeproduto" class="form-control" value="<?php print $row["nomeproduto"]; ?>">
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
			print "<option>Sem categorias</option>";
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
	<button onclick="location.href='index.php?page=lis-produto" class="btn btn-dark animated bounceInLeft"">Cancelar</button>
	<button type="submit" class="btn btn-dark animated bounceInRight"">Enviar</button>
	</form>