<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/index.css">
    <title>GFuel - Profil</title>
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
    <div class="profildiv">
        <a href="../html/editemail.php"><button class="profil"><i class="fa fa-envelope"></i> Modifier votre Email</button></a>
    </div>
    <div class="profildiv">
        <a href="../html/editmdp.php"><button class="profil"><i class="fa fa-lock"></i> Modifier votre Mot de Passe</button></a>
    </div>
    <div class="profildiv">
        <a href="../html/php/delete.php"><button class="profil"><i class="fa fa-user-circle"></i> Supprimer votre Profil</button></a>
    </div>
</body>
<?php include "footer.html"?>
</html>