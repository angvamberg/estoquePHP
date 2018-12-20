<h1>Editar Categoria</h1>
<?php
	$sql = "SELECT * FROM categoria WHERE idcategoria = ".$_REQUEST["idcategoria"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_assoc();
?>
<form action="index.php?page=sal-categoria" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idcategoria" value="<?php print $_REQUEST["idcategoria"]; ?>">
	<div class="form-group">
		<label>Nome da Categoria</label>
		<input type="text" autocomplete="off" name="nomecategoria" class="form-control" value="<?php print $row["nomecategoria"]; ?>">
	</div>
	<div class="form-group">
		<button onclick="location.href='index.php?page=lis-categoria" class="btn btn-dark animated bounceInLeft">Cancelar</button>
		<button type="submit" class="btn btn-dark animated bounceInRight">Enviar</button>
	</div>
</form> 