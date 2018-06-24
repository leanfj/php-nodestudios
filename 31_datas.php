<?php
  date_default_timezone_set('America/Sao_Paulo');
  echo date('d/m/Y H:i:s');


  //armzenar no bd como date
  $date = date('Y-m-d');
  //armazenar no bd como date mais time
  $dateTime = date('Y-m-d H:i:s');

  echo "<hr>";

  //Unix time
  echo time();

  echo "<hr>";
  echo date('d/m/Y', time());

  //MKTIME
  echo "<hr>";
  $data_pagamento = mktime(15 ,30 , 00, 02, 15,2023);

  echo date('d/m/Y - h:i', $data_pagamento);

  echo "<hr>";

  //STRTOTIME
  $data = '2019-04-10 13:30:00';

  $data = strtotime( $data);

  echo date('d/m/Y - h:i', $data);