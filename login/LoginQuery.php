<?php

	session_start();
	
	require_once 'Conexao.php';
 
	if(ISSET($_POST['login'])){
		
		$email = $_POST['email'];
		$senha = $_POST['senha'];
 
		$query = "SELECT * FROM Usuario WHERE email = :email";
		$stmt = $conexao->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		
		$resultado = $stmt->fetch();

		if($resultado){
			header('location: ../home.php');
		}else{
			$_SESSION['error'] = "Senha ou usuário inválidos";
			header('location: ../login.php');
		}
	}
?>