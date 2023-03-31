<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/produits.css">
    <title>GFuel - Produits</title>
</head>
<header>
<?php
session_start();
if (empty($_SESSION['id'])) {
    include ('navbar.php');
}
else {
    include ('navbar_connected.php');
}

?>
</header>
<body>
    <div class="recherche">
        <input type="text" placeholder="Recherchez ici">
    </div>
    <div class="produits">
        <div class="produit"><a href="../html/description.php?produit=Doodleberry" class="description">
            <img src="images/Doodleberry.png" class="image">
            <p class="nom">DoodleBerry</p>
            <p class="description">Poudre Boostante</p>
            <p class="nom">20€</p>
            <div class="etoile">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <a href="../html/php/ajouterArticle.php?libelle=Doodleberry&quantite=1&prix=20"><button class="ajouter">Ajouter au panier</button></a>
        </a></div>
        <div class="produit"><a href="../html/description.php?produit=Gummyfish" class="description">
            <img src="images/Gummyfish.png" class="image">
            <p class="nom">GummyFish</p>
            <p class="description">Poudre Boostante</p>
            <p class="nom">20€</p>
            <div class="etoile">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
            </div>
            <a href="../html/php/ajouterArticle.php?libelle=Gummyfish&quantite=1&prix=20"><button class="ajouter">Ajouter au panier</button></a>
        </div>
        <div class="produit"><a href="../html/description.php?produit=TempV" class="description">
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
    </div>
    <div class="produits">
        <div class="produit"><a href="../html/description.php?produit=Fazeberry" class="description">
            <img src="images/Fazeberry.png" class="image">
            <p class="nom">Fazeberry</p>
            <p class="description">Boisson Énergétique</p>
            <p class="nom">10€</p>
            <div class="etoile">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <a href="../html/php/ajouterArticle.php?libelle=Fazeberry Can&quantite=1&prix=10"><button class="ajouter">Ajouter au panier</button></a>
        </div>
        <div class="produit"><a href="../html/description.php?produit=Clickbait" class="description">
            <img src="images/Clickbait.png" class="image">
            <p class="nom">Clickbait</p>
            <p class="description">Boisson Énergétique</p>
            <p class="nom">10€</p>
            <div class="etoile">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
            </div>
            <a href="../html/php/ajouterArticle.php?libelle=Clickbait&quantite=1&prix=10"><button class="ajouter">Ajouter au panier</button></a>
        </div>
        <div class="produit"><a href="../html/description.php?produit=Wumpafruit" class="description">
            <img src="images/Wumpafruit.png" class="image">
            <p class="nom">Wumpafruit</p>
            <p class="description">Boisson Énergétique</p>
            <p class="nom">10€</p>
            <div class="etoile">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
            </div>
            <a href="../html/php/ajouterArticle.php?libelle=Wumpafruit&quantite=1&prix=10"><button class="ajouter">Ajouter au panier</button></a>
        </div>
    </div>
</body>
<?php include "footer.html"?>
</html>