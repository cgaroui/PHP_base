<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<?php


$dateNaissance = new DateTime('1985-01-17');
$dateCourante   = new DateTime('2018-05-21');

$interval = $dateNaissance->diff($dateCourante); // cette fonction calcul linterval entre la date la plus ancienne et la plus recente
// var_dump($interval); // cette fonction contien beaucoup d'information sur date jour heure exacte nb de jour depuisd la naissance ......


//methode 1 
$annee = $dateNaissance->diff($dateCourante)->y;     //-> y pour avoir l'année dans le tas d'information 
$mois = $dateNaissance->diff($dateCourante)->m;     //-> y pour avoir le mois dans le tas d'information
$jour = $dateNaissance->diff($dateCourante)->d;     //-> y pour avoir le jour dans le tas d'information
echo "age de la personne est : "." ".$annee."annee"." ",$mois."mois"." ".$jour."jours <br>";



//methode 2 
echo "age de la personne est :".$interval->format("%Y ans %m mois %d jours");






//remarque : date("h:i:sa")=> cette fonction affiche l'heure exacte heure secondes et m.s



