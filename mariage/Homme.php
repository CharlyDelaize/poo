<?php


class Homme{
    private $epouse;

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

    public function setEpouse($epouse){
        $this->epouse = $epouse;
    }

    public function marier($epouse){
        echo "Je vous déclare mari et femme";
    }

    public function afficher(){
        echo "information";
    }

}
$test = new Homme($epouse = "Meghan");
echo $epouse;

?>