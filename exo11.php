<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »</p>

<?php

$marques= array("audi" , "porshe","fiat", "BMW","Mercedes");

$nbmbreMarque = count($marques);

echo "Il ya ".$nbmbreMarque." marques de voitures dans le tableau : <br>";

foreach ($marques as $x){ //boucle mermettant de lister tout les elements du tableau 
    
    echo "$x <br>";
}