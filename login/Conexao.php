<?php
	
	if(!is_file('sqlite:login.sqlite3')){
		file_put_contents('sqlite:login.sqlite3', null);
	}

	$conexao = new PDO('sqlite:login.sqlite3');
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = "CREATE TABLE IF NOT EXISTS Usuario (
        id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        nome TEXT,
        email TEXT,
        telefone TEXT,
        senha TEXT)";
	$conexao->exec($query);
	
?>