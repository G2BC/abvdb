<?php 

session_start();
if(isset($_SESSION['excel'])){
	$dados = $_SESSION['excel'];

}else {
	$dados = $_SESSION['teste'];
}



			


		
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'ABVdb.xls';
		
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
		$html .= '<td><b>Host</b></td>';
		$html .= '<td><b>Country</b></td>';
		$html .= '<td><b>Date</b></td>';
		$html .= '<td><b>Size</b></td>';
		$html .= '<td><b>Clinic</b></td>';
		$html .= '<td><b>Gender</b></td>';
		$html .= '<td><b>Age</b></td>';
		$html .= '</tr>';
		
	
		
		 foreach ($dados as $dado) :
			$html .= '<tr>';
			$html .= '<td>'.$dado['locus'].'</td>';
			$html .= '<td>'.$dado['vname'].'</td>';
			$html .= '<td>'.$dado['genotype'].'</td>';
			$html .= '<td>'.$dado['product'].'</td>';
			$html .= '<td>'.$dado['host'].'</td>';
			$html .= '<td>'.$dado['country'].'</td>';
			$html .= '<td>'.$dado['collectiondate'].'</td>';
			$html .= '<td>'.$dado['size'].'</td>';
			$html .= '<td>'.$dado['clinic'].'</td>';
			$html .= '<td>'.$dado['gender'].'</td>';
			$html .= '<td>'.$dado['age'].'</td>';
			$html .= '</tr>';
			
		endforeach;
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