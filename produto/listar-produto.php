<h1>Listar Produtos</h1>
<?php
	$sql = "SELECT p.*, c.*, f.* 
			FROM produto AS p
			INNER JOIN categoria AS c
			ON c.idcategoria = p.idcategoria
			INNER JOIN fornecedor AS f
			ON f.idfornecedor = p.idfornecedor";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>Nº</th>";
		print "<th>Nome</th>";
		print "<th>Categoria</th>";
		print "<th>Fornecedor</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["idproduto"]."</td>";
			print "<td>".$row["nomeproduto"]."</td>";
			print "<td>".$row["nomecategoria"]."</td>";
			print "<td>".$row["nomefornecedor"]."</td>";
			print "<td>
					
					<button onclick=\"location.href='index.php?page=edi-produto&idproduto=".$row["idproduto"]."';\" class='btn btn-dark'>Editar</button>
					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=sal-produto&acao=excluir&idproduto=".$row["idproduto"]."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>