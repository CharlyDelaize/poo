<?php


class Femme{
    private $prenom;
    private $nom;
    private $age;
    private $epoux;

    function chargerClasse($classe) {
        require "Homme.php";
    }

    public function __construct($epoux){
        $this->setEpoux($epoux);
    }

    public function setEpoux($epoux){
        $this->epoux = $epoux;
    }

    public function estCelibataire(){
        if(empty($epoux)){
            $prenom = "Meghan";
            $nom = "Markle";
            $age = 39;
            echo "{$prenom} {$nom} a {$age} ans et est marié à {$this->epoux} <br>";
        }else{
            echo "Célibataire";
        }
    }

    public function marier(){
        $prenom = "Meghan";
            $nom = "Markle";
            $age = 39;
        echo "{$prenom} {$nom} Je vous déclare mari et femme";
    }

    public function afficher($epoux){
        echo $epoux;
    }

}

?>