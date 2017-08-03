<?php
	echo '<pre>';
	var_dump($_POST);
	var_dump($_POST['nom']);
	echo '</pre>';


	if (isset($_POST['prenom']) 
	AND isset($_POST['nom']) 
	AND isset($_POST['age'])
	AND isset($_POST['anniversaire'])
	AND isset($_POST['nationalite'])
	AND isset($_POST['codepostal'])
	AND isset($_POST['adresse'])
	AND isset($_POST['ville'])
	AND isset($_POST['email'])
	AND isset($_POST['telephone'])
	AND isset($_POST['gsm'])
	AND isset($_POST['profession'])
	AND isset($_POST['revenus'])
	AND isset($_POST['situationfamille'])
	AND isset($_POST['enfant'])
	AND isset($_POST['anniversaire'])



	) // On a le nom et le prénom et l'age
{
	
	$_POST['age'] = (int)$_POST['age'];
	if (is_string($_POST['prenom'])&& is_string($_POST['nom'])&& $_POST['age'] > 0 && $_POST['age'] <= 140);
	echo 'Bonjour ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
	
?>