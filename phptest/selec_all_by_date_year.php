<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
//phpinfo();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sta13;charset=utf8', 'sta13', 'CzKIHeUIGAuQf9Cz');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$nb_modifs = $bdd->query('SELECT COUNT(`date_enregistrement`) AS `nb_by_year`, YEAR(`date_enregistrement`) AS `year_enregistrement` FROM `jeux_video` GROUP BY `year_enregistrement` ORDER BY `year_enregistrement` DESC');


while($donnees = $reponse->fetch())
{

?>
<strong>Annee</strong> : <?php echo $donnees['year_enregistrement'];
 ?> - nombre : <?php echo $donnees(nb_by_year)]; ?>
 <br>
 <?php 
}
$reponse->closeCursor();
 ?>