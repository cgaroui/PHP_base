<h1>Exercice 4</h1>
<p>Ecrire un algorythme permettant de savoir si une phrase est palandindrome </p>

<?php

$phrase = "Engage le jeu que je le gagne";

$phraseMaj = strtoupper($phrase);

$phrase_ss_espace = str_replace(' ','',$phraseMaj);
 
echo $phraseMaj;
echo $phrase_ss_espace;

$inverser = strrev($phrase_ss_espace);

if($inverser == $phrase_ss_espace)
    echo "la phrase est palindrome";
else
    echo "la phrase n'est pas palindrome";

