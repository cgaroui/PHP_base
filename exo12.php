<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p>

<?php

$tableau = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

ksort($tableau); //ksort tri tableau ordre ascendant k pour dire sur la clé (on met asort pour trier sur la valeur) sachant ds tableau c presente : clé => valeur 
                //on rajour r pour ll'ordre descendant ex: krsort= tri sur cle ordre descendant 

foreach ($tableau as $prenom => $langue){ //La boucle foreach - Parcourt un bloc de code pour chaque élément d'un tableau sans condition d'arret (plus pratique que les autres boucles)
    if ($langue == "FRA")
        echo "Salut ".$prenom."<br>";
    elseif($langue == "ESP")
        echo "Hola ".$prenom."<br>";
    else
        echo "Hello ".$prenom."<br>";
}

