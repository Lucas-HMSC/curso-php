<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function Livro($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function getTitulo(){
        return $this -> titulo;
    }
    public function setTitulo($titulo){
        $this -> titulo = $titulo;
    }
    public function getAutor(){
        return $this -> autor;
    }
    public function setAutor($autor){
        $this -> autor = $autor;
    }
    public function getTotPaginas(){
        return $this -> totPaginas;
    }
    public function setTotPaginas($totPaginas){
        $this -> totPaginas = $totPaginas;
    }
    public function getPagAtual(){
        return $this -> pagAtual;
    }
    public function setPagAtual($pagAtual){
        $this -> pagAtual = $pagAtual;
    }
    public function getAberto(){
        return $this -> aberto;
    }
    public function setAberto($aberto){
        $this -> aberto = $aberto;
    }
    public function getLeitor(){
        return $this -> leitor;
    }
    public function setLeitor($leitor){
        $this -> leitor = $leitor;
    }

    public function detalhes(){
        print "<hr/>Livro {$this->getTitulo()} escrito por {$this->getAutor()}";
        print "<br/> Páginas: {$this->getTotPaginas()}, página atual: {$this->getPagAtual()}";
        print "<br/> Sendo lido por {$this->getLeitor()->getNome()}";
    }

    public function abrir(){
        $this -> aberto = true;
    }
    public function fechar(){
        $this -> aberto = false;
    }
    public function folhear($p){
        if ($p > $this -> getTotPaginas()){
            $this -> setPagAtual(0);
        } else {
            $this -> setPagAtual($p);
        }
    }
    public function avancarPag(){
        $this -> pagAtual++;
    }
    public function voltarPag(){
        $this -> pagAtual--;
    }
}