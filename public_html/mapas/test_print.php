<?php

session_start();

 $array = $_POST['campo'];

if(!empty($array)){
	$array2 = $_SESSION['teste'];
	$array3 = array();


	foreach ($array as $key) {
		
		array_push($array3,$array2[$key]);
		# code...
	}

	$_SESSION['excel'] = $array3;
}else{

	if(isset($_SESSION['excel']))
		unset($_SESSION['excel']);
}
$redirect = "functions/gerar_planilha.php";

header("location:$redirect");



?>