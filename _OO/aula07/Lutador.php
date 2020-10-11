<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function Lutador($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this -> nome = $no;
        $this -> nacionalidade = $na;
        $this -> idade = $id;
        $this -> altura = $al;
        $this -> setPeso($pe);
        $this -> vitorias = $vi;
        $this -> derrotas = $de;
        $this -> empates = $em;
    }

    public function getNome(){
        return $this -> nome;
    }
    public function setNome($nome){
        $this -> nome = $nome;
    }
    public function getNacionalidade(){
        return $this -> nacionalidade;
    }
    public function setNacionalidade($nacionalidade){
        $this -> nacionalidade = $nacionalidade;
    }
    public function getIdade(){
        return $this -> idade;
    }
    public function setIdade($idade){
        $this -> idade = $idade;
    }
    public function getAltura(){
        return $this -> altura;
    }
    public function setAltura($altura){
        $this -> altura = $altura;
    }
    public function getPeso(){
        return $this -> peso;
    }
    public function setPeso($peso){
        $this -> peso = $peso;
        $this -> setCategoria();
    }
    public function getCategoria(){
        return $this -> categoria;
    }
    private function setCategoria(){
        if (($this -> getPeso()) < 52.2){
            $this -> categoria = "Inválido";
        } elseif (($this -> getPeso()) <= 70.3){
            $this -> categoria = "Leve";
        } elseif (($this -> getPeso()) <= 83.9){
            $this -> categoria = "Médio";
        } elseif (($this -> getPeso()) <= 120.2){
            $this -> categoria = "Pesado";
        } else {
            $this -> categoria = "Inválido";
        }
    }
    public function getVitorias(){
        return $this -> vitorias;
    }
    public function setVitorias($vitorias){
        $this -> vitorias = $vitorias;
    }
    public function getDerrotas(){
        return $this -> derrotas;
    }
    public function setDerrotas($derrotas){
        $this -> derrotas = $derrotas;
    }
    public function getEmpates(){
        return $this -> empates;
    }
    public function setEmpates($empates){
        $this -> empates = $empates;
    }

    public function apresentar(){
        print "<p>**********************";
        print "<br/>CHEGOU A HORA! O Lutador {$this -> getNome()} ";
        print "veio diretamente de {$this -> getNacionalidade()},";
        print " tem {$this -> getIdade()} anos, pesa {$this -> getPeso()} Kg e ";
        print "tem {$this -> getAltura()}m de altura. ";
        print "<br/>Ele tem {$this -> getVitorias()} vitórias, ";
        print "{$this -> getDerrotas()} derrotas e ";
        print "{$this -> getEmpates()} empates.</p>";
    }
    public function status(){
        print "<p>**********************";
        print "<br/>{$this -> getNome()}";
        print " é um Peso {$this -> getCategoria()}";
        print " e já ganhou {$this -> getVitorias()} vezes,";
        print " perdeu {$this -> getDErrotas()} vezes e";
        print " empatou {$this -> getEmpates()} vezes!</p>";
    }
    public function ganharLuta(){
        $this -> setVitorias(($this -> getVitorias()) + 1);
    }
    public function perderLuta(){
        $this -> setDerrotas(($this -> getDerrotas()) + 1);
    }
    public function empatarLuta(){
        $this -> setEmpates(($this -> getEmpates()) + 1);
    }
}