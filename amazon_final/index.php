<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--Nav_bar_1-->
<nav>
   <a href="http://localhost/amazon_beta_2/amazon_final/"><img src="logo_amazon.png" alt="" srcset=""></a>
   <li><a href="http://localhost/amazon_beta_2/amazon_final/panier.php">Panier</a></li>
</nav>


<!--Nav_bar_2-->

<nav class="second_nav">

            <div class="text_left">
                <a href="#">Meilleurs Ventes</a>
                <a href="#">Amazon Basics</a>
                <a href="#">Ventes Flash</a>
                <a href="#">Dernières Nouveautés</a>
                <a href="#">Idées Cadeaux</a>              
            </div>

            <div class="text_right">
                <a href="">Offres de la rentrée</a>
            </div>
</nav>
 
<!--Boucle-->

    <div class="product-list">
       <?php

       include("data.php"); 
        foreach ($produits as $item) { ?>
            <div class="product-item" id="product-<?php echo $item['id']; ?>">
                <img class="produit-image" src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                <h3><?php echo $item['name']; ?></h3>
                <p>Prix: <?php echo $item['price']; ?>€</p>
                <form  action='produit.php' method='get'>
                <input type='hidden' name="id" value='<?php echo $item['id']; ?>'>
                <input class ="btn_acheter" type='submit' value='En savoir plus'>
                </form>
                <!-- <button class = "btn_acheter"><a href="produit.php">?php echo $item['overview']; ?></a></button> -->
            </div>
        <?php } ?>

    </div>

<!--Footer-->
    <div class="bottom">
        <p>Pour mieux nous connaitre</p>
        <p>Gagnez de l'argent</p>
        <p>Moyen de payement Amazon</p>
        <p>Besoin d'aide?</p>
</div>

</body>
</html>


