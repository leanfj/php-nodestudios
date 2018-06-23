<?php

if (10 == 10):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if (10 != 10):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if(10 === "10"):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if(10 !== "10"):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";


//Comprador diferente
if (10 <> 10):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if (10 > 9):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if (10 < 10):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if (10 >= 10):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

if (10 <= 10):
  echo "Positivo";
else:
  echo "Negativo";
endif;

echo "<hr>";

var_dump(10 <=> 10);
var_dump(1 <=> 10);
var_dump(10 <=> 1);

