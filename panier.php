<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/panier.css">
    <title>GFuel - Panier</title>
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
<?php
include_once("../html/php/fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récupération des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On vérifie que $p est un float
   $p = floatval($p);

   //On traite $q qui peut être un entier simple ou un tableau d'entiers
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

?>
<body>

<form method="post" action="panier.php">
<table>
    <tr>
        <th>Libellé</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>


    <?php
    if (creationPanier())
    {
       $nbArticles=count($_SESSION['panier']['libelleProduit']);
       if ($nbArticles <= 0)
       echo "<tr><td>Votre panier est vide </td></tr>";
       else
       {
          for ($i=0 ;$i < $nbArticles ; $i++)
          {
             echo "<tr>";
             echo "<td class=\"produit\"><img src=\"../html/images/";
             echo $_SESSION['panier']['libelleProduit'][$i];
             echo ".png\">".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</td>";
             echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
             echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
             echo "<td><a class=\"retirer\" href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Retirer</a></td>";
             echo "</tr>";
          }

          echo "<tr><td colspan=\"2\"> </td>";
          echo "<td colspan=\"2\">";
          echo "Total : ".MontantGlobal();
          echo "</td></tr>";

          echo "<tr><td colspan=\"4\">";
          echo "<input type=\"submit\" class=\"retirer\" value=\"Rafraichir\"/>";
          echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

          echo "</td></tr>";
       }
    }
    ?>
</table>
</form>
<a href="confirm.php"><button class="poursuivre">Poursuivre</button></a>
</body>
<?php include_once 'footer.html'; ?>
</html>