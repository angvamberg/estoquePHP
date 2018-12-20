<?php
	//conexão com o banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "estoque";
	
	$conn = new mysqli($host,$user,$pass,$db);
	
	//includes das páginas
	switch(@$_REQUEST["page"]){
		//fornecedor
		case "cad-fornecedor":
			include("fornecedor/cadastrar-fornecedor.php");
		break;
		case "lis-fornecedor":
			include("fornecedor/listar-fornecedor.php");
		break;
		case "edi-fornecedor":
			include("fornecedor/editar-fornecedor.php");
		break;
		case "sal-fornecedor":
			include("fornecedor/salvar-fornecedor.php");
		break;
		//categoria
		case "cad-categoria":
			include("categoria/cadastrar-categoria.php");
		break;
		case "lis-categoria":
			include("categoria/listar-categoria.php");
		break;
		case "edi-categoria":
			include("categoria/editar-categoria.php");
		break;
		case "sal-categoria":
			include("categoria/salvar-categoria.php");
		break;
		//produto
		case "cad-produto":
			include("produto/cadastrar-produto.php");
		break;
		case "lis-produto":
			include("produto/listar-produto.php");
		break;
		case "edi-produto":
			include("produto/editar-produto.php");
		break;
		case "sal-produto":
			include("produto/salvar-produto.php");
		break;
		default:
			include("dashboard.php");
	}

?>










