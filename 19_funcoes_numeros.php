<?php

  $db = 1234.56;
  //number_format(valor, casas decimais, separado decimal, separador milhar)
  $preco = number_format($db, 2, ",", ".");

  echo "O preço é R$ $preco";

  echo "<hr>";

  echo round(3.4);
  echo "<hr>";
  echo round(3.5);
  echo "<hr>";
  echo ceil(3.4);
  echo "<hr>";
  echo floor(3.4);
  echo "<hr>";
  echo rand (1, 1000);
  echo "<hr>";

