<?php
	function conectar(){

		
		$servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $dbname = "arbovirusbd";

		//Criar a conexão
		$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
		
		if($conn)
			return $conn;
		else 
			return false;


	}

	
	



?>