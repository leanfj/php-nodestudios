<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar() {
        echo $this->nome . " Falou e tem a idade " . $this->idade;
    }
}

$leandro = new Pessoa();
$leandro->nome = "Leandro Ferreira";
$leandro->idade = 37;

$leandro->Falar();

var_dump($leandro);

echo $leandro->nome;