<?php 
	function tableMulti($val){
		$tab=[];
		for ($i=1; $i <=10 ; $i++) { 
			$tab[]=$val.' * '.$i. ' = '.$val*$i;
		}
		return $tab;
	}
	function choisirAuHasard(){
		return rand(1,10);//rand(min,max);
	}
	function trouverLaReponse($val,$chifAuhasard,$reponse){
		return $reponse==$val*$chifAuhasard;
	}
	
 