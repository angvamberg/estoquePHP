<?php
$nomefornecedor = @$_REQUEST["nomefornecedor"];
$id = @$_REQUEST["idfornecedor"];

switch($_REQUEST["acao"]){
	case "cadastrar":
	$sql = "INSERT INTO fornecedor (nomefornecedor) VALUES ('{$nomefornecedor}')";
	
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
		print "<br><div class='iconecentro'><img src='/estoqueCondor/assets/ok.png' class='animated bounce iconecentro' /></div>";
	}else{
		print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
	}
	break;
	case "editar":
	$sql = "UPDATE fornecedor SET nomefornecedor='{$nomefornecedor}' WHERE idfornecedor='{$id}'";
	$res = $conn->query($sql) or die($conn->error);
	
	if($res==true){
		print "<script>location.href='index.php?page=lis-fornecedor';</script>";
	}else{
		print "<script>alert('Ocorreu um problema :(');</script>";
		print "<script>location.href='index.php?page=lis-fornecedor';</script>";
	}
	break;
	
	case "excluir":
$sql = "DELETE FROM fornecedor WHERE idfornecedor='{$id}'";
	
	$res = $conn->query($sql);
	
	if($res==true){
		print "<script>location.href='index.php?page=lis-fornecedor';</script>";
	}else{
		print "<script>alert('Ocorreu um problema :(');</script>";
		print "<script>location.href='index.php?page=lis-fornecedor';</script>";
	}
	break;
}


?>