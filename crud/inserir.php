<?php
	require("conexao.php");
	
	$nome = $_POST['txNome'];
	$email = $_POST['txEmail'];
	$senha = $_POST['txSenha'];
	
	try{
		$stmt = $conn->prepare("insert into tb1 values(null,'$nome','$email','$senha');");
		$stmt ->execute();
		
		header("location:index.php");
		}
		catch(PDOException $e){
			echo "Erro: " . $e -> getMessage();
		}
?>