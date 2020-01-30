<?php 
	require_once ('traitement.php'); 
	//$chifAuhasard= choisirAuHasard();
	$nbre=2;
	if (isset($_POST['valider'])){
 	$rst= (int) $_POST['rps'];
 	$chifAuhasard=$_POST['chif'];
 	$nbre=$_POST['nbre'];
 	//var_dump($_POST['nbre']);
 	
 	if(trouverLaReponse($nbre,$chifAuhasard,$rst))
 		echo "vrai";
 	else
 		echo "faux";
 }

 ?>


 <form method="Post" action="">
 	<?php $chifAuhasard=choisirAuHasard();?>
 	<input type="name" name="chif" value=<?=$chifAuhasard?>> * 
 	<input type="name" name="nbre" value=<?=$nbre?>>  = 
 	<input type="number" name="rps">
 	<input type="submit" name="valider">

 </form>


<?php 

/*require_once ('traitement.php'); 
$chifAuhasard= choisirAuHasard();
$nbre=2;*/

?>

 <!-- <form method="Post" action="traitement2.php?chif=$chifAuhasard&nbre=$nbre">
 	
 	<label><$chifAuhasard.'  *  '.$nbre.'  =  '?></label>
 	<input type="number" name="rps">
 	<input type="submit" name="valider">

 </form>	 -->
