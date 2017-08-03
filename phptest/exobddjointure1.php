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
try {
	$reponse = $bdd->query('SELECT DISTINCT(possesseur) FROM jeux_video') or die(print_r($bdd->erroInfo()));
	while ($donnees = $reponse->fetch()) {
		echo $donnees['possesseur']. "<br/>";
		$insert = $bdd->exec("INSERT INTO proprietaire (nom_proprietaire) VALUES ('".$donnees['possesseur']."')");
		if ($insert){
			$lastid = $bdd->lastInsertId();
			echo "dernier enregistrement  table proprietaire: " . $lastid . "<br>";
			$nb_modifs = $bdd->exec("UPDATE jeux_video SET id_proprietaire = ".$lastid." WHERE possesseur = '".$donnees['possesseur']."'") or die(print_r($bdd->erroInfo()));

			echo $nb_modifs ." effectuées dans table jeux<br>";
		}
	}
}
catch (Exception $e){
	die('€rreur : '.$e->getMessage());
}

 ?>
