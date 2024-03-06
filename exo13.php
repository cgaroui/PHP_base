<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<?php

$notes = [ 10,12,8, 19, 3, 16, 11, 13, 9];


$moyenne = array_sum($notes)/ count($notes); //la premere fonction sert a faire la somme des valeur et le count sert à compter le nombre d'élement du tableau,la division nous donne la moyenne 
$resultat = round($moyenne,2); // round sert à arrondir on precise 2 car on veux 2 decimales du nombre 

echo "les notes obtenus par l'elève sont : ";
foreach($notes as $note){  // une boucle foreach pour afficher chaque note qd elle parcour le tableau 
    echo "$note  ";
}

echo "<br> la moyenne générale de l'élève est donc de : $resultat";