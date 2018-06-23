<?php

$idade = 32;
$nome = "Leandro";

if (!($idade == 25) && ($nome == "Leandro")):
  echo "Informação correta";
else:
  echo "Informação incorreta";
endif;

echo "<hr>";

if (($idade == 25) || ($nome == "Carlos")):
  echo "Informação correta";
else:
  echo "Informação incorreta";
endif;

echo "<hr>";

//Ou exclusivo
if (($idade == 25) xor ($nome == "Leandro")):
  echo "Informação correta";
else:
  echo "Informação incorreta";
endif;

echo "<hr>";

