<h1>Exercice</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<?php

$prixUnitaire = 9.99;
$quantitée = 5;
$tauxTva =0.2;

$prixTotal = $prixUnitaire * $quantitée;
$prixTva = $prixUnitaire * $quantitée * 0.2;
$montantFacture = $prixTotal + $prixTva;

echo "prix unitaire : ".$prixUnitaire,
"<br>quantitée : ".$quantitée,
"<br>Taux de TVA : ". $tauxTva,
"<br>Le montant de la facture à régler est de : ".$montantFacture;