<?php
         $hostname_conexao = "db.painel.uneb.br";
    $database_conexao = "abvdb_geral";
    $username_conexao = "abvdb_user";
    $password_conexao = "Db@bbd7vpWAt@";

		
		$mysqli = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);
		if ($mysqli->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		
		$execute = $mysqli->query($query) or die($mysqli->error);
		$resultado = $execute->fetch_assoc();
		$num = $execute->num_rows; 
?>