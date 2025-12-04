<?php
$user = 'Rairolf Rabang';
$pagbati = "Welcome to Mercury Drug Store, $user. ";
$offer = ["FernC", 5, 100, 80];
$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $reg_price - $offer_price;
$buying = 'yes';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'Extra/header.php'; ?>

    <div>
        <h2></h2>
        <h1><strong> <?= $pagbati; ?></strong></h1>
        <h2>Multi-Buy Offer:</h2>
        <p><strong>Buy <?= $offer[1]; ?> packs of <?= $offer[0]; ?> and get P20 Off per pack!</strong></p>
        <p style = "color:red"><strong>Buy now and save P<?= $offer[2]; ?> Now!</strong></p>
        <p>Usual Price: <?= $reg_price; ?></p>
        <p><strong>Discounted Price: <?= $offer_price; ?></strong></p>
        <p><button class="styledbutton">Buy Now!</button></p>
    </div>

</body>
<footer>
    <?php include 'Extra/footer.php'; ?>
</footer>