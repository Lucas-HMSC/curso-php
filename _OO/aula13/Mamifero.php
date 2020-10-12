<?php
require_once "Animal.php";
class Mamifero extends Animal{
    private $corPelo;

    public function getCorPelo(){
        return $this -> corPelo;
    }
    public function setCorPelo($corPelo){
        $this -> corPelo = $corPelo;
    }

    public function locomover(){
        print "<p>Correndo.</p>";
    }
    public function alimentar(){
        print "<p>Mamando.</p>";
    }
    public function emitirSom(){
        print "<p>Som de Mamífero.</p>";
    }
}