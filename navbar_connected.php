<?php
include_once "../html/php/fonctions-panier.php";
?>
<div class="navbar">
    <div class="navbar-left">
        <a href="../html/"><img src="../html/images/logo.png" class="logo"></a>
        <a href="../html/produits.php"><button class="button"><i class="fa fa-compass"></i> Produits</button></a>
        <a href="../html/panier.php"><button class="button"><i class="fa fa-shopping-bag"></i> Panier <span class="nbrArticles"><?php echo(compterArticles()); ?></span></button></a>
    </div>
    <div class="navbar-right">
            <a href="../html/profil.php"><button class="button"><i class="fa fa-user-circle"></i> Profil</button></a>
            <a href="../html/php/disconnect.php"><button class="button"><i class="fa fa-sign-out"></i> Se Déconnecter</button></a>
    </div>
</div>
<div class="mobile-navbar">
    <div class="navbar-left">
        <a href="../html/"><img src="../html/images/logo.png" class="logo"></a>
    </div>
    <div class="navbar-right">
        <li>
            <button class="menu"><i class="fa fa-bars"></i></button>
            <ul><a href="../html/produits.php"><button class="button"><i class="fa fa-compass"></i> Produits</button></a></ul>
            <ul><a href="../html/panier.php"><button class="button"><i class="fa fa-shopping-bag"></i> Panier <span class="nbrArticles"><?php echo(compterArticles()); ?></span></button></a></ul>
            <ul><a href="../html/profil.php"><button class="button"><i class="fa fa-user-circle"></i> Profil</button></a></ul>
            <ul><a href="../html/php/disconnect.php"><button class="button"><i class="fa fa-sign-out"></i> Déconnecter</button></a></ul>
        </li>
    </div>
</div>
<div class="promo">
    Un produit acheté un produit OFFERT* !
</div>
