<?php include "../php/connect.php";
session_start();
$recup = $db->prepare("UPDATE users SET password = ? WHERE email = ?");
# On injecte les données dans la requête
$recup->execute(array((sha1($_POST['password'])),$_SESSION['email']));
session_destroy();
header("Location: ../")
?>