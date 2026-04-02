<?php
$projects = [
    ["title" => "Exercice 1", "link" => "exercice1.php"],
    ["title" => "Exercice 2", "link" => "exercice2.php"],
    ["title" => "Rapport Exercice 1", "link" => "Rapport Exercice1.pdf"],
    ["title" => "Rapport Exercice 2", "link" => "Rapport Exercice2.pdf"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio Aya</title>

<style>
body{
    margin:0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(120deg,#f5f5dc,#ffffff);
}

/* HEADER */
header{
    text-align:center;
    padding:40px;
}
header h1{
    margin:0;
    color:#5d4037;
    font-size:40px;
}
header p{
    color:#8d6e63;
    font-size:18px;
}

/* GRID */
.container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    padding:40px;
}

/* CARD */
.card{
    background:white;
    border-radius:15px;
    padding:25px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}
.card:hover{
    transform:translateY(-10px);
}

/* BUTTON */
.card a{
    display:inline-block;
    margin-top:15px;
    padding:10px 20px;
    text-decoration:none;
    color:white;
    background:#5d4037;
    border-radius:20px;
    transition:0.3s;
}
.card a:hover{
    background:#8d6e63;
}
</style>
</head>

<body>

<header>
    <h1>Aya Portfolio</h1>
    <p>Full Stack Developer</p>
</header>

<div class="container">
<?php foreach($projects as $project): ?>
    <div class="card">
        <h3><?php echo $project['title']; ?></h3>
        <a href="<?php echo $project['link']; ?>">Voir Projet</a>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>