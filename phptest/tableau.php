<?php

// on cree notre array $prenoms
$prenoms = array('francois','Michel','Nicole','vero','Benoit' );

// Puis on fait une boucle pour tout afficher
for ($numero = 0; $numero < 5; $numero ++)
{
	echo $prenoms[$numero] . '<br/>'; // affichera $prenoms[0], $prenoms[1] etc.
}

?>

<?php
$coordonnees = array (
	'prenom' => 'francois',
	'nom' => 'Dupont',
	'adresse' => '3 rue du paradis',
	'ville' => 'Marseille');

Foreach($coordonnees as $cle => $element)

{
	echo '['. $cle . '] vaut '  .$element . '<br />';
}
?>

<?php
$coordonnees = array (
	'prenom' => 'francois',
	'nom' => 'Dupont',
	'adresse' => '3 rue du paradis',
	'ville' => 'Marseille');

echo '<pre>';
	print_r($coordonnees);

echo '<pre>';

?>



<?php
$coordonnees = array (
	'prenom' => 'francois',
	'nom' => 'Dupont',
	'adresse' => '3 rue du paradis',
	'ville' => 'Marseille');

	print_r($coordonnees);

?>

<?php
$fruits = array ('Banane','Pomme','Poire','Cerise','Fraise','Framboise');

$position = array_search('Fraise', $fruits);
echo  '"Fraise" se trouve en position' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo  '"Banane" se trouve en position' . $position . '<br />';
?>

<?php
$coordonnees = array (
	'prenom' => 'francois',
	'nom' => 'Dupont',
	'adresse' => '3 rue du paradis',
	'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
	echo 'la clé "nom" se trouve dans les coordonées !';

}

if (array_key_exists('pays', $coordonnees))
{
	echo 'la clé "pays" se trouve dans les coordonées !';

}

if (array_key_exists('prenom', $coordonnees))
{
	echo 'la clé "prenom" se trouve dans les coordonées !';

}

if (array_search('Albert', $coordonnees))
{
	echo 'la clé "Albert" se trouve dans les coordonées !';

}

?>

/*$pos = array_search('Albert', $coordonnees);

if($pos){
	echo 'Albert' se trouve à la clé :' .$pos;
}
else
{
	echo 'Albert ne se trouve pas dans le tableau';
	$pos = array_search
}

?>
*/



<?php 
$nombre_elements=0;
foreach($coordonnees as $valeur){
	if($valeur){
		$nombre_elements++;
	}
}
echo "le tableau contient :".$nombre_elements."valeurs";
?>

 <?php
$inverse_coordonnees=array();
foreach ($coordonnees as $cle=>$valeur) {
	if($valeur){
		$inverse_coordonnees[$valeur]=$cle;
	}
}
/*echo "<pre>"; print_r(($inverse_coordonnees);
	echo"</pre>";*/
	?>

	<?php
	$chaine ='cette chaine va etre melangée !';
	$chaine = str_shuffle($chaine);
	echo $chaine;
	?>
