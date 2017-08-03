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

$nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo $nb_modifs . ' entrées ont été modifiées !';

?>