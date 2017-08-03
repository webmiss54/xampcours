<?php
function DireBonjour($nom)

{
	$noms = array('Marie','Francois', 'Michel', 'Nicole', 'Véronique', 'Nicolas', 'Ludovic' );

	foreach ($noms as $nom) {
		echo 'Bonjour ' .$nom. ' !</br>';
	}

}

DireBonjour ('$nom');
?>

<?php

$volume = 5 * 5 * 3.14 * 2 * (1/3);

echo 'Le volume du cône est : ' . $volume . ' cm<br />';

?>


<?php

function VolumeCone($rayon, $hauteur)

{
	$volume = $rayon * $rayon * $hauteur * (1/3);
	return $volume;
}

$volume = VolumeCone (3,1);
echo 'le volume du cone est : '.$volume . ' cm <br />';

?>

<?php

function VolumeCone($rayon, $hauteur) {


	if (is_numeric($rayon) && $rayon != 0 && is_numeric($hauteur) && $hauteur != 0) {
		$volume = $rayon * $rayon * 3.14 * $hauteur * 1/3;

		return  "le volume est de " . $volume . "cm";

	} else {
		return "erreur dans les parametres !!!";
	}
}
echo VolumeCone(4,2);
?>