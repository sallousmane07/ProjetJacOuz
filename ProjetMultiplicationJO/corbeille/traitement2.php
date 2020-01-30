
<?php 

include('etape3.php');
if (isset($_POST['valider'])){
	$rst= (int) $_POST['rps'];
	$nbre=$_GET['nbre'];
	$chifAuhasard=$_GET['chif'];
 	/*var_dump($rst);
 	var_dump($chifAuhasard*$nbre);
 	var_dump(trouverLaReponse($nbre,$chifAuhasard,$rst));*/
 	if(trouverLaReponse($nbre,$chifAuhasard,$rst))
 		echo "vrai";
 	else
 		echo "faux";
 }
 

 ?>