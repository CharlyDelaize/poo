<?php
// Définition de la classe asbtraite 'Personne'
abstract class Personne {
    private $prenom;
    private $nom;
    private $age;

    public function __construct($prenom, $nom, $age) {
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAge($age);
    }

    final public function vieillir() {
        $this->setAge($this->age++); // Incrémente la valeur de l'attribut $age
    }

    // Getters
    final public function getPrenom() {
        return $this->prenom;
    }

    final public function getNom() {
        return $this->nom;
    }

    final public function getAge() {
        return $this->age;
    }

    // Setters
    final public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    final public function setNom($nom) {
        $this->nom = $nom;
    }

    final public function setAge($age) {
        if($age > 0 && $age < 120) {
            $this->age = $age;
        }
    }

    // Affiche les caractéristiques d'une personne (prénom, nom et âge)
    public function afficher() {
        echo "{$this->prenom} {$this->nom} a {$this->age} ans. ";
    }

    // Définition de la méthode abstraite estCelibataire() à implémenter dans les classes enfants de la classe 'Personne'
    abstract public function estCelibataire();
}

?>