<?php include("conexao.php");

$sql_code = "SELECT *, genotipos.vname,genotipos.genotype from sequencias inner join genotipos on sequencias.genotype = genotipos.code WHERE genotipos.vname='Zika Virus'";
$execute = $mysqli->query($sql_code) or die($mysqli->error);
$resultado = $execute->fetch_assoc();
$num = $execute->num_rows; 





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	var_dump($resultado);

 if($num > 0){ ?>
<table>
	<thead></thead>
	<tbody>
		
			<?php do{ ?>
			 <tr>
                    <td><?php echo $resultado['locus']; ?> </td> 
                    <td><?php echo $resultado['vname'] ;?> </td> 
                    <td><?php echo $resultado['genotype'] ;?> </td> 
                    <td><?php echo $resultado['product'] ;?> </td> 
                    <td><?php echo $resultado['country']; ?> </td> 
                    <td><?php echo $resultado['collectiondate']; ?> </td> 
                    <td><?php echo $resultado['size'] ;?> </td>
                    <td><?php echo $resultado['clinic'] ;?> </td>
                    <td><?php echo $resultado['gender'];?> </td>
                    <td><?php echo $resultado['age'];?> </td>  

                </tr>
                <?php } while($resultado = $execute->fetch_assoc());
                	}

               	var_dump($resultado);
                 ?>
		
	</tbody>
</table>

</body>
</html>