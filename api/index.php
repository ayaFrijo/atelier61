<?php
$projects = [
    ["title" => "Exercice 1", "link" => "exercice1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport Exercice 1", "link" => "Rapport Exercice1.pdf", "type" => "pdf", "atelier" => "1"],
    ["title" => "Exercice 2", "link" => "exercice2.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport Exercice 2", "link" => "Rapport Exercice2.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD1", "link" => "td1_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD1", "link" => "Rapport TD1.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD2", "link" => "td2_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD2", "link" => "Rapport TD2.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD3", "link" => "td3_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD3", "link" => "Rapport TD3.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD4", "link" => "td4_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD4", "link" => "Rapport TD4.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD5", "link" => "td5_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD5", "link" => "Rapport TD5.pdf", "type" => "pdf", "atelier" => "1"],
    ["title" => "TD6", "link" => "td6_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD6", "link" => "Rapport TD6.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD7", "link" => "td7_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD7", "link" => "Rapport TD7.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD8", "link" => "td8_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD8", "link" => "Rapport TD8.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD9", "link" => "td9_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD9", "link" => "Rapport TD9.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD10", "link" => "td10_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD10", "link" => "Rapport TD10.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD11", "link" => "td11_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD11", "link" => "Rapport TD11.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD12", "link" => "td12_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD12", "link" => "Rapport TD12.pdf", "type" => "pdf", "atelier" => "1"],

    ["title" => "TD13", "link" => "td13_Atelier1.php", "type" => "code", "atelier" => "1"],
    ["title" => "Rapport TD13", "link" => "Rapport TD13.pdf", "type" => "pdf", "atelier" => "1"],

   
    
    
    ["title" => "Exercice 3", "link" => "exercice3.php", "type" => "code", "atelier" => "2"],
    ["title" => "Rapport Exercice 3", "link" => "Rapport Exercice3.pdf", "type" => "pdf", "atelier" => "2"],
    ["title" => "Exercice 4", "link" => "exercice4.php", "type" => "code", "atelier" => "2"],
    ["title" => "Rapport Exercice 4", "link" => "Rapport Exercice4.pdf", "type" => "pdf", "atelier" => "2"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aya | Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #5d4037; /* Deep Brown */
            --accent: #8d6e63;
            --bg: #faf9f6; /* Soft Off-White */
            --card-bg: #ffffff;
            --text: #2d2d2d;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        /* HEADER */
        header {
            text-align: center;
            padding: 80px 20px 40px;
        }

        header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            color: var(--primary);
            margin-bottom: 10px;
            letter-spacing: -1px;
        }

        header p {
            font-size: 1.1rem;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 300;
        }

        /* FILTER BUTTONS */
        .filters {
            text-align: center;
            margin-bottom: 50px;
        }

        .filter-btn {
            background: none;
            border: 1px solid #ddd;
            padding: 10px 25px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 30px;
            font-family: 'Inter', sans-serif;
            transition: 0.3s all ease;
            color: var(--text);
        }

        .filter-btn.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
            box-shadow: 0 4px 15px rgba(93, 64, 55, 0.2);
        }

        /* GRID SYSTEM */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 0 40px 80px;
        }

        /* CARD DESIGN */
        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            text-align: left;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.02);
            display: block; /* Hidden by default via JS if needed */
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .card h3 {
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: var(--primary);
            font-family: 'Playfair Display', serif;
        }

        /* BUTTONS INSIDE CARDS */
        .card a {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            padding: 12px 20px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .btn-code {
            background: var(--primary);
            color: white;
        }

        .btn-pdf {
            background: #f0f0f0;
            color: var(--primary);
            margin-left: 5px;
        }

        .card a:hover {
            opacity: 0.9;
            letter-spacing: 0.5px;
        }

        /* ANIMATION */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease forwards;
        }
    </style>
</head>
<body>

<header>
    <h1>Aya Portfolio</h1>
    <p>IT Student & Developer</p>
</header>

<div class="filters">
    <button class="filter-btn active" onclick="filterAtelier('all')">Tout</button>
    <button class="filter-btn" onclick="filterAtelier('1')">Atelier 1</button>
    <button class="filter-btn" onclick="filterAtelier('2')">Atelier 2</button>
</div>

<div class="container" id="projectGrid">
    <?php foreach($projects as $project): ?>
        <div class="card project-card fade-in" data-atelier="<?php echo $project['atelier']; ?>">
            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
            <a href="<?php echo $project['link']; ?>" 
               class="<?php echo ($project['type'] === 'pdf') ? 'btn-pdf' : 'btn-code'; ?>"
               <?php echo ($project['type'] === 'pdf') ? 'target="_blank"' : ''; ?>>
               <?php echo ($project['type'] === 'pdf') ? '📄 Lire le Rapport' : '💻 Voir l\'exercice'; ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function filterAtelier(atelier) {
        const cards = document.querySelectorAll('.project-card');
        const buttons = document.querySelectorAll('.filter-btn');

        // Update active button
        buttons.forEach(btn => {
            btn.classList.remove('active');
            if(btn.innerText.includes(atelier) || (atelier === 'all' && btn.innerText === 'Tout')) {
                btn.classList.add('active');
            }
        });

        // Filter cards
        cards.forEach(card => {
            card.style.display = 'none'; // Hide all
            if (atelier === 'all' || card.getAttribute('data-atelier') === atelier) {
                card.style.display = 'block'; // Show matched
                card.classList.remove('fade-in');
                void card.offsetWidth; // Trigger reflow for animation
                card.classList.add('fade-in');
            }
        });
    }
</script>

</body>
</html>