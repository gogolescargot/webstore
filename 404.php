<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/index.css">
    <title>GFuel - 404</title>
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
    <img class="quatrecentquatre" src="../html/images/404.png">
</body>
<?php include "footer.html"?>
</html>