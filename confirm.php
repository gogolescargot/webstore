<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../html/style/index.css">
    <title>GFuel - Confirmation</title>
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
<body>
<div class="form">
            <h2>
                Payment
            </h2>
            <p class="h4">Prix à payer : <?php echo MontantGlobal(); ?> €</p>
        <form class="paiement">
                <table>
                    <tr>
                        <td>Card Number :</td>
                        <td><input type="phone" placeholder="5355 9012 1234 5678" required></td>
                    </tr>
                    <tr>
                        <td>Name on card :</td>
                        <td><input type="firstname" placeholder="Charles Brown" required></td>
                    </tr>
                    <tr>
                        <td>Exipiration date :</td>
                        <td><input type="firstname" placeholder="10/2025" required></td>
                    </tr>
                    <tr>
                        <td>CVV :</td>
                        <td><input type="password" placeholder="123" required></td>
                    </tr>
                </table>
                <div id="submit">
                    <a href="../html/";><button class="poursuivre" ><i class="fa fa-lock"></i> Payer</button></a>
                </div>
</form>
    </div>
</body>
<?php include "footer.html"?>
<html>