<?php

function chargerClasse($classe){
require "{$classe}.php";
}

spl_autoload_register('chargerClasse');

$femme = new Femme("Roberts", "Julia", 54);
$femme->afficher();
echo "<br>";

$homme = new Homme("Pitt", "Brad", 57);
$homme->afficher();
echo "<br>";

$femme->marier($homme);
$femme->afficher();
echo "<br>";
$homme->afficher();