<h1>Editar Fornecedor</h1>
<?php
	$sql = "SELECT * FROM fornecedor WHERE idfornecedor = ".$_REQUEST["idfornecedor"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>
<form action="index.php?page=sal-fornecedor" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idfornecedor" value="<?php print $_REQUEST["idfornecedor"]; ?>">
	<div class="form-group">
		<label>Nome do fornecedor</label>
		<input type="text" autocomplete="off" name="nomefornecedor" class="form-control" value="<?php print $row["nomefornecedor"]; ?>">
	</div>
	<div class="form-group">
		<button onclick="location.href='index.php?page=lis-fornecedor" class="btn btn-dark animated bounceInLeft"">Cancelar</button>
		<button type="submit" class="btn btn-dark animated bounceInRight"">Enviar</button>
	</div>
</form>