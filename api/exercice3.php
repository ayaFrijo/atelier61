<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="resultat.php"> 
Nom : <input type="text" name="nom"><br> 
Prénom : <input type="text" name="prenom"><br> 
<input type="submit" value="Valider"> 
</form> 

<?php 
$nom = $_POST["nom"]; 
$prenom = $_POST["prenom"]; 
echo "Bienvenue " . $nom . " " . $prenom; 
?> 
</body>
</html>