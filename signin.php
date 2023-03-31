<?php
include ("../html/signin.html");

#On créé une session
session_start();
# Formulaire d'inscription
if (isset($_POST["email"], $_POST["password"]) AND !empty($_POST["email"]) AND !empty($_POST["password"] )) {
    # Le formulaire est complet
    # On récupère les données de formulaires en désactivant les balises
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    # On se connecte à la base de données
    require_once "../html/php/connect.php";
    
    # On prépare la requête
    $recup = $db->prepare("SELECT * FROM users WHERE email = ? and password = ?");

    # On injecte les données dans la requête
    $recup->execute(array($email, $password));

    if($recup->RowCount() > 0) {
        while ($session = $recup->fetch()){
        $_SESSION['id'] = $session['id'];
        $_SESSION['email'] = $email;
        }
        header('Location: ../html/ ');
    }
    else {
        die ("Wrong email or password, Try again");
    }
}
else {
    # Des champs n'ont pas été rempli
    die("Error : Missing Field(s)");
}

?>