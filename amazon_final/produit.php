<?php
include("data.php");

if (isset($_GET['id'])) {
    $productId = $_GET['id'];
    foreach ($produits as $item) {
        if ($item['id'] == $productId) {
            $product = $item;
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produit.css">
    <title>Détails du produit</title>
</head>
<body>
<nav>
   <a href="http://localhost/amazon_beta_2/amazon_final/"><img src="logo_amazon.png" alt="Logo Amazon"></a>
   <ul>
       <li><a href="http://localhost/amazon_beta_2/amazon_final/">Accueil</a></li>
       <li><a href="http://localhost/amazon_beta_2/amazon_final/panier.php">Panier</a></li>
   </ul>
</nav>
<nav class="second_nav">
    <div class="text_left">
        <a href="#">Meilleurs Ventes</a>
        <a href="#">Amazon Basics</a>
        <a href="#">Ventes Flash</a>
        <a href="#">Dernières Nouveautés</a>
        <a href="#">Idées Cadeaux</a>              
    </div>
    <div class="text_right">
        <a href="#">Offres de la rentrée</a>
    </div>
</nav>      
    <div class="container">
        <h1><?php echo $product["name"] ?></h1>
        <img src="<?php echo $product["image"] ?>"/>
        <p><?php echo $product["overview"] ?></p>
        <p><?php echo $product["overview1"] ?></p>
        <p><?php echo $product["overview2"] ?></p>
        <a href="http://localhost/amazon_beta_2/amazon_final/panier.php"><button><p><?php echo $product["overview3"] ?></p></button></a>
        <p><?php echo $product["price"] ?> Euros</p>
        
    </div>
</body>
</html>
