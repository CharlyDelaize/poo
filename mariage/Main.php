<?php

function chargerClasse($classe) {
    require $classe . ".php";
}

spl_autoload_register('chargerClasse');

$homme = new Homme("Meghan");
$homme->estCelibataire();
$homme->marier();

$femme = new Femme("Harry");
$femme->estCelibataire();
$femme->marier();



?>