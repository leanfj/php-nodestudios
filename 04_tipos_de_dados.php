<?php

//----------------Variaves Escalares

//String
$variavelString = "Leandro";
var_dump($variavelString);

//Int
$variavelInt = 123;
var_dump($variavelInt);

//Floa
$variavelFloat = 1.23;
var_dump($variavelFloat);

//Boolean
$variavelBoolean = true;
var_dump($variavelBoolean);


//---------------Variáveis Compostas

//Array
$variavelArray = array("Leandro", 32, 1.65, true);
var_dump($variavelArray);

//Object
class Pessoa {
  public $nome;
  public function atribuiNome ($nome){
    $this->$nome = $nome;
  }
}

$leandro = new Pessoa();
$leandro->atribuiNome("Leandro");
var_dump($leandro);

//---------------Variáveis Especiais


// NULL
$cidade = NULL;

var_dump($cidade);

//Resource - Manipulação com bancos de dados