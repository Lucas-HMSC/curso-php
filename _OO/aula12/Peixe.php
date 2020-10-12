<?php 
require_once "Animal.php";
class Peixe extends Animal {
    private $corEscama;

    public function getCorEscama(){
        return $this -> corEscama;
    }
    public function setCorEscama($corEscama){
        $this -> corEscama = $corEscama;
    }

    public function soltarBolha(){
        print "<p>Soltou uma bolha</p>";
    }

    public function locomover(){
        print "<p>Nadando.</p>";
    }
    public function alimentar(){
        print "<p>Comendo Substâncias.</p>";
    }
    public function emitirSom(){
        print "<p>Peixe não faz som.</p>";
    }
}