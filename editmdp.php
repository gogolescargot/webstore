<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/edit.css">
    <title>GFuel - Accueil</title>
</head>
<header>
<?php
session_start();
if (empty($_SESSION['id'])) {
    header("Location: ../html/");
}
else {
    include_once 'navbar_connected.php';
}
?>
</header>
<body>
    <form action="../html/php/editmdp.php" method="post" class="edit">
        <label for="password">Entrez votre nouveau mot de passe : </label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Envoyer" class="submit">
    </form>
</body>
<?php include "footer.html"?>
<html>