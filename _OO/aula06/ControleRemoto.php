<?php
require_once "Controlador.php";
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    public function ControleRemoto(){
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }

    private function getVolume(){
        return $this -> volume;
    }
    private function setVolume($v){
        $this -> volume = $v;
    }
    private function getLigado(){
        return $this -> ligado;
    }
    private function setLigado($l){
        $this -> ligado = $l;
    }
    private function getTocando(){
        return $this -> tocando;
    }
    private function setTocando($t){
        $this -> tocando = $t;
    }

    public function ligar(){
        $this -> setLigado(true);
    }
    public function desligar(){
        $this -> setLigado(false);
    }
    public function abrirMenu(){
        print "<p>***** MENU *****</p>";
        print "Está ligado? " .($this -> getLigado()?"Sim":"Não");
        print "<br/>Está tocando? " .($this -> getTocando()?"Sim":"Não");
        print "<br/>Volume: " .($this -> getVolume());
        for ($i = 0; $i < ($this -> getVolume()); $i += 10) {
            print "|";
        }
        print "<br/>";
    }
    public function fecharMenu(){
        print "<br/>Fechando Menu...";
    }
    public function maisVolume(){
        if ($this -> getLigado()){
            $this -> setVolume($this -> getVolume() + 10);
        } else {
            print "<p>ERRO! Não posso aumentar o volume.</p>";
        }
    }
    public function menosVolume(){
        if ($this -> getLigado()){
            $this -> setVolume($this -> getVolume() - 10);
        }
    }
    public function ligarMudo(){
        if ($this -> getLigado() and ($this -> getVolume() > 0)){
            $this -> setVolume(0);
        } else {
            print "<p>ERRO! Não posso aumentar o volume.</p>";
        }
    }
    public function desligarMudo(){
        if ($this -> getLigado() and ($this -> getVolume() == 0)){
            $this -> setVolume(50);
        }
    }
    public function play(){
        if ($this -> getLigado() and !($this -> getTocando())){
            $this -> setTocando(true);
        }
    }
    public function pause(){
        if ($this -> getLigado() and ($this -> getTocando())){
            $this -> setTocando(false);
        }
    }
}