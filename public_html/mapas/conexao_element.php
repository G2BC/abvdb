<?php
       $servidor = "db.painel.uneb.br";
        $usuario = "abvdb_user";
          $senha = "Db@bbd7vpWAt@";
         $dbname = "abvdb_geral";
		
		$mysqli = new mysqli($servidor, $usuario, $senha, $dbname);
		if ($mysqli->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		
		$execute = $mysqli->query($query) or die($mysqli->error);
		$resultado = $execute->fetch_assoc();
		$num = $execute->num_rows; 
?>