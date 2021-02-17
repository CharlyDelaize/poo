<?php

class Count{
    // Initialisation du compteur à 0
    private static $count = 0;

    public function __construct(){
        // L'attribut statique $count s'incrémente à chaque construction d'objet Count
        self::$count++;
    }

    public static function getCount(){ // Méthode statique renvoyant la valeur actuelle du compteur
        return self::$count;
    }
}
// On instancie 2 fois la classe 'Count'
$test = new Count();
$test = new Count();

// Cet appel devrait donc afficher '2'
echo Count::getCount();
?>