<?php
require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';


echo "<h2>Ini Adalah Release 0</h2>";
$sheep = new Animal("shaun");

echo  $sheep->name . "<br>"; // "shaun"
echo  $sheep->legs . "<br>"; // 4
echo  $sheep->cold_blooded . "<br>"; // "no"


echo "<br>";
echo "<h2>Ini Adalah Release 1</h2>";

//animal
$sheep = new Animal("shaun");
echo "Name : " . $sheep->get_name() . "<br>"; // "shaun"
echo "Leghs : " . $sheep->get_legs() . "<br>"; // 4
echo "Cold Blooded : " . $sheep->get_cold_blooded() . "<br>"; // "no"


//frog
echo "<br>";
$kodok = new Frog("buduk");
echo "Name : " . $kodok->get_name() . "<br>";
echo "Leghs : " . $kodok->get_legs() . "<br>";
echo "Cold Blooded : " . $kodok->get_cold_blooded() . "<br>";
echo "Jump : " . $kodok->jump(); // "hop hop"

//ape
echo "<br> <br>";
$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->get_name() . "<br>";
echo "Leghs : " . $sungokong->get_legs() . "<br>";
echo "Cold Blooded : " . $sungokong->get_cold_blooded() . "<br>";
echo "Yell : " . $sungokong->yell() . "<br>"; // "Auooo"
?>