
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> Affichage test </h1>

<?php
$variable = "Mon \"nom\" est Mateo21<br />";
echo $variable;
$variable = 'Je m\'appelle Mateo21<br />';
echo $variable;
?>

<?php
$variable = 'Mon "nom" est Mateo21<br />';
echo $variable;
$variable = "Je m'appelle Mateo21<br />";
echo $variable;
?>

<?php
$age_du_visiteur = 17;
echo 'le visiteur a $age_du_visiteur ans<br>';// Ne marche pas
echo "le visiteur a $age_du_visiteur ans<br>"; 
?>

<?php
$age_du_visiteur = 17;
echo 'le visiteur a ' . $age_du_visiteur . ' ans'; // Ne marche pas
?>

</body>
</html>
