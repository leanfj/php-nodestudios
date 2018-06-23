<?php

//Conexão com banco de dados

$serverName = "localhost";
$userName = "root";
$senha = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($serverName, $userName, $senha, $db_name);

if (mysqli_connect_error()):
  echo "Falha na conexão: ".mysqli_connect_error();
endif; 