<?php
//Adição
echo 20 + 10;
echo "<hr>";

//Subtração
echo 30 - 15;
echo "<hr>";

//Multiplicação
echo 2 * 2;
echo "<hr>";

//Divisão
echo 20 / 2;
echo "<hr>";

//Modulo
echo 2 % 2;
echo "<hr>";

//Exponenciação
echo 2 ** 2;
echo "<hr>";


$numero = 10;

$verificado = $numero % 2;

if ($verificado != 0):
  echo "Numero impar";
else:
  echo "Numero par";
endif;