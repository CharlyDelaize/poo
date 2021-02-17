<?php

abstract class Personne{
    private $prenom;
    private $nom;
    private $age = 0;

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

    abstract estCelibataire(){}
}


?>