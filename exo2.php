<h1>Exercice 2</h1>
<p>ecrire l'instruction permettant de calculer le nombre de mots dans la phrase</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nb_de_mots = str_word_count($phrase); // str_word_count() sert à compter le nombre de mots dans une chaine de caracteres
echo "la phrase (Notre formation DL commence aujourd'hui) contient \"$nb_de_mots\" mots";

