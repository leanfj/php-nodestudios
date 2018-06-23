<?php
//Constantes são Globais de acesso livre
define("NOME", "Leandro Ferreira");
define("IDADE", 32);
echo "Meu nome é ".NOME." e mina idade é ".IDADE;

// Constantes Arrays
define("PESSOAS", ["Leandro", "Antonio", "Lucas", "Dayana"]);

var_dump(PESSOAS);

echo PESSOAS[0];

echo "<hr>";

function mostraNome(){
  echo NOME;
}

mostraNome();