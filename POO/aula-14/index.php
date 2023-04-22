<?php

class Pessoa {
    public $idade;

    public function __clone() {
        echo "Clonagem de objetos";
    }
}

$pessoa1 = new Pessoa();
$pessoa1->idade = 30;

$pessoa2 = clone $pessoa1; //Não esta mais usando referencia
$pessoa2->idade = 40;

echo $pessoa1->idade;
