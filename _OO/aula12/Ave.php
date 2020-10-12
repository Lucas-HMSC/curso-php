<?php
require_once "Animal.php";
class Ave extends Animal{
    private $corPena;
    
    public function getCorPena(){
        return $this -> corPena;
    }
    public function setCorPena($corPena){
        $this -> corPena = $corPena;
    }

    public function fazerNinho(){
        print "<p>Construindo um ninho.</p>";
    }

    public function locomover(){
        print "<p>Voando.</p>";
    }
    public function alimentar(){
        print "<p>Comendo Frutas.</p>";
    }
    public function emitirSom(){
        print "<p>Som de Ave.</p>";
    }
}