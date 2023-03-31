<?php include "../php/connect.php";
session_start();
$recup = $db->prepare("DELETE FROM users WHERE email = ?");

# On injecte les données dans la requête
$recup->execute(array($_SESSION['email']));
session_destroy();
header("Location: ../")
?>