<?php
	require("conexao.php");
	
	$excluirId = $_GET['id'];
	
	try{
		$stmt = $conn->prepare("delete from tb1 where idUsuario =$excluirId");
		$stmt->execute();
		
		echo "<script>alert('Contato excluído com sucesso');</script>";
		echo "<script>window.location='tabela.php'</script>";
	}catch{
			echo "Erro: " . $e -> getMessage();
	}
?>