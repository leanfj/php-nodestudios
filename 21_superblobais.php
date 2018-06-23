<?php

  $valor1 = 10;
  $valor2 = 20;

  function soma () {
    echo $GLOBALS["valor1"] + $GLOBALS["valor2"];
  }

  soma ();

 var_dump($_SERVER);