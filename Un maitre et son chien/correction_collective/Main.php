<?php

function chargerClasse($classe){
    require "{$classe}.php";
}

spl_autoload_register("chargerClasse");

$chien = new Chien("Bouli", 60);
$chien->display();
echo "<br>";

$chien->rename("Didier");
$chien->grow(30);
$chien->display();
echo "<br>";

$bacri = new Maitre("Jean-Pierre", "Bacri", 69);
$bacri->display();
echo "<br>";
$bacri->adopt($chien);
$bacri->display();


?>