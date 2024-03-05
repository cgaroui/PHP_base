<h1>Exercice 3</h1>

<p>ecrire l'instruction permettant de remplacer le mot "aujourd'hui" par le mot "demain" et afficher les deux versions </p>

<?php

$phrase = "Notre formation DL commence aujourd'hui ";
echo $phrase."<br>";
$phrase2 = str_replace("aujourd'hui" , "demain" ,$phrase);
echo $phrase2;