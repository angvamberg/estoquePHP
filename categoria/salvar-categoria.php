<?php
	$nomecategoria = @$_REQUEST["nomecategoria"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO categoria (nomecategoria) VALUES ('{$nomecategoria}')";
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
				print "<br><div class='iconecentro'><img src='/estoqueCondor/assets/ok.png' class='animated bounce iconecentro' /></div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
			
		break;
		case "editar":
			$sql = "UPDATE categoria
					SET nomecategoria='{$nomecategoria}'
					WHERE idcategoria=".$_REQUEST["idcategoria"];
					
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}else{
				print "<script>alert('Ocorreu um problema :(');</script>";
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM categoria WHERE idcategoria=".$_REQUEST["idcategoria"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}else{
				print "<script>alert('Ocorreu um problema :(');</script>";
				print "<script>location.href='index.php?page=lis-categoria';</script>";
			}
		break;
	}
?>







