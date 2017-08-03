<?php
//Nombre à trouver
$nb=153;
//compteur
$coup=0;
 
//boucle de tirage
while($x!=$nb)
{
  $x=rand(0,1000);
  $coup++;
  //echo $x,"<br />";//pour afficher tous les tirages
}
echo "$nb trouvé en $coup coups ";
?>


/*//Nombre à trouver
$nb=153;

$coup=0;
$affiche = true;
 

while($x!=$nb)
{
  $x=rand(0,1000);
  $coup++;
  if ($coup > 1000)
  echo "trop d'essais on arrête de chercher <br>";
$affiche = false;
break;
}

if ($affiche) {
	echo $nb.;"trouve"
}
?>*/

<?php
//Nombre à trouver
$nb=789;
//boucle de tirage
for($coup=1;$x!=$nb;$coup++)
{
	$x=rand(0,1000);
	if($coup >1000){
		echo "trop d'esssais on s'arrete de chercher !!! <br>";
		$affiche = false;
		break;
	}
}
if ($affiche) {
echo"$nb ."trouvé en " . $coup. "coups" <br>";
}
?>
