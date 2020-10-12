<?php
require_once "Animal.php";
class Reptil extends Animal {
    private $corEscama;

    public function getCorEscama(){
        return $this -> corEscama;
    }
    public function setCorEScama($corEscama){
        $this -> corEscama = $corEscama;
    }

    public function locomover(){
        print "<p>Rastejando.</p>";
    }
    public function alimentar(){
        print "<p>Comendo Vegetais.</p>";
    }
    public function emitirSom(){
        print "<p>Som de Réptil.</p>";
    }
}