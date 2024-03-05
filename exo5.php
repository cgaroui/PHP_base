<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<?php


$francs = 98;
echo "la valeur de".$francs." franc <br>";
$enEuro = $francs*1.041;

echo ("ça nous donne ".round($enEuro,2)."euros");