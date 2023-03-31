<?php include "../php/connect.php";
session_start();
$recup = $db->prepare("UPDATE users SET email = ? WHERE email = ?");
# On injecte les données dans la requête
$recup->execute(array(($_POST['email']),$_SESSION['email']));
session_destroy();
header("Location: ../")
?>