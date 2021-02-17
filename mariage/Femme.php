<?php


class Femme{
    private $epoux;

    function chargerClasse($classe) {
        require "Homme.php";
    }

    public function estCelibataire($epoux){
        if($epoux !== null){
            echo $epoux;
        }else{
            echo "Célibataire";
        }
    }

    public function setEpoux($epoux){
        $this->epoux = $epoux;
    }

    public function marier($epouse){
        echo "Je vous déclare mari et femme";
    }

    public function afficher(){
        echo "information";
    }

}
$test = new Femme($epoux = "Harry");
echo $epoux;

?>