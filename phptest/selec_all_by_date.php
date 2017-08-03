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

$nb_modifs = $bdd->query('SELECT `ID`,`nom`,`possesseur`,`prix`,`nbre_joueurs_max`,`commentaires`,DATE_FORMAT(`date_enregistrement`, "%d-%m-%Y %H:%i:%s") FROM `jeux_video` ORDER BY `date_enregistrement` DESC');
echo $nb_modifs . ' entrées ont été modifiées !';


?>