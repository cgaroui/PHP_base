<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p>

<?php

$montantAPayer = 152;
$montantVerse = 200;
$resteAPayer = $montantVerse - $montantAPayer;
echo "la monnaie est de : ".$resteAPayer." euros <br>";
$billet10 = intval($resteAPayer / 10);


$reste1 = $resteAPayer % 10;

$billet5 = intval($reste1 /5);

$reste2 = $reste1 % 5;

$piece2 = intval($reste2 / 2);

$reste3 = $reste2 % 2;

$piece1 = intval($reste3 / 1);

echo "Rendu de monnaie : <br>",
$billet10." billets de 10 € - ".$billet5." billet de 5 € - ".$piece2." pièce de 2 € - ".$piece1." pièce de 1 €";



