<?php

class Chien {
  // Attributs
  private $name;
  private $size;

  public function __construct($name, $size){
      $this->name($name);
      $this->size($size);
  }

  // Getters
  public function getName(){
    return $this->name;
}

  public function getSize(){
    return $this->size;
}

  // Méthodes
  // Setters
  public function rename($newName){
    if(is_string($newName)){
        $this->name = $newName;
    }
  }

  public function grow($newSize){
    if(is_int($newSize)){
        $this->size = $newSize;
    }
  }

  public function display($name, $size){
    echo "{$this->name} mesure {$this->size} cm.";
  }
}

$chien = new Chien();
$chien->display("Pluto", 60);

?>