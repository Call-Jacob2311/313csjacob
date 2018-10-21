<?php 
session_start();
if($_SESSION['new'][0] == 1){
   $_SESSION['new'][0] = 0;
   $_POST['books'] = $_SESSION['quantity'];
}
$books = $_POST["books"];
if($books){
    $_SESSION['quantity'] = $books;
    $_SESSION['books'] = array('The Name of the Wind', 'Wise Mans Fear', 'The Doors of Stone', 'Way of Kings', 'Words of Radiance', 'Oathbringer', 'Mistborn');
}
echo count($_SESSION['quantity']);
$price = 15;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" type="text/css" href="cart.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="cart">
                <center><h1>Cart</h1></center>
                <table>
                    <tr>
                        <th>Quantity</th>
                        <th>Map</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                    for($n = 0; $n < count($_SESSION['quantity']); $n++)
                    {
                        if($_SESSION["quantity"][$n] != null && $_SESSION["quantity"][$n] >= 1){
                            echo "<tr><td>" . $_SESSION["quantity"][$n] . "</td> <td>" . $_SESSION["books"][$n] . "</td><td>" . $_SESSION["quantity"][$n] * $price . "$</td><td><button type=\"button\" onclick=\"removeFromCart($n)\">Delete</button></td></tr>";
                        }
                    }
                    ?>		
                </table>
                <center><a class="button" href="shoppingcart.php">Change Order</a> <a class="button" href="checkout.php">Checkout</a></center>
            </div>
        </div>
    </body>
    <script>
        function removeFromCart(index){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    location.reload();
                }
            };
            xhttp.open("GET", "removeFromCart.php?index=" + index, true);
            xhttp.send();
        }
    </script>
</html>