<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>

<form method="post" action="cible.php">
 
<p>
  <label for="prenom"> Prénom : </label><input type="text" name="prenom" value="Entrez votre prénom" /><br/>
  <label for="nom">  Nom :</label><input type="text" name="nom" value="Entrez votre nom" /><br/>
  <label for="age"> Indiquez votre age : </label><input type="text" name="age" value="Entrez votre age"/></p>

  <label for="F">Féminin</label><input type="radio" name="sexe" id="F" value="F">
 <label for="M">Masculin<label><input type="radio" name="sexe" id="M" value="M">
  

   <input type="hidden" name="tache" value="formulaire">

    <input type="submit" value="Valider" />
</p>
 
</form>
	
</body>
</html>