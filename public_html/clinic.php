<?php
		/*require("config.php");
		$connec=conectar();
		$genotipos = mysqli_query($connec,"select distinct clinic from sequencias inner join genotipos on genotipos.virus = sequencias.Serotype where genotipos.vname='".$_POST['idc']."'");
		

	
		echo "<option value=''>Select Clinic</option>";
		while($genotipo = mysqli_fetch_assoc($genotipos) ){
			# code...
			echo "<option value='".$genotipo['clinic']."'>".$genotipo['clinic']."</option>";
		}*/
 ?>
        <option value="">Clinic Status</option>
		<option value="">All</option>
<?php		
		
	
		if($_POST['idc'] == "Chikungunya"){
			echo "<option value='CHF'>CHF (Chikungunya Fever)</option>";
		}

		if($_POST['idc'] == "Zika Virus"){
			echo "<option value='ZF'>ZF (Zika Fever)</option>";
			echo "<option value='MC-fetus'>	MC (Microcefalia)</option>";
		}

		

		else if (($_POST['idc'] == "Dengue Serotype 1") || ($_POST['idc'] == "Dengue Serotype 2")  ||($_POST['idc'] == "Dengue Serotype 3") || ($_POST['idc'] == "Dengue Serotype 4")) {

			echo "<option value='DF'> DF (Dengue Fever)</option>";
			echo "<option value='DHF'> DHF (Dengue Hemorrhagic Fever) </option>";
			echo "<option value='DSS'> DSS (Dengue Shock Syndrome) </option>";

		}
           
           
?>