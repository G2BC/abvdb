<?php

require("config.php");


		$connec = conectar();
		

		$genotipos = mysqli_query($connec,"SELECT * FROM genotipos WHERE vname='".$_POST['id']."'");
		//$genotipos->execute();

		
		
		echo "<option value=''>Select Genotype</option>";
	
		while($genotipo = mysqli_fetch_assoc($genotipos) ){
			# code...
			
			echo "<option value='".$genotipo['genotype']."'>".$genotipo['genotype']."</option>";
		   
		}
        

?>