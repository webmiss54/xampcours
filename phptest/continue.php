<!--UTILISATION CONTINUE-->
<?php
for ($i=0; $i<=10; $i++)
{
	//on n'affiche pas les 5 premiers nombres
	if($i<=5)
	{
		continue;
	}
	// Affich&ge des nombres de 6 à 10
		echo $i .'<br/>';
}
?>