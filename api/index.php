<?php
// 1. Grouping: Koul 'item' fih l-code wel PDF dyalo
$workshops = [
    ["title" => "Exercice 1", "atelier" => "1", "code" => "exercice1.php", "pdf" => "Rapport Exercice1.pdf"],
    ["title" => "Exercice 2", "atelier" => "1", "code" => "exercice2.php", "pdf" => "Rapport Exercice2.pdf"],
    ["title" => "TD 1", "atelier" => "1", "code" => "td1_Atelier1.php", "pdf" => "Rapport TD1.pdf"],
    ["title" => "TD 2", "atelier" => "1", "code" => "td2_Atelier1.php", "pdf" => "Rapport TD2.pdf"],
    ["title" => "TD 3", "atelier" => "1", "code" => "td3_Atelier1.php", "pdf" => "Rapport TD3.pdf"],
    ["title" => "TD 4", "atelier" => "1", "code" => "td4_Atelier1.php", "pdf" => "Rapport TD4.pdf"],
    ["title" => "TD 5", "atelier" => "1", "code" => "td5_Atelier1.php", "pdf" => "Rapport TD5.pdf"],
    ["title" => "TD 6", "atelier" => "1", "code" => "td6_Atelier1.php", "pdf" => "Rapport TD6.pdf"],
    ["title" => "TD 7", "atelier" => "1", "code" => "td7_Atelier1.php", "pdf" => "Rapport TD7.pdf"],
    ["title" => "TD 8", "atelier" => "1", "code" => "td8_Atelier1.php", "pdf" => "Rapport TD8.pdf"],
    ["title" => "TD 9", "atelier" => "1", "code" => "td9_Atelier1.php", "pdf" => "Rapport TD9.pdf"],
    ["title" => "TD 10", "atelier" => "1", "code" => "td10_Atelier1.php", "pdf" => "Rapport TD10.pdf"],
    ["title" => "TD 11", "atelier" => "1", "code" => "td11_Atelier1.php", "pdf" => "Rapport TD11.pdf"],
    ["title" => "TD 12", "atelier" => "1", "code" => "td12_Atelier1.php", "pdf" => "Rapport TD12.pdf"],
    ["title" => "TD 13", "atelier" => "1", "code" => "td13_Atelier1.php", "pdf" => "Rapport TD13.pdf"],
    ["title" => "Exercice 3", "atelier" => "2", "code" => "exercice3.php", "pdf" => "Rapport Exercice3.pdf"],
    ["title" => "Exercice 4", "atelier" => "2", "code" => "exercice4.php", "pdf" => "Rapport Exercice4.pdf"],
    ["title" => "Exercice 5", "atelier" => "3", "code" => "exercice5.php", "pdf" => "Rapport Exercice5.pdf"],
    ["title" => "Exercice 6", "atelier" => "3", "code" => "exercice6.php", "pdf" => "Rapport Exercice6.pdf"],
    ["title" => "Exercice 7", "atelier" => "4", "code" => "https://github.com/ayaFrijo/atelier-4.git", "pdf" => "Rapport Exercice7.pdf"],
    ["title" => "Exercice 8", "atelier" => "5", "code" => "https://github.com/ayaFrijo/atelier5.git", "pdf" => "Rapport Exercice8.pdf"],
    ["title" => "Exercice 9", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier61.git", "pdf" => "Rapport Exercice9.pdf"],
    ["title" => "Exercice 10", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier62.git", "pdf" => "Rapport Exercice10.pdf"],
    ["title" => "Exercice 11", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier63.git", "pdf" => "Rapport Exercice11.pdf"],
    ["title" => "Exercice 12", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier64.git", "pdf" => "Rapport Exercice12.pdf"],
    ["title" => "Exercice 13", "atelier" => "6", "code" => "https://github.com/ayaFrijo/atelier65.git", "pdf" => "Rapport Exercice13.pdf"]


];

$skills = [
    "HTML" => "98%", "CSS" => "75%", "Bootstrap" => "67%",
    "JS" => "45%", "PHP" => "30%", "Python" => "69%"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aya Portfolio</title>
    <style>
        :root {
            --bg-dark: #0f0f0f;
            --card-bg: #1a1a1a;
            --accent-purple: #8a2be2;
            --text-white: #ffffff;
            --text-gray: #b0b0b0;
            --pdf-red: #7c3ea0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-white);
            margin: 0;
            scroll-behavior: smooth;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background-color: #000;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo { font-size: 1.5rem; font-weight: bold; }
        .logo span { color: var(--accent-purple); }

        nav ul { list-style: none; display: flex; gap: 10px; margin: 0; align-items: center; }
        nav ul li a { 
            text-decoration: none; 
            color: var(--text-white); 
            padding: 8px 15px;
            transition: 0.3s;
            border-radius: 4px;
        }

        nav ul li a.active {
            background-color: white;
            color: var(--accent-purple);
        }

        .lang-btn {
            background: var(--accent-purple);
            border: none;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Hero */
        #home {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 80px 10%;
            min-height: 70vh;
        }

        .hero-content { max-width: 600px; }
        .hero-content h1 { font-size: 3.5rem; margin: 0; }
        .hero-content h2 { color: var(--accent-purple); font-size: 1.8rem; margin: 10px 0; }
        .hero-content p { color: var(--text-gray); margin-bottom: 30px; }

        .btn-primary {
            background-color: var(--accent-purple);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }

        /* Skills */
        section { padding: 60px 10%; }
        .section-title { text-align: center; margin-bottom: 40px; font-size: 2rem; }
        .skills-grid { display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; }
        .skill-item { text-align: center; width: 100px; }
        .circle {
            width: 80px; height: 80px;
            border: 4px solid var(--accent-purple);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Projects Area */
        #projects-area { display: none; background: #141414; }
        .cat-cards-container { display: flex; justify-content: center; gap: 40px; margin-bottom: 50px; }
        .cat-card {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 15px;
            width: 250px;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
            border: 2px solid transparent;
        }
        .cat-card:hover { border-color: var(--accent-purple); transform: scale(1.05); }

        /* Items Grid & New Card Design */
        #workshops-list, #real-projects-list { display: none; }
        .items-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }

        .item-box {
            background: #222;
            padding: 25px;
            border-radius: 12px;
            border-top: 4px solid var(--accent-purple);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .item-box h4 { margin: 10px 0; font-size: 1.2rem; }
        .item-box .atelier-tag { 
            color: var(--accent-purple); 
            font-size: 0.75rem; 
            font-weight: 800; 
            text-transform: uppercase;
        }

        .btn-group { display: flex; gap: 10px; margin-top: 20px; }
        .btn-link {
            flex: 1;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 0.85rem;
            border-radius: 6px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-code { background: #333; color: white; }
        .btn-code:hover { background: #444; }
        .btn-pdf { background: var(--pdf-red); color: white; }
        .btn-pdf:hover { opacity: 0.8; }

        /* Footer & Contact */
        .contact { text-align: center; }
        .social-icons img { width: 35px; margin: 10px; }
    </style>
</head>
<body>

    <nav>
        <div class="logo">Aya <span>portfolio</span></div>
        <ul>
            <li><a href="#home" class="nav-link active">Home</a></li>
            <li><a href="#skills" class="nav-link">Skills</a></li>
            <li><a href="#projects-area" id="projects-nav" class="nav-link">Projects</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
            <li><button class="lang-btn" onclick="toggleLanguage()">FR / EN</button></li>
        </ul>
    </nav>

    <section id="home">
        <div class="hero-content">
            <h1 id="hero-title">Aya Frijo</h1>
            <h2 id="hero-subtitle">IT Student & Developer</h2>
            <p id="hero-desc">I’m Aya, an IT student at ISMONTIC Tangier. I am passionate about learning web application development technologies and build modern user-friendly solutions.</p>
            <button class="btn-primary" onclick="revealProjects()" id="btn-view">View my projects</button>
        </div>
        <div class="hero-image">
            <img src="profile.png" alt="Aya Frijo" style="width: 320px; border-radius: 20px; border-radius:60px box-shadow:0 0 20px #7c3ea0">
        </div>
    </section>

    <section id="skills">
        <h3 class="section-title" id="skills-title">MY SKILLS</h3>
        <div class="skills-grid">
            <?php foreach($skills as $name => $percentage): ?>
            <div class="skill-item">
                <div class="circle"><?php echo $percentage; ?></div>
                <p><?php echo $name; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="projects-area">
        <h3 class="section-title" id="proj-area-title">MY WORK</h3>
        
        <div class="cat-cards-container">
            <div class="cat-card" onclick="toggleCategory('workshops')">
                <i>📁</i>
                <h3 id="cat-workshops">Workshops</h3>
                <p id="cat-workshops-p">Exercises & Tutorials</p>
            </div>
            <div class="cat-card" onclick="toggleCategory('real-projects')">
                <i>🚀</i>
                <h3 id="cat-real">Projects</h3>
                <p id="cat-real-p">Professional Applications</p>
            </div>
        </div>

        <div id="workshops-list">
            <div class="items-grid">
                <?php foreach($workshops as $w): ?>
                <div class="item-box">
                    <div>
                        <span class="atelier-tag">Atelier <?php echo $w['atelier']; ?></span>
                        <h4><?php echo $w['title']; ?></h4>
                    </div>
                    
                    <div class="btn-group">
                        <a href="<?php echo $w['code']; ?>" class="btn-link btn-code">Source Code</a>
                        <a href="<?php echo $w['pdf']; ?>" class="btn-link btn-pdf">PDF Report</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div id="real-projects-list">
            <div class="items-grid">
                <div class="item-box">
                    <span class="atelier-tag">Professional Project</span>
                    <h4>E-commerce "Elys"</h4>
                    <p style="font-size: 0.9rem; color: #aaa;">Full stack PHP platform with WhatsApp order integration.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h3 class="section-title" id="contact-title">CONTACT ME</h3>
        <div class="social-icons">
            <a href="#"><img src="/hd-purple-white-wa-whatsapp-logo-icon-png-701751695122983rg6i8mxdtt.png" alt="WA"></a>
            <a href="#"><img src="download-linkedin-square-purple-icon-png-701751694974001rjxj2ew7jc.png" alt="linkdin"></a>
            <a href="#"><img src="png-clipart-github-protocol-buffers-computer-software-repository-github-purple-violet.png" alt="github"></a>
            <a href="#"><img src="12951026.png" alt="mail"></a>
        </div>
    </section>

    <footer style="text-align: center; padding: 40px; color: #555;">
        &copy; 2026 Aya Frijo Portfolio
    </footer>

    <script>
        let currentLang = 'EN';
        const translations = {
            'FR': {
                'hero-subtitle': 'Étudiante en IT & Développeuse',
                'hero-desc': 'Je suis Aya, étudiante à ISMONTIC Tanger. Passionnée par le développement d\'applications web.',
                'btn-view': 'Voir mes projets',
                'skills-title': 'MES COMPÉTENCES',
                'proj-area-title': 'MON TRAVAIL',
                'cat-workshops': 'Ateliers',
                'cat-workshops-p': 'Exercices & TDs',
                'cat-real': 'Projets',
                'cat-real-p': 'Applications Professionnelles',
                'contact-title': 'CONTACTEZ-MOI'
            },
            'EN': {
                'hero-subtitle': 'IT Student & Developer',
                'hero-desc': 'I’m Aya, an IT student at ISMONTIC Tangier. I am passionate about learning web application development.',
                'btn-view': 'View my projects',
                'skills-title': 'MY SKILLS',
                'proj-area-title': 'MY WORK',
                'cat-workshops': 'Workshops',
                'cat-workshops-p': 'Exercises & Tutorials',
                'cat-real': 'Projects',
                'cat-real-p': 'Professional Applications',
                'contact-title': 'CONTACT ME'
            }
        };

        function toggleLanguage() {
            currentLang = currentLang === 'EN' ? 'FR' : 'EN';
            for (let id in translations[currentLang]) {
                const el = document.getElementById(id);
                if(el) el.innerText = translations[currentLang][id];
            }
        }

        function revealProjects() {
            const area = document.getElementById('projects-area');
            area.style.display = 'block';
            location.href = '#projects-area';
            document.getElementById('projects-nav').classList.add('active');
        }

        function toggleCategory(cat) {
            document.getElementById('workshops-list').style.display = (cat === 'workshops') ? 'block' : 'none';
            document.getElementById('real-projects-list').style.display = (cat === 'real-projects') ? 'block' : 'none';
        }
    </script>
</body>
</html>