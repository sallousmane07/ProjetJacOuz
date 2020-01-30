<!DOCTYPE html>
<html>
<head>
	<title>Etape 3</title>
	
	
</head>
<body>
	<?php require_once ('traitement.php'); ?>
	

	<form method="Post" action="">
		<p>Merci de sélectionner la table que vous voulez consulter. </p>
		<select name="table">
			<option value=1>Table 1</option>
			<option value=2>Table 2</option>
			<option value=3>Table 3</option>
			<option value=4>Table 4</option>
			<option value=5>Table 5</option>
			<option value=6>Table 6</option>
			<option value=7>Table 7</option>
			<option value=8>Table 8</option>
			<option value=9>Table 9</option>
			<option value=10>Table 10</option>
		</select>
		<input type="submit" name="bouton" value="Voir la table">
	</form>
<?php 
	if(isset($_POST['bouton'])){
		$tab = tableMulti($_POST['table']);

		var_dump($tab);
	}
 ?>
</body>
</html>