<?php
require_once "Aluno.php";
class Bolsista extends Aluno {
    private $bolsa;

    public function getBolsa(){
        return $this -> bolsa;
    }
    public function setBolsa($bolsa){
        $this -> bolsa = $bolsa;
    }

    public function renovarBolsa(){
        print "<p>Bolsa renovada.</p>";
    }
    public function pagarMensalidade(){
        print "<p><strong>{$this->getNome()}</strong> é bolsista! Então tem desconto na mensalidade.</p>";
    }
}