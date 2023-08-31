<?php
/*
			#acession = locus
			#collectiondate = date


		*/
	function generate($attr){



		$contador = 0;
		$query = "select *, genotipos.vname,genotipos.genotype from sequencias inner join genotipos on sequencias.genotype = genotipos.code ";

		

		if(!empty($attr['virus'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query." genotipos.vname ='".$attr['virus']."'";
			
		}
		if(!empty($attr['genotype'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query." genotipos.genotype ='".$attr['genotype']."'";
			
		}
		if(!empty($attr['product'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query."  sequencias.product = '".$attr['product']."' ";
			
		}
		//-------------  teste host
		if(!empty($attr['host'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query."  sequencias.host LIKE '%".$attr['host']."%'";
			
		}
		
		
		//------------------------
		if(!empty($attr['country'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query."  sequencias.country ='".$attr['country']."'";
			
		}
 
		if(!empty($attr['mindate']) || !empty($attr['maxdate'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			if(!empty($attr['mindate']) && !empty($attr['maxdate'])){

				if($attr['mindate'] > $attr['maxdate'] ){
					$temp = $attr['maxdate'];
					$attr['maxdate'] = $attr['mindate'];
					$attr['mindate'] = $temp;
				}

				$query = $query." sequencias.collectiondate between ".$attr['mindate']." AND ".$attr['maxdate'];

			}
			//se preencher apenas 1

			if(!empty($attr['mindate']) && empty($attr['maxdate']))
				$query = $query." sequencias.collectiondate =".$attr['mindate'];
			
			if(empty($attr['mindate']) && !empty($attr['maxdate']))
				$query = $query." sequencias.collectiondate =".$attr['maxdate'];
			
			
			
		}

		if(!empty($attr['size'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query."  sequencias.size ='".$attr['size']."'";
			
		}

		if(!empty($attr['clinic'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query."  sequencias.clinic ='".$attr['clinic']."'";
			
		}

		if(!empty($attr['gender'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			$query = $query."  sequencias.gender ='".$attr['gender']."'";
			
		}

		if(!empty($attr['minage']) || !empty($attr['maxage'])){
			if($contador == 0){
					$query =$query." where";
					$contador++; 					
				}else{
					$query= $query." and";
				}
			if(!empty($attr['minage']) && !empty($attr['maxage'])){

				if($attr['minage'] > $attr['maxage'] ){
					$temp = $attr['maxage'];
					$attr['maxage'] = $attr['minage'];
					$attr['minage'] = $temp;
				}

				$query = $query." sequencias.age between ".$attr['minage']." AND ".$attr['maxage'];

			}
			//se preencher apenas 1

			if(!empty($attr['minage']) && empty($attr['maxage']))
				$query = $query." sequencias.age=".$attr['minage'];
			
			if(empty($attr['minage']) && !empty($attr['maxage']))
				$query = $query." sequencias.age=".$attr['maxage'];
			
			
			
		}

		#$query = $query.' ;';

		
		return $query;
	/*	 $retorno = listar($query);
		if($retorno)
			echo "IMPRIMINDO RETORNO";

		


		if(empty($retorno))
				echo "<script>alert('Not Found!');</script>";
		echo " retornei o array a qquem chamou generate";
		return $retorno;*/

	}

	