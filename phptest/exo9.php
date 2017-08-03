<?php
$tab=array(
	"trucmol"=>	array("ludo","Toul",45),
	"maurice"=>	array("suzanne","Marseille",35),
	"shiffmolle"=> array("ludo","Paris",45),
	);
foreach($tab as $cle=>$valeur)
{
	echo "<b>Element de $cle : </b><br>";
	foreach($valeur as $cle2=>$val)
	{
		echo"$cle2:",$val,"<br>";
	}


}
?>