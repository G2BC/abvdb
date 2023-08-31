<?php

require("config.php");
$connec = conectar();

        $country = mysqli_query($connec,"SELECT DISTINCT country FROM geodata WHERE continent='".$_POST['id']."' ORDER BY country");
        

        
        echo "<option value=''>Select Country</option>";

        while($subcon = mysqli_fetch_assoc($country) ) {
            # code...
            echo "<option value='".$subcon['country']."'>".$subcon['country']."</option>";
        }



?>