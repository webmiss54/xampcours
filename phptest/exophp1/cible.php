<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cible</title>
</head>
<body>
<?php
if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) // On a le nom et le prénom et l'age
{
	
	$_GET['age'] = (int)$_GET['age'];
	if (is_string($_GET['prenom'])&& is_string($_get['nom'])&& $_GET['age'] > 0 && $_GET['age'] <= 140);
	echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>

<!--<p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>
<p>Quel age a tu ? <?php echo $_GET['age']; ?> ans</p>-->
	
</body>
</html>