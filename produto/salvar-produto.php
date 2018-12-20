<?php
$categoria = @$_REQUEST["idcategoria"];
$fornecedor = @$_REQUEST["idfornecedor"];
$nome = @$_REQUEST["nomeproduto"];
$id = @$_REQUEST["idproduto"];

switch($_REQUEST["acao"]){
	case "cadastrar":
	$sql = "INSERT INTO produto (idcategoria, idfornecedor, nomeproduto ) VALUES ({$categoria}, {$fornecedor}, '{$nome}')";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
		print "<br><div class='iconecentro'><img src='/estoqueCondor/assets/ok.png' class='animated bounce iconecentro' /></div>";
	}else{
		print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
	}
	
	break;
	case "editar":
	
	$sql = "UPDATE produto SET nomeproduto='{$nome}', idcategoria='{$categoria}', idfornecedor='{$fornecedor}' WHERE idproduto='{$id}'";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<script>location.href='index.php?page=lis-produto';</script>";
	}else{
		print "<script>alert('Ocorreu um erro.');</script>";
		print "<script>location.href='index.php?page=lis-produto';</script>";
	}
	
	break;
	case "excluir":
	
	$sql = "DELETE FROM produto WHERE idproduto='{$id}'";
	
	$res = $conn->query($sql);
	
	if($res==true){
		print "<script>location.href='index.php?page=lis-produto';</script>";
	}else{
		print "<script>alert('Ocorreu um erro.');</script>";
		print "<script>location.href='index.php?page=lis-produto';</script>";
	}

	break;
}
?>




