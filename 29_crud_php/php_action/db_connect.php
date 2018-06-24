<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "php_crud";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
  echo "Erro na conexão: ".mysqli_connect_error();
endif;