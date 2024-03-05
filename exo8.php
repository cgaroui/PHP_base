<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>


<?php

$nombre = 8;
/*
$x1= $nombre * 1;
$x2= $nombre * 2;
$x3= $nombre * 3;
$x4= $nombre * 4;
$x5= $nombre * 5;
$x6= $nombre * 6;
$x7= $nombre * 7;
$x8= $nombre * 8;
$x9= $nombre * 9;
$x10= $nombre * 10;

echo "voici la table de : ".$nombre;
echo "<br> 1 x ".$nombre." = ".$x1,
"<br> 2 x ".$nombre." = ".$x2,
"<br> 3 x ".$nombre." = ".$x3,
"<br> 4 x ".$nombre." = ".$x4,
"<br> 5 x ".$nombre." = ".$x5,
"<br> 6 x ".$nombre." = ".$x6,
"<br> 7 x ".$nombre." = ".$x7,
"<br> 8 x ".$nombre." = ".$x8,
"<br> 9 x ".$nombre." = ".$x9,
"<br> 10 x ".$nombre." = ".$x10;
*/

for($i= 1; $i<=10; $i++){
$resultat = $i * $nombre;
    echo "<br>".$i." x ".$nombre." = ".$resultat;
}
echo "<br>";

$i = 1;
while($i <= 10){
    $resultat = $i * $nombre;
  
    echo "<br>".$i." x ".$nombre." = ".$resultat;
    $i++;

}