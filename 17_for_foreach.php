<?php


function tabuada ($numero){
  for ($contador = 0; $contador <= 10; $contador++):
    echo "$numero x $contador = ".($contador * $numero)."<br>";
  endfor;
  echo "<hr>";

}

tabuada(9);

//foreach para percorrer arrays
$nomes = array("Leandro", "Dayana", "Antonio", "Lucas");

foreach($nomes as $index => $nome):
  echo "$index do nome $nome <br>";
endforeach;

