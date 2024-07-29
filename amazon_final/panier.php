<?php
    include 'data.php';

    session_start();
    $total= 0;
    $_SESSION ["panier"] = array (0,1,2,3,4);

    $panier = $_SESSION ["panier"];
    
$nmbrarticle=count($produits);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="III.css">
    <title>Document</title>
</head>
<body>

<?php for ($i=0;$i<$nmbrarticle;$i=$i+1){ ?> <?php } ?>


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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<div class="panier">
        <div class="pan-header">
            <h3>Votre panier</h3>
            <a href="#">Désélectionner tous les éléments</a>
        </div>



        <div class="cart-items">
    <?php 
        $total = 0;
        foreach ($_SESSION['panier'] as $articleId) {
            // Récupère les détails de l'article à partir du tableau $produits en utilisant l'ID de l'article
            $article = $produits[$articleId];
            $subtotal = $article['price'];
            $total += $subtotal;
    ?>


            <div class="cart-item">
                <div class="item-name"><?= $article['name']; ?></div>
                <div class="item-price">Prix: <?= $subtotal; ?>€</div>
            </div>
        <?php } ?>
        </div>

        <div class="total">
            <?php echo 'Total : ' . $total . ' Euros'; ?>
        </div>
    </div>


</body>
</html>