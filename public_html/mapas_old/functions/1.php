<?php 

$map_virus = "DENV-1";
$map_country =$_GET['valor'];;
$query = "select *, genotipos.vname,genotipos.genotype,species.id,species.nane,species.specie,geodata.continent,geodata.sub_continent,geodata.geolocator from sequencias inner join genotipos on sequencias.genotype = genotipos.code inner join species on sequencias.host = species.id inner join geodata on sequencias.geolocator=geodata.geolocator";
$query = $query." where sequencias.serotype ='".$map_virus."'";
$query = $query." and  sequencias.country ='".$map_country."'";

 $hostname_conexao = "localhost";
    $database_conexao = "arbovirusbd";
    $username_conexao = "root";
    $password_conexao = "";
		
		$mysqli = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);
		if ($mysqli->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
		
		$execute = $mysqli->query($query) or die($mysqli->error);
		$resultado = $execute->fetch_assoc();
		
		$num = $execute->num_rows; 


			


		
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'arbovirusdb.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="10" align="center">Planilha Arbovirusdb</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Acession</b></td>';
		$html .= '<td><b>Virus</b></td>';
		$html .= '<td><b>Genotype</b></td>';
		$html .= '<td><b>Product</b></td>';
		$html .= '<td><b>Country</b></td>';
		$html .= '<td><b>Date</b></td>';
		$html .= '<td><b>Size</b></td>';
		$html .= '<td><b>Clinic</b></td>';
		$html .= '<td><b>Gender</b></td>';
		$html .= '<td><b>Age</b></td>';
		$html .= '</tr>';
		
	
		
	do{
			$html .= '<tr>';
			$html .= '<td>'.$resultado['locus'].'</td>';
			$html .= '<td>'.$resultado['vname'].'</td>';
			$html .= '<td>'.$resultado['genotype'].'</td>';
			$html .= '<td>'.$resultado['product'].'</td>';
			$html .= '<td>'.$resultado['country'].'</td>';
			$html .= '<td>'.$resultado['collectiondate'].'</td>';
			$html .= '<td>'.$resultado['size'].'</td>';
			$html .= '<td>'.$resultado['clinic'].'</td>';
			$html .= '<td>'.$resultado['gender'].'</td>';
			$html .= '<td>'.$resultado['age'].'</td>';
			$html .= '</tr>';
			
		} while($resultado = $execute->fetch_assoc());
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; 

		 ?>
	</body>
</html>