<?php

	session_start();
 
	require_once 'ConexaoProduto.php';
 
	if(ISSET($_POST['cadastroProduto'])){

		
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$preco = $_POST['preco'];

		$destino = '../imagens/' . $_FILES['imagem']['name'];
		$arquivo_tmp = $_FILES['imagem']['tmp_name'];
		move_uploaded_file( $arquivo_tmp, $destino  );

	
        
		
		$query = "INSERT INTO Produto (nome, descricao, preco, imagem) VALUES(:nome, :descricao, :preco, :imagem)";
		$stmt = $conexao->prepare($query);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':descricao', $descricao);
		$stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':imagem', $destino);
		$stmt->execute();

		$_SESSION['success'] = "Produto cadastrado com sucesso";
		header('location: ../cadastroProduto.php');
	}
?>