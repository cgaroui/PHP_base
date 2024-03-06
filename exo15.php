<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>


<?php
// class
class Personne {
    private string $nom;
    private string $prenom;
    private DateTime $date;



// constructeur -> la ou je donne une valaeur à chacun de mes paramettre , attention ordre des parametre est tres important à l'interieur de la fonction

    public function __construct(string $nom, string $prenom , string $date){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
    }


    // getter -> methode ( en realiter une fonction public qui fait le lien entre les attrinus privé de la class et les classes externes  )

    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getDate(){
        return $this->date;
    }
    

// setter -> methode permet d'acceder et modifier les element privé de la classe meme depuis l'exterieur de cette classe 
    public function setNom($prenom){
        return $this->nom = $prenom ;
    }
    public function setPrenom($nom){
        return $this->prenom = $nom;
    }
    public function setDate($date){
        return $this->date = $date;
    }
    public function getAge(){
        $today = new DateTime();
        $age = $this->date -> diff($today)->y;
        return $age." ans<br>";
    }

}

$p1 = new Personne ( "DUPONT","Michael","1980-02-19");
$p2 = new Personne ( "DUCHEMIN","Alice","1985-01-17");

echo $p1->getNom()." ".$p1->getPrenom()." a ".$p1->getAge();
echo $p2->getNom()." ".$p2->getPrenom()." a ".$p2->getAge();
