<?php 
session_start();

 if(isset($_SESSION['fasta'])){
	$dados = $_SESSION['fasta'];

}else {
	$dados = $_SESSION['teste'];
}

 $country = $_GET['country'];

 $date = $_GET['date'];
 
 $host = $_GET['host'];
$arquivo = 'ABVdb.fas';
$fp = fopen('arquivo.fasta', 'w');
$html = '';
 foreach ($dados as $key => $dado) :

		 	if(!empty($dado['locus']) ||  !empty($dado['sequence'])){

			$html .= '>';
			if( $country == 'country' && $date == 'date' && $host == 'host')
					$html .=$dado['locus'].'.'.$dado['country'].'.'.$dado['collectiondate'].'.'.$dado['host'];
			
			else if( $country == 'country' && $date == 'date' && empty($host))
					$html .=$dado['locus'].'.'.$dado['country'].'.'.$dado['collectiondate'];

			else if($country == 'country' && empty($date) && empty($host))
					$html .=$dado['locus'].'.'.$dado['country'];
				
			else if($country == 'country' && empty($date) && $host = 'host')
					$html .=$dado['locus'].'.'.$dado['country'].'.'.$dado['host'];

			else if(empty($country) && $date == 'date' && empty($host))
					$html .=$dado['locus'].'.'.$dado['collectiondate'];
				
			else if(empty($country) && $date == 'date' && $host = 'host')
					$html .=$dado['locus'].'.'.$dado['collectiondate'].'.'.$dado['host'];
				
			else if(empty($country) && empty($date) && $host == 'host')
					$html .=$dado['locus'].'.'.$dado['host'];
			else 
				$html .=$dado['locus'];
			
			$html.="\n";
			$html.=$dado['sequence'];
			$html.="\n";
			
		}else{



			$html.= "teste\n";
		}
			
			
		endforeach;

		$_SESSION['texto'] = $html;

		$escreve = fwrite($fp, $html);
		fclose($fp);

	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header("Content-Type: application/txt");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		//header ("Content-Disposition: attachment; filename=arquivo.fas" );
		header ("Content-Description: PHP Generated Data" );
		echo $html;


		
		exit;  ?>
	