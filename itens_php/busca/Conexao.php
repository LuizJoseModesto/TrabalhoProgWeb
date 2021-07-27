<?php
	
	if(!is_file('sqlite:estoque.sqlite3')){
		file_put_contents('sqlite:login.sqlite3', null);
	}

	$conexao = new PDO('sqlite:estoque.sqlite3');
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "CREATE TABLE IF NOT EXISTS Carros (
        id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        modelo TEXT,
        ano INTEGER,
        descricao TEXT,
        imagem bytea)";
		
	$conexao->exec($query);
	
?>