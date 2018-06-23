<?php
//Escopo global
$nome = "leandro";

function mostraNome() {
  //Escopo local
  global $nome;
  echo $nome;
}

mostraNome();

echo "<hr>";

function mostraCidade() {
  //Escopo local
  global $cidade; 
  $cidade = "Rio de Janeiro";

}

mostraCidade();
echo $cidade;


echo "<hr>";

$a = 1;
$b = 2;
$c = 3;

function soma(){
  echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();