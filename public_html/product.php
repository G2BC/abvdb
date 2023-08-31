<?php
		
	echo "<option value=''>Select Genomic Region</option>";
		if($_POST['ida'] == "Chikungunya"){
			echo "<option value =\"5\'UTR\">5'UTR</option>";
		    echo "<option value = \"nsP1\">nsP1</option>";
			echo "<option value = \"nsP2\">nsP2</option>";
			echo "<option value = \"nsP3\">nsP3</option>";
			echo "<option value = \"nsP4\">nsP4</option>";
			echo "<option value = \"C\">C</option>";
			echo "<option value = \"E3\">E3</option>";
			echo "<option value = \"E2\">E2</option>";
			echo "<option value = \"6K\">6K</option>";
			echo "<option value = \"E1\">E1</option>";
			echo "<option value =\"3\'UTR\">3'UTR</option>";
			 echo "<option value = \"nsP1-nsP2-nsP3-nsP4-C-E3-E2-6K-E1\">polyprotein with/without UTR regions</option>"; 
		}
		if ($_POST['ida'] == "Zika Virus"){
			echo "<option value =\"5\'UTR\">5'UTR</option>";
		    echo "<option value = \"C\">C</option>";
	
			echo "<option value = \"M\">M (PrM)</option>";
			echo "<option value = \"E\">E</option>";
			echo "<option value = \"NS1\">NS1</option>";
			echo "<option value = \"NS2A\">NS2A</option>";
			echo "<option value = \"NS2B\">NS2B</option>";
			echo "<option value = \"NS3\">NS3</option>";
			echo "<option value = \"NS4A\">NS4A</option>";
			echo "<option value = \"NS4B\">NS4B</option>";
			echo "<option value = \"NS5\">NS5</option>";
			echo "<option value =\"3\'UTR\">3'UTR</option>";
			 echo "<option value = \"C-Pr-M-E-NS1-NS2A-NS2B-NS3-NS4A-2K-NS4B-NS5\">polyprotein with/without UTR regions</option>"; 
		}
	   else if (($_POST['ida'] == "Dengue Serotype 1") ||  ($_POST['ida'] == "Dengue Serotype 2")  ||($_POST['ida'] == "Dengue Serotype 3") || ($_POST['ida'] == "Dengue Serotype 4") || ($_POST['ida'] == "Dengue All")) {

			
			echo "<option value =\"5\'UTR\">5'UTR</option>";
		    echo "<option value = \"C\">C</option>";
			echo "<option value = \"M\">M (PrM)</option>";
			echo "<option value = \"E\">E</option>";
			echo "<option value = \"NS1\">NS1</option>";
			echo "<option value = \"NS2A\">NS2A</option>";
			echo "<option value = \"NS2B\">NS2B</option>";
			echo "<option value = \"NS3\">NS3</option>";
			echo "<option value = \"NS4A\">NS4A</option>";
			echo "<option value = \"NS4B\">NS4B</option>";
			echo "<option value = \"NS5\">NS5</option>";
			echo "<option value =\"3\'UTR\">3'UTR</option>";
			      echo "<option value = \"C-M-E-NS1-NS2A-NS2B-NS3-NS4A-NS4B-NS5\">polyprotein with/without UTR regions</option>"; 

		}  
?>