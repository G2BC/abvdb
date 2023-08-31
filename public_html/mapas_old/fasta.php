<?php
session_start();


	if(isset($_POST['country']))

		$country = $_POST['country'];

	else

		$country = '';

	if(isset($_POST['date']))

		$date = $_POST['date'];

	else 

		$date = '';
		
	if(isset($_POST['host']))
		$host = $_POST['host'];
	else
		$host = '';


 $array = $_POST['campo'];

if(!empty($array)){
	$array2 = $_SESSION['teste'];
	$array3 = array();


	foreach ($array as $key) {
		
		array_push($array3,$array2[$key]);
		# code...
	}

	$_SESSION['fasta'] = $array3;
}else{

	if(isset($_SESSION['fasta']))
		unset($_SESSION['fasta']);
}

header("location:gerar_fasta.php?country=$country&date=$date&host=$host");



	?>