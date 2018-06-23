<?php

$contador = 0;

while ($contador <= 10){

  echo "O contador é $contador <br>";
  $contador++;

}

echo "<hr>";

$contador = 0;

do {
  echo $contador."<br>";
  $contador++;

} while ($contador <= 10);