<?php
session_start();
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
$address = htmlspecialchars($_POST["address"]);
$zip = htmlspecialchars($_POST["zip"]);
$price = 15;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Form Submission Activity</title>
        <link rel="stylesheet" type="text/css" href="cart.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="cart">
                <center>
                    <h1>Producted Purchased</h1>
                    <table>
                        <tr>
                            <th>Quantity</th>
                            <th>Map</th>
                            <th>Price</th>
                        </tr>
                        <?php
                        $total = 0;
                        for($n = 0; $n < count($_SESSION['quantity']); $n++)
                        {
                            if($_SESSION["quantity"][$n] != null && $_SESSION["quantity"][$n] >= 1){
                                echo "<tr><td>" . $_SESSION["quantity"][$n] . "</td> <td>" . $_SESSION["books"][$n] . "</td><td>" . $_SESSION["quantity"][$n] * $price . "$</td></tr>";
                                $total += $_SESSION["quantity"][$n] * $price;
                            }
                        }
                        ?>
                        <tr><td colspan="3"> Total Price is: $ <?=$total ?></td></tr>
                    </table>
                    <h1>Shipping Address</h1>
                    <p><?=$address ?></p>
                    <p><?=$city ?>, <?=$state ?>, <?=$zip?></p>
                </center>
            </div>
        </div>
    </body>
</html>