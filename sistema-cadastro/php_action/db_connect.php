<?php

$serverName = "clientes-dayart.mysql.uhserver.com";
$userName = "dayartdesign";
$password = "d@yartdes!gn1";
$db_name = "clientes_dayart";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
  echo "Erro na conexão: ".mysqli_connect_error();
endif;