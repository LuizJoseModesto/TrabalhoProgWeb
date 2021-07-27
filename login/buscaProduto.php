<?php
	session_start();
	
	require_once 'ConexaoProduto.php';
 
	if(ISSET($_POST['descricao'])){
		
		$descricao = $_POST['descricao'];
		
 
		$query = "SELECT nome FROM Produto WHERE descricao LIKE :descricao";
		$stmt = $conexao->prepare($query);
		$stmt->bindParam(':descricao', $descricao);
		$stmt->execute();
		
		$resultado = $stmt->fetch();


	}

	if($resultado){
		header('location: ../fullproduto.php?$tmpString=$resultado');
		
	}else{
		$_SESSION['error'] = "Modelo não encontrado";
		header('location: ../index.php');
	}
?>