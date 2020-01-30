<!DOCTYPE html>
<html>
<head>
	<title>Etape 2</title>
</head>
<body>
	<?php require_once ('traitement.php'); ?>
	

	<form method="Post" action="">
		<p>Merci de sélectionner la table que vous voulez consulter. </p>
		<label>Table 1</label><input type="checkbox" name="check1" value=1>
		<label>Table 2</label><input type="checkbox" name="check2" value=2>
		<label>Table 3</label><input type="checkbox" name="check3" value=3><br>
		<label>Table 4</label><input type="checkbox" name="check4" value=4>
		<label>Table 5</label><input type="checkbox" name="check5" value=5>
		<label>Table 6</label><input type="checkbox" name="check6" value=6><br>
		<label>Table 7</label><input type="checkbox" name="check7" value=7>
		<label>Table 8</label><input type="checkbox" name="check8" value=8>
		<label>Table 9</label><input type="checkbox" name="check9" value=9>
		<label>Table 10</label><input type="checkbox" name="check10" value=10>
	
		<input type="submit" name="bouton" value="Voir la table">
	</form>

	

<?php 
	if(isset($_POST['bouton'])){
		for ($i=1; $i <=10 ; $i++) { 
			$name="check".$i;
			if (isset($_POST[$name])) {
				$tab = tableMulti($_POST[$name]);					 
					 var_dump($tab);
			}
		}
	}
 ?>
</body>
</html>