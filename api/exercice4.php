<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
for ($i = 5; $i <= 100; $i += 5) { 
echo "<a href='resultat.php?val=$i'>$i</a> "; 
} 
?> 
<?php 
$val = $_GET["val"]; 
echo "Vous avez choisi : " . $val; 
?>
</body>
</html>