<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/description.css">
    <title>GFuel - Accueil</title>
</head>
<header>
<?php
session_start();
if (empty($_SESSION['id'])) {
    include_once 'navbar.php';
}
else {
    include_once 'navbar_connected.php';
}
?>
</header>
<body>
    <div class="main">
        <div class="produit">
            <?php echo ("<img class=\"mainimage\" src=\"../html/images/".$_GET['produit'].".png\">"); ?>
            <p class="h2"><?php echo $_GET['produit'] ?></p>
        </div>
        <div class="produit">
            <p class="texte">Cette poudre boostant au gout multicouleur est très bien wow cest fou malade le prochain site j'utilise bootstrap cest bon la</p>
            <p class="h2">4,5 Étoiles</p>
            <div class="etoile">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
            </div>
            <a href="../html/php/ajouterArticle.php?libelle=Doodleberry&quantite=1&prix=20"><button class="ajouter">Ajouter au panier</button></a>
        </div>
    </div>
    <div class="other">
        <p class="h2">Découvrez d'autres produits</p>
        <?php if ($_GET['produit'] == 'Doodleberry' or $_GET['produit'] == 'Gummyfish' or $_GET['produit'] == 'TempV') {
            echo '<div class="produits">
            <div class="produit2"><a href="../html/description.php?produit=Fazeberry" class="description">
                <img src="images/Fazeberry.png" class="image">
                <p class="nom">Fazeberry</p>
                <p class="description">Boisson Énergétique</p>
                <p class="nom">10€</p>
                <div class="etoile">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <a href="../html/php/ajouterArticle.php?libelle=Fazeberry Can&quantite=1&prix=10"><button class="ajouter">Ajouter au panier</button></a>
            </div>
            <div class="produit2"><a href="../html/description.php?produit=Clickbait" class="description">
                <img src="images/Clickbait.png" class="image">
                <p class="nom">Clickbait</p>
                <p class="description">Boisson Énergétique</p>
                <p class="nom">10€</p>
                <div class="etoile">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                </div>
                <a href="../html/php/ajouterArticle.php?libelle=Clickbait&quantite=1&prix=10"><button class="ajouter">Ajouter au panier</button></a>
            </div>
            <div class="produit2"><a href="../html/description.php?produit=Wumpafruit" class="description">
                <img src="images/Wumpafruit.png" class="image">
                <p class="nom">Wumpafruit</p>
                <p class="description">Boisson Énergétique</p>
                <p class="nom">10€</p>
                <div class="etoile">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                </div>
                <a href="../html/php/ajouterArticle.php?libelle=Wumpafruit&quantite=1&prix=10"><button class="ajouter">Ajouter au panier</button></a>
            </div>';
            }
            else {
                echo '<div class="produits">
                <div class="produit2"><a href="../html/description.php?produit=Doodleberry" class="description">
                    <img src="images/Doodleberry.png" class="image">
                    <p class="nom">DoodleBerry</p>
                    <p class="description">Poudre Boostante</p>
                    <p class="nom">20€</p>
                    <div class="etoile">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>
                    <a href="../html/php/ajouterArticle.php?libelle=Doodleberry&quantite=1&prix=20"><button class="ajouter">Ajouter au panier</button></a>
                </a></div>
                <div class="produit2"><a href="../html/description.php?produit=Gummyfish" class="description">
                    <img src="images/Gummyfish.png" class="image">
                    <p class="nom">GummyFish</p>
                    <p class="description">Poudre Boostante</p>
                    <p class="nom">20€</p>
                    <div class="etoile">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
                    </div>
                    <a href="../html/php/ajouterArticle.php?libelle=Gummyfish&quantite=1&prix=20"><button class="ajouter">Ajouter au panier</button></a>
                </div>
                <div class="produit2"><a href="../html/description.php?produit=TempV" class="description">
                    <img src="images/TempV.png" class="image">
                    <p class="nom">TempV</p>
                    <p class="description">Poudre Boostante</p>
                    <p class="nom">20€</p>
                    <div class="etoile">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                    </div>
                    <a href="../html/php/ajouterArticle.php?libelle=TempV&quantite=1&prix=20"><button class="ajouter">Ajouter au panier</button></a>
                    </a>
                </div>
            </div>';
            }
        ?>
    </div>
</body>
<?php include "footer.html"?>
<html>