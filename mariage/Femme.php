<?php

final class Femme extends Personne{
    private $epoux;

    function chargerClasse($classe) {
        require "Homme.php";
    }

    public function estCelibataire(){
        
    }

}

?>