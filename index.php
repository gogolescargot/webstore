<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/index.css">
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
    <video src="images/presentation.mp4" id="video" class="presentation" autoplay loop muted></video>
    <h2>La marque de Préworkout la plus connue en Europe !</h2>
    <div class="encadre">
        <img src="../html/images/product1.jpg" class="product">
        <div class="texte">
            <p class="h2">Un gage de qualité</p>
            <p class="h4">Nous nous engageon a vous fournir des produits qui vous redonneront une énergie indispensable lors de vos séance de sport intensive.</p>
        </div>
    </div>
    <div class="encadre">
        <div class="texte">
            <p class="h2">Des partenaire inédit !</p>
            <p class="h4">Nous nous proposons des nombreux goûts à travers les différent partenariat qui touche le monde du jeux vidéo de l'animation japonaise et bien d'autre.</p>
        </div>
        <img src="../html/images/product2.png" class="product">
    </div>
    <div class="encadre">
        <img src="../html/images/france.jpg" class="product">
        <div class="texte">
            <p class="h2">Une fabrication 100% Française !</p>
            <p class="h4">Nos produits sont tous fabriqués en France dans notre usine localisé en Alsace, ainsi que les ingrédiants qui sont aussi 100% origine France.</p>
        </div>
    </div>
    <div class="endpage">
        Découvrez toute notre gamme de produit juste ci-dessous !    
    </div>
    <a href="../html/produits.php"><button class="buttonendpage"><i class="fa fa-compass"></i> La liste entière de nos Produits</button></a> 
</body>
<?php include "footer.html"?>
<html>