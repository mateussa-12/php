<?php require("conexao.php"); ?>
<html>
	<head>
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
		<body>
			<section>
				<h1>Contatos Recebidos</h1>
			</section>
			
			<section>
				<table class="table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Email</th>
							<th scope="col">Senha</th>
						</tr>
					</thead>
					<tbody>
						<?php
							try{
								$stmt = $conn->prepare('select * from tb1');
								$stmt -> execute();
								while($row = $stmt -> fetch(PDO :: FETCH_BOTH)){
									echo "<tr>";
										echo "<th scope='row'>$row[idUsuario]</th>";
										echo "<td>$row[nomeUsuario]</td>";
										echo "<td>$row[emailUsuario]</td>";
										echo "<td>$row[senhaUsuario]</td>";
										echo "<td>";
										
										echo "<a href='./'excluir.php?id=$row[idUsuario]>";
												echo "Excluir";
										echo "</a>";
										
										echo "</td>";	
									echo "</tr>";			
								}
							}catch(PDOException $e){
								echo "Erro: ". $e->getMessage();
							}
						?>
					</tbody>
				</table>
			</section>
		</body>
</html>