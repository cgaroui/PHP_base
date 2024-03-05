<h1>Exercice 1</h1>

<p>Soit la phrase " Notre formation DL commence aujourd'hui ".<br>
ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase </p>


<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracters = strlen($phrase); // strlen sert à compter la longueur d'une chaine de caractères
echo "La phrase \"$phrase\" contient $nbCaracters caractères.";
