<?php
require_once 'frog.php';
require_once 'ape.php';
require_once 'animal.php';

$sheep = new Animal ("shaun");
$kodok = new Frog ("buduk");
$sungokong = new Ape ("kera sakti");

echo "Name: " . $sheep -> name . "<br>";
echo "legs: " . $sheep -> legs . "<br>";
echo "cold blooded: " . ($sheep -> cold_blooded) . "<br>";
echo "<br>";

echo "Name: " . $kodok -> name . "<br>";
echo "legs: " . $kodok -> legs . "<br>";
echo "cold blooded: " . ($kodok -> cold_blooded) . "<br>";
echo "Jump: " . $kodok -> jump() . "<br>";
echo "<br>";

echo "Name: " . $sungokong -> name . "<br>";
echo "legs: " . $sungokong -> legs . "<br>";
echo "cold blooded: " . ($sungokong-> cold_blooded) . "<br>";
echo "Yell: " . $sungokong -> yell() . "<br>";

?>