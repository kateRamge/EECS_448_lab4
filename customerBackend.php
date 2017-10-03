<?php
echo "<link rel='stylesheet' type='text.css' href='style.css'>";
$userUserName = $_POST["userName"];
$userPassword = $_POST["Password"];
$userIceCream = $_POST["iceCream"];
$userMakeup = $_POST["makeup"];
$userDChocBar = $_POST["DChocBar"];
$userShipping = $_POST["shipping"];
$userShipTotal = 0;
if ($userShipping == "sevenDay") {
  $userShipTotal = 0;
}
elseif ($userShipping == "threeDay") {
  $userShipTotal = 5;
}
elseif ($userShipping == "overnight") {
  $userShipTotal = 50;
}
else {
  $userShipTotal = 2000;
}
echo "<table border='1'>";
echo "Thank you for buying something from us!<br>";
echo "Username " . $userUserName . "<br>";
echo "Password " . $userPassword . "<br><br>";
echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Ben and Jerry's Chubby Hubby Pint</th><th>" . $userIceCream . "</th><th>$3.00</th><th>$" . 3*$userIceCream . "</th></tr>";
echo "<tr><th>Too Faced Chocolate Bon Bons Eyeshadow Palette</th><th>" . $userMakeup . "</th><th>$50.00</th><th>$" . 50*$userMakeup . "</th></tr>";
echo "<tr><th>Compartes Spring Awakening Dark Chocolate / Mixed Berries Bar</th><th>" . $userDChocBar . "</th><th>$10.00</th><th>$" . 10*$userDChocBar . "</th></tr>";
echo "<tr><th>Shipping</th><th colspan=2>" . $userShipping . "</th><th>" . $userShipTotal . "</th></tr>";
echo "<tr><th colspan=3>Total Cost</th><th>$" . ((3*$userIceCream)+(50*$userMakeup)+(10*$userDChocBar)+$userShipTotal) . "</th></tr>";
echo "</table>";

?>
