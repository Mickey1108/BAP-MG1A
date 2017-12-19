<?php


$voornaam = $_POST['Voornaam'];
$achternaam = $_POST['Achternaam'];

echo '<h1> Jouw naam: ' . $voornaam . " ". $achternaam . '</h1>';


$woonplaats = $_POST['Woonplaats'];
echo '<h1> Jij woont in ' . $woonplaats . '</h1>';
echo "<h2>Wat leuk ik woon ook in $woonplaats</h2>";