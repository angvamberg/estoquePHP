<h1>Listar Fornecedores</h1>
<?php
	$sql = "SELECT * FROM fornecedor";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome do Fornecedor</th>";
			print "<th>Ações</th>";   
			print "</tr>";
		$count = 1;
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["idfornecedor"]."</td>";
			print "<td>".$row["nomefornecedor"]."</td>";
			print "<td>
					
					<button onclick=\"location.href='index.php?page=edi-fornecedor&idfornecedor=".$row["idfornecedor"]."';\" class='btn btn-dark'>Editar</button>
					
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-fornecedor&acao=excluir&idfornecedor=".$row["idfornecedor"]."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			
				   </td>"; 
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>







