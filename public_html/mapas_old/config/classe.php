<?php
	function conectar(){

		
		$servidor = "db.painel.uneb.br";
        $usuario = "abvdb_user";
        $senha = "Db@bbd7vpWAt@";
        $dbname = "abvdb_geral";


        

		//Criar a conexão
		$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
		
		if($conn)
			return $conn;
		
		else {
			"não consegui conectar";
			return false;
		}


	}

	
	



?>