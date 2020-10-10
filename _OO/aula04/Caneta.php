<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    // Método Construtor (pode ser declarado usando '__construct' ou o nome da Classe)
    public function Caneta($m, $c, $p) {
        $this -> modelo = $m;
        $this -> cor = $c;
        $this -> ponta = $p;
        $this -> setTampar(true);
    }

    public function getModelo(){
        return $this -> modelo;
    }
    public function setModelo($m){
        $this -> modelo = $m;
    }
    public function getCor(){
        return $this -> cor;
    }
    public function setCor($c){
        $this -> cor = $c;
    }
    public function getPonta(){
        return $this -> ponta;
    }
    public function setPonta($p){
        $this -> ponta = $p;
    }
    public function getTampar(){
        return $this -> tampada;
    }
    public function setTampar($t){
        $this -> tampada = $t;
    }
}