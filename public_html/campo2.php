<?php

require("config.php");
$connec = conectar();

		$subcontinent = mysqli_query($connec,"SELECT DISTINCT sub_continent  FROM geodata WHERE continent='".$_POST['id']."'");
		

		
		echo "<option value=''>Continet Subdivisions</option>";

		while($subcon = mysqli_fetch_assoc($subcontinent) ){
			# code...
			echo "<option value='".$subcon['sub_continent']."'>".$subcon['sub_continent']."</option>";
		}



?>