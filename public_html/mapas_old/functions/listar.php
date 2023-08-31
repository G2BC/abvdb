<?php
function listar($query){
		
		$conn = conectar();
		

		
		
		
		try{
			echo "tentei executar a query";
			$listar = mysqli_query($conn,$query);
			echo " query executada";
		}catch(Exception $e){
			echo $e->getMessage();
			echo "erro executara query";
		}
		
		echo "tentando retornar array do listar";
		if($listar){
			echo "retornando array do listar";
			return mysqli_fetch_assoc($listar);
		}
		else
			echo "erro no retorno do listar";

	}


?>