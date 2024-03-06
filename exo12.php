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

foreach ($tableau as $prenom => $langue){
    if ($langue == "FRA")
        echo "Salut ".$prenom."<br>";
    elseif($langue == "ESP")
        echo "Hola ".$prenom."<br>";
    else
        echo "Hello ".$prenom."<br>";
}