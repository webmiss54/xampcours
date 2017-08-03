<?php


define("CONSTANTE", "3.14 "

);
echo CONSTANTE;
//$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
?>

<?php
//define("pi", 3.14)

function VolumeCone($rayon,$hauteur){
	$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);

	return $volume;
}
$mon_rayon = 50;
$ma_hauteur = 369;

$volume = VolumeCone ($mon_rayon, $ma_hauteur);

echo "pi =" .pi ."<br>";
echo "le volume d'un cone de rayon " . $mon_rayon ."est d'une hauteur de" . $ma_hauteur" . "est de" . $volume ;


?>