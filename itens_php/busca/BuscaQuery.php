<?php

	session_start();
	
	require_once 'Conexao.php';
 
	if(ISSET($_POST['modelo'])){
		
		$modelo = $_POST['modelo'];
		
 
		$query = "SELECT * FROM Carros WHERE modelo = :modelo";
		$stmt = $conexao->prepare($query);
		$stmt->bindParam(':carro', $modelo);
		$stmt->execute();
		
		$resultado = $stmt->fetch();

		if($resultado){
			header('location: ../produto.php');
		}else{
			$_SESSION['error'] = "Modelo não encontrado";
			header('location: ../login.php');
		}
	}
?>