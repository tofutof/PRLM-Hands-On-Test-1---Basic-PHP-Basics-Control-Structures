<?php
$user = 'Rairolf Rabang';
$greet = "Welcome to Mercury Drug Store, $user. ";
$product = "FernC";
$cost = "100";
$totals = [];

for($counter = 1; $counter <= 15; $counter++){
    $subtotal = $cost * $counter;
    $discount_rate = $counter * 4;
    $discount = ($subtotal / 100) * $discount_rate;
    $totals[$counter] = $subtotal - $discount;
}
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
        <h1><strong> Welcome to Mercury Drug Store</strong></h1>
        <p><?php
        if ($user == "Rairolf Rabang") {
            echo $greet;
        } else {
            echo 'Please Enter A Valid User!';
        }
?>
    </div>
    <h1>Bulk Pricing for <?=$product?></h1>
    <p>You can save more buying in BULK!</p>

    <table>
        <thead>
            <tr>
                <th>Quantity</th>
                <th>Item</th>
                <th>Discounted Price!</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($totals as $quantity => $price){
                echo "<tr>";
                echo "<td>$quantity</td>";
                echo "<td>$product(unit)</td>";
                echo"<td>(P$price) </td>";
            }
            ?>
        </tbody>
    </table>

</body>
<footer>
    <?php include 'Extra/footer.php'; ?>
</footer>