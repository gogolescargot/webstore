<?php
session_start();
include_once "fonctions-panier.php";
ajouterArticle($_GET["libelle"],$_GET["quantite"],$_GET["prix"]);
header("Location: ". $_SERVER['HTTP_REFERER']);
?>