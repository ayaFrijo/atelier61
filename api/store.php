<?php

session_start();
if(!isset($_SESSION['logged_in'])){
    header('location:index.php');
    exit();
}

if(!isset($_SESSION['panier'])){
    $_SESSION['panier']=[];
}

if(isset($_POST['add_to_cart'])){
    $produits=[
        'nom'=>$_POST['nom'],
        'prix'=>$_POST['prix'],
        'image'=>$_POST['image']
        
    ];
    $_SESSION['panier'][]=$produits;
    header('location: panier.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9; color: #333; }
        header { background-color: #ffffff; padding: 1rem 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); position: sticky; top: 0; }
        nav a { margin: 0 15px; text-decoration: none; color: #333; font-weight: bold; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; padding: 2rem 5%; }
        .card { background: white; padding: 15px; text-align: center; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .card img { max-width: 100%; height: 300px; object-fit: cover; border-radius: 8px; }
        .card button { background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; width: 100%; }
        .card button:hover { background-color: #218838; }
    </style>
</head>
<body>
    <header>
        <div class="logo">BAG STORE</div>
        <nav>
            <a href="#">accueil</a>
            <a href="#products">produits</a>
            <a href="panier.php">panier (<span><?= count($_SESSION['panier']) ?></span>)</a>
            <a href='index.php'>Déconnexion</a>
        </nav>
    </header>

    <main id="products">
        <div class="product-grid">
           
      
            <div class="card">
                <img src="../public//images/sac1.jfif" alt="حقيبة">
                <h3>sac à main en cuir pour femme</h3>
                <p>250 DHS</p>
             
                <form method="POST">
                    <input type="hidden" name="nom" value="sac à main en cuir pour femme">
                    <input type="hidden" name="prix" value="250">
                    <input type="hidden" name="image" value="../public/images/sac1.jfif">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
           
        
            <div class="card">
                <img src="../public/images/sac2.jfif" alt="حقيبة">
                <h3>sac à main en cuir pour femme</h3>
                <p>320 DHS</p>
               
                <form method="POST">
                    <input type="hidden" name="nom" value="sac à main en cuir pour femme">
                    <input type="hidden" name="prix" value="320">
                    <input type="hidden" name="image" value="../public/images/sac2.jfif">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>

            
             <div class="card">
                <img src="../public/images/sac3.jfif" alt="حقيبة">
                <h3>sac à main argenté pour femme</h3>
                <p>350 DHS</p>
               
                <form method="POST">
                    <input type="hidden" name="nom" value="sac à main argenté pour femme">
                    <input type="hidden" name="prix" value="350">
                    <input type="hidden" name="image" value="../public/images/sac3.jfif">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>

            
             <div class="card">
                <img src="../public/images/sac4.jfif" alt="حقيبة">
                <h3>sac à main en cuir pour femme</h3>
                <p>200 DHS</p>
               
                <form method="POST">
                    <input type="hidden" name="nom" value="sac à main en cuir pour femme">
                    <input type="hidden" name="prix" value="200">
                    <input type="hidden" name="image" value="../public/images/sac4.jfif">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>

                <div class="card">
                <img src="../public/images/sac5.jpg" alt="حقيبة">
                <h3>sac à main moderne pour femme</h3>
                <p>240 DHS</p>
               
                <form method="POST">
                    <input type="hidden" name="nom" value="sac à main moderne pour femme">
                    <input type="hidden" name="prix" value="240">
                    <input type="hidden" name="image" value="..public//images/sac5.jpg">
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>