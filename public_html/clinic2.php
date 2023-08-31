<?php
		require("config.php");
		$connec=conectar();
		$genotipos = mysqli_query($connec,"select distinct clinic from sequencias inner join genotipos on genotipos.virus = sequencias.Serotype where genotipos.vname='".$_POST['id']."'");
		

	
		echo "<option value=''>Select Clinic</option>";
		while($genotipo = mysqli_fetch_assoc($genotipos) ){
			# code...
			echo "<option value='".$genotipo['clinic']."'>".$genotipo['clinic']."</option>";
		}
 ?>
 
       