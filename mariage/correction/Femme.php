<?php

final class Femme extends Personne {

    private $epoux;

    public function __construct($nom, $prenom, $age){
        parent::__construct($nom, $prenom, $age);
    }

    //Getters
    public function getEpoux(){
        return $this->epoux;
    }

    // Setters
    public function setEpoux(){
        $this->epoux = $epoux;
    }

    public function estCélibataire() : bool {
        if(empty($epoux)){
            return false;
        }else{
            return true;
        }
    }

    public function marier($epoux){
        if ($epoux instanceof Homme){
            $this->setEpoux($epoux);
            $epoux->setEpoux($this);
        }
    }

    public function afficher(){
        parent::afficher();

        if($this->estCélibataire()){
            echo "et est célibataire";
        }else{
            echo "n'est pas célibataire et est marié à : {$this->epoux->prenom}";
            echo $this->epoux->afficher();
        }
    }
}



?>