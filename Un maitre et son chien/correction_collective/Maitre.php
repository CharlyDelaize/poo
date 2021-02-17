<?php
function chargerClasse($classe){
    require "Chien.php";
  }

class Maitre{
    private $firstName;
    private $lastName;
    private $age;
    private $dog;

    // Méthode
    public function __construct($firstName = "Jean-Pierre", $lastName = "Bacri", $age = 69){
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
    }

    // Getters
    public function getFirstName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getAge(){
        return $this->age;
    }

    public function getDog(){
        return $this->dog;
    }

    // Setters
    public function setFirstName($firstName){
        if($firstName !== null && is_string($firstName)){
            $this->firstName = $firstName;
        }
        
    }

    public function setLastName($lastName){
        if($lastName !== null && is_string($lastName)){
            $this->lastName = $lastName;
        }
        
    }

    public function setAge($age){
        if($age !== null && is_string($age)){
            $this->age = $age;
        }
        
    }

    public function adopt($dog){
        if($dog instanceof Chien){
            $this->dog = $dog;
        }
        
    }

    public function display(){
        echo "{$this->firstName} {$this->lastName} a {$this->age}";
        if(!empty($this->dog)){
            echo "et un chien : ";
            $this->dog->display();
        }else{
            echo "et pas de chien.";
        }
    }
}

$maitre = new Maitre("Jean-Pierre", "Bacri", 69);

?>