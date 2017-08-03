 <?php
//inverse une chaine de caracteres
$chaine='Bonjour tout le monde';
$chaine = strrev($chaine);
echo $chaine;
 ?>

<?php
echo strrev("Bonjour tout le monde"); //inverse les caracteres
?>


 <?php
//inverse une chaine de caracteres
$chaine="Bonjour tout le monde";
for($i=strlen($chaine)-1;$i>=0;$i--){
	$chaine_inverse.=$chaine[$i];
}
echo $chaine_inverse;
 ?>



 <?php
 //expression condtionnelle pour tester si un nombre est à la fois multiple de 3 et de 5
$nombre=50;
if ($nombre % 3==0 && $nombre % 5==0){
	echo $nombre .' est divisible par 3 et par 5<br />';
}
else {
	echo $nombre ." n'est pas divisible par 3 et 5<br/>";
}

 ?>


<?php
//expression conditionnelle pour selectionne une personne de sexe feminin dont l'age est compris entre 21 et 40 ans
$age=30;
$sexe="M";

if($sexe == "F" && $age >= 21 && $age <=40){
	echo "Bonjour Madame vous avez entre 21 et 40 ans <br/>";
}
elseif ($sexe =="F" && $age <40){
	echo "Désolé vous etre trop agée mademoiselle";
}

elseif ($sexe =="F" && $age <21){
	echo "Désolé vous etre trop jeune mademoiselle";
}

elseif ($sexe =="M"){
	echo "Désolé les hommes ne sont pas accepté sur notre site";
}
else{
	echo "Désolé , vous ne remplissez pas les conditions";
}

?>
<?php
switch ($sexe)
{
	case 'M';
	echo "Bonjour Madame vous avez entre 21 et 40 ans";
	break
	case 'F';
	if ($age >= 21 && $age <=40){
		echo "Bonjour Madame vous avez entre 21  et 40 ans";
	}elseif ($age <21){
		echo"desole vous etre trop jeune mademoiselle";
	}
}

?>