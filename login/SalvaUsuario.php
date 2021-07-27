<?php

	session_start();
 
	require_once 'Conexao.php';
 
	if(ISSET($_POST['cadastrar'])){
		
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		
		$query = "INSERT INTO Usuario (nome, senha, email, telefone) VALUES(:nome, :senha, :email, :telefone)";
		$stmt = $conexao->prepare($query);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':senha', $senha);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':telefone', $telefone);
		$stmt->execute();

		$_SESSION['success'] = "Usuário cadastrado com sucesso";
		header('location: ../cadastro.php');
	}
?>