<?php
require_once "Mamifero.php";
class Cachorro extends Mamifero {
    public function enterrarOsso(){

    }
    public function abanarRabo(){

    }

    public function emitirSom(){
        print "<p>Au!Au!Au!</p>";
    }

    public function reagirFrase($frase){
        if ($frase == "Toma comida" or $frase == "Olá"){
            print "<p>Abanar e Latir</p>";
        } else {
            print "Rosnar";
        }
    }
    public function reagirHora($hora){
        if ($hora < 12){
            print "<p>Abanar</p>";
        } elseif ($hora >= 18){
            print "<p>Ignorar</p>";
        } else {
            print "<p>Abanar e Latir</p>";
        }
    }
    public function reagirDono($dono){
        if ($dono){
            print "<p>Abanar</p>";
        } else {
            print "<p>Rosnar e Latir</p>";
        }
    }
    public function reagirIdadePeso($idade, $peso){
        if ($idade < 5){
            if ($peso < 10){
                print "<p>Abanar</p>";
            } else {
                print "<p>Latir</p>";
            }
        } else {
            if ($peso < 10){
                print "<p>Rosnar</p>";
            } else {
                print "<p>Ignorar</p>";
            }
        }
    }
}