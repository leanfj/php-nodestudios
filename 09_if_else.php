<?php

$nome = "gustavo";

if ($nome == "leandro"):
  echo "Seja bem vindo $nome";
elseif ($nome == "leonardo"):
  echo "Seja bem vindo $nome";
else:
  echo "Nome incorreto";
endif;

echo "<hr>";

//Operador Ternário
// (condicional)? verdadeiro : falso;

$idade = 29;

$resultado = ($idade >= 30 ) ? "Idade maior que 30" : "Idade inferior a 30";

echo $resultado;