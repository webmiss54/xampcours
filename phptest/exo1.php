<?php
$compteur = 0;
$compteur_pair = 0;
$table = array ();

do 
{
	$nombre1 = rand(1,100);
	$nombre2 = rand(1,100);
	$nombre3 = rand(1,100);

	if ((($nombre1 % 2) == 0) && (($nombre2 % 2) != 0)  && (($nombre3 % 2) != 0) )
	{
		echo "<br> la suite de nombre  générée aléatoirement respecte l'ordre";
		echo $nombre1 ." - " .$nombre2 ." - " . $nombre3; $compteur++; $compteur_pair++;
	}
		else{
			$compteur++;
			echo "<br> la suite de nombre générée aléatoirement ne respecte pas l'ordre";
		}
}
while ($compteur <= 10);




echo "<br><br>" .$compteur_pair;
echo "<pre>";
print_r($table);
echo "<pre>";
?>

<?php
$compteur=0;

do{
	$compteur++;
	$x = rand(1,1000);
	$y = rand(1,1000);
	$z = rand(1,1000);

	echo $x . "," . $y .",". $z ."<br>";

	if