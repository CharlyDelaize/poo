<?php

class Homme{
    private $prenom;
    private $nom;
    private $age;
    private $epouse;

    function chargerClasse($classe) {
        require "Femme.php";
    }

    public function __construct($epouse){
        $this->setEpouse($epouse);
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setEpouse($epouse){
        $this->epouse = $epouse;
    }

    public function estCelibataire(){
        $prenom = "Harry";
        $nom = "Prince";
        $age = 36;
        if(empty($epouse)){
            echo "{$prenom} {$nom} a {$age} ans et est marié à {$this->epouse} <br>";
        }else{
            echo "Célibataire";
        }
    }

    public function marier(){
        $prenom = "Harry";
        $nom = "Prince";
        echo "{$prenom} {$nom} Je vous déclare mari et femme <br>";
    }

    public function afficher($epouse){
        echo $epouse;
    }

}

?>