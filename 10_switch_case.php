<?php

$nome = "Leandro";

switch ($nome):
  case "Leandro":
    echo "Bem vindo $nome";
    break;

  case "Leonardo":
    echo "Bem vindo $nome";
    break;

  default:
    echo "Nome incorreto";
endswitch;