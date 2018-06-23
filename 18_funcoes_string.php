<?php
  $nome = "leandro FERreira";

  echo strtoupper($nome);
  echo "<hr>";
  echo strtolower($nome);

  echo "<hr>";
  $msg = "Olá Leandro Ferreira";
  $msgRemove = substr($msg, 5, 7);
  echo $msgRemove;

  echo "<hr>";
  $novaMsg = str_pad($msgRemove, 10, "*", STR_PAD_BOTH);
  echo $novaMsg;
  

  echo "<hr>";
  echo str_repeat($msgRemove, 10);

  echo "<hr>";

  echo strlen($msgRemove);

  echo "<hr>";
  
  $novoTexto = str_replace($msgRemove, "Carlos", $msg);
  echo $novoTexto;
  echo "<hr>";
  
  echo strpos($msg, $msgRemove);