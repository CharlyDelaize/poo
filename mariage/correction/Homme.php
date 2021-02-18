<?php

final class Homme extends Personne {

    private $epouse;

    public function __construct($nom, $prenom, $age){
        parent::__construct($nom, $prenom, $age);
    }

    //Getters
    public function getEpouse(){
        return $this->epouse;
    }

    // Setters
    public function setEpouse(){
        $this->epouse = $epouse;
    }

    public function estCélibataire() : bool {
        if(!empty($epouse)){
            return false;
            echo "n'est pas célibataire";
        }else{
            return true;
            echo "est célibataire";
        }
    }

    public function marier($epouse){
        if ($epouse instanceof Femme){
            $this->setEpouse($epouse);
            $epouse->setEpouse($this);
        }
    }

    public function afficher(){
        parent::afficher();
        if($this->estCélibataire()){
            echo "et est célibataire";
        }else{
            echo "n'est pas célibataire et est marié à : {$this->epouse->prenom}";
            echo $this->epouse->afficher();
        }
    }
}



?>