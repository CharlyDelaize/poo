<?php

abstract class Personne{
    private $prenom;
    private $nom;
    private $age;

    public function __construct($prenom, $nom, $age){
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAge($age);
    }

    public function vieillir($age){
         self::$age++;
    }

    // Getters

    public final function getPrenom(){
        return $this->prenom;
    }

    public final function getNom(){
        return $this->nom;
    }

    public final function getAge(){
        return $this->age;
    }

    public function afficher(){
        echo "{$this->prenom} {$this->nom} a {$this->age} ans.";
    }
    // Setters
    public function setPrenom($prenom) {
        if(is_string($prenom)) {
            $this->prenom = $prenom;
        }
    }

    public function setNom($nom) {
        if(is_string($prenom)) {
            $this->nom = $nom;
        }
    }

    public function setAge($age) {
        if(is_int($age)) {
            $this->age = $age;
        }
    }

}

final class Homme extends Personne{
    private $epouse;
    private $prenom = "Harry";
    private $nom = "Prince";
    private $age = 36;

    function chargerClasse($classe) {
        require "Femme.php";
    }

    public function estCelibataire($epouse){
        if($epouse !== null){
            echo $epouse;
        }else{
            echo "Célibataire";
        }
    }

}

final class Femme extends Personne{
    private $epoux;
    private $prenom = "Meghan";
    private $nom = "Markle";
    private $age = 39;

    function chargerClasse($classe) {
        require "Homme.php";
    }

    public function estCelibataire(){
        if($epoux !== null){
            echo $epoux;
        }else{
            echo "Célibataire";
        }
    }

}


?>