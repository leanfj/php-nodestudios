<?php

class Pessoa
{
    const nome = "Leandro";

    public function exibirNome()
    {
        echo self::nome;
    }

}

class OutraPessoa extends  Pessoa {
    const nome = "Ferreira"; //Se não for declrado utilizara o constante declarado na super-classe

    public function exibirNome()
    {
        echo self::nome; // Referência ao const da class
    }

    public function exibirNomeSuperClass()
    {
        echo parent::nome; // Referência ao const da super-classe
    }

}

$leandro = new Pessoa();

$leandro->exibirNome();

echo "<hr>";

$ferreira = new OutraPessoa();

$ferreira->exibirNome();

echo "<hr>";
$ferreira->exibirNomeSuperClass();