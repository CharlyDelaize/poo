<?php

abstract class Personne{
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
    }
    
    
    // Méthode
    
    // Getters
    
    final public function getNom(){
        return $this->nom;
    }
    
    final public function getPrenom(){
        return $this->prenom;
    }
    
    final public function getAge(){
        return $this->age;
    }
    
    // Setters
    
    public function setNom(){
        $this->nom = $nom;
    }
    
    public function setPrenom(){
        $this->prenom = $prenom;
    }
    
    public function setAge(){
        $this->age = $age;
    }
    
    public function vieillir(){
        $this->age++;
    }
    
    public function afficher(){
        echo "{$this->nom} {$this->prenom} a {$this->age} ans";
    }
}


?>