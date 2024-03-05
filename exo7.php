<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
</p>

<?php
$age = 6;

if ($age <=7 && $age>=6)
    echo 'l\'enfant qui a '.$age." ans appartient à la catégorie «poussin»";

elseif($age <=9 && $age>=8)
echo "l'enfant qui a ".$age." ans appartient à la catégorie pupille";

elseif($age <=11 && $age>=10)
echo "l'enfant qui a ".$age." ans appartient à la catégorie Minime";

elseif($age>=12)
echo "l'enfant qui a ".$age." ans appartient à la catégorie cadet";

else 
    echo "catégorie non existante";


