<?php
session_start();
if(!isset($_SESSION['logged_in'])){
    header('location: index.php');
    exit();
}


if(isset($_GET['del'])){
    $index=$_GET['del'];
    unset($_SESSION['panier'][$index]);
    $_SESSION['panier']=array_values($_SESSION['panier']);
    header('location: panier.php');
    exit;
}

$total=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f9f9f9; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background: #007bff; color: white; }
        td img { width: 80px; height: 80px; object-fit: cover; border-radius: 5px; }
        .delete { background: red; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; }
        .total { font-size: 22px; font-weight: bold; margin-top: 15px; text-align: left; }
        .back { background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

<a href="store.php" class="back">retour au store</a>
   <?php if(empty($_SESSION['panier'])): ?>
        <p>Panier vide!</p>
        

    <?php else: ?>
     <table>
            <tr>
                <th>image</th>
                <th>article</th>
                <th>prix</th>
                <th>supprimer</th>
            </tr>
    <?php foreach($_SESSION['panier'] as $index=>$item ):
        $total+=$item['prix'];
    
     ?>
     <tr>
        <td>
            <img src="<?= $item['image']?>">

        </td>
        
        <td>
            <?= $item['nom'] ?>

        </td>

        <td>
            <?= $item['prix'] ?>
        </td>

        <td>
            <a href="panier.php?del=<?= $index ?>" class='delete'>Supprimer</a>

        </td>
        </tr>  
        <?php endforeach; ?>
        
       
        </table>
      

       <div class='total'>Total:<?= $total?>DHS</div>
       <?php endif;?>

</body>
</html>