<?php
function get(){
		
		
		$dados;
	if(isset($_POST['virus'])){

		if(empty($_POST['virus'])){
			echo "<script>alert('Select a virus type! ');</r>";
			return false;
		}
	

		$teste = $_POST['virus'];
		

		
		$virus =  filter_input(INPUT_POST,'virus',FILTER_SANITIZE_STRING);
		$genotype =  filter_input(INPUT_POST,'genotype',FILTER_SANITIZE_STRING);
		$product =  filter_input(INPUT_POST,'product',FILTER_SANITIZE_STRING);
		$host =  filter_input(INPUT_POST,'host',FILTER_SANITIZE_STRING);
		$country =  filter_input(INPUT_POST,'country',FILTER_SANITIZE_STRING);
		$mindate =  filter_input(INPUT_POST,'minDate',FILTER_SANITIZE_STRING);
		$maxdate =  filter_input(INPUT_POST,'maxDate',FILTER_SANITIZE_STRING);
		$size =  filter_input(INPUT_POST,'size',FILTER_SANITIZE_STRING);
		$clinic =  filter_input(INPUT_POST,'clinic',FILTER_SANITIZE_STRING);

		$gender =  filter_input(INPUT_POST,'gender',FILTER_SANITIZE_STRING);

		$minage =  filter_input(INPUT_POST,'minAge',FILTER_SANITIZE_STRING);
		$maxage =  filter_input(INPUT_POST,'maxAge',FILTER_SANITIZE_STRING);



		$attr = [

		
		'virus' => $virus,
		'genotype'=> $genotype,
		'product'=> $product,
		'host'=>$host,
		'country' => $country,
		'mindate' => $mindate,
		'maxdate' => $maxdate,
		'size' => $size,
		'clinic' => $clinic,
		'gender' => $gender,
		'minage' => $minage,
		'maxage' => $maxage

		];


		
		
		
		
		$dados = generate($attr);
		/*echo "sai do generate ";
		echo "criei a sessão";
		$_SESSION['teste'] = $dados;*/
		
		return $dados;

	}
		


}
?>