<?php
 
 class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    // Construtor
    public function ContaBanco(){
        $this -> setSaldo(0);
        $this -> setStatus(false);
        print "<p>Conta criada com sucesso!</p>";
    }
    // Métodos Especiais
    public function getNumConta(){
        return $this -> numConta;
    }
    public function setNumConta($n){
        $this -> numConta = $n;
    }
    public function getTipo(){
        return $this -> tipo;
    }
    public function setTipo($t){
        $this -> tipo = $t;
    }
    public function getDono(){
        return $this -> dono;
    }
    public function setDono($d){
        $this -> dono = $d;
    }
    public function getSaldo(){
        return $this -> saldo;
    }
    public function setSaldo($s){
        $this -> saldo = $s;
    }
    public function getStatus(){
        return $this -> status;
    }
    public function setStatus($s){
        $this -> status = $s;
    }
    // Métodos Principais
    public function abrirConta($t){
        $this -> setTipo($t);
        $this -> setStatus(true);
        if ($t == "CC") {
            $this -> setSaldo(50);
        } elseif ($t == "CP") {
            $this -> setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this -> getSaldo() > 0){
            print "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        } elseif ($this -> getSaldo() < 0){
            print "<p>Conta está em débito. Impossível encerrar!</p>";
        } else {
            $this -> setStatus(false);
            print "<p>Conta de {$this -> getDono()} fechada com sucesso.</p>";
        }
    }
    public function depositar($v){
        if ($this -> getStatus()){
            $this -> setSaldo(($this -> getSaldo()) + $v);
            print "<p>Depósito de R$ $v na conta de {$this -> getDono()}.</p>";
        } else {
            print "<p>Conta fechada. Não consigo depositar!</p>";
        }
    }
    public function sacar($v){
        if ($this -> getStatus()){
            if ($this -> getSaldo() >= $v){
                $this -> setSaldo(($this -> getSaldo()) - $v);
                print "<p>Saque de R$ $v autorizado na conta de {$this -> getDono()}.</p>";
            } else {
                print "<p>Saldo Insuficiente para Saque.</p>";
            }
        } else {
            print "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    public function pagarMensal(){
        if ($this -> getTipo() == "CC") {
            $v = 12;
        } elseif ($this -> getTipo() == "CP") {
            $v = 20;
        } 
        if ($this -> getStatus()) {
            if ($this -> getSaldo() > $v) {
                $this -> setSaldo(($this -> getSaldo()) - $v);
                print "<p>Mensalidade de R$ $v debitada na conta de {$this -> getDono()}</p>";
            } else {
                print "<p>Saldo Insuficiente.</p>";
            }
        } else {
            print "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
    }
 }