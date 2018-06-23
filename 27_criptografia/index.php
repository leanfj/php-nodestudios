<?php
  $senha = "leanfj";
  $senha_db = '$2y$10$vbvPem/WVUqRxtKFDI5vguJiq40rABTdFMVnHfWZ4xj8i1wElFgre';

  // $options = [
  //   'cost' => 10,
  // ];

  // $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

  // echo $senhaSegura;

  if(password_verify($senha, $senha_db)):
    echo "Senha ok";
  else:
    echo "Senha Errada";
  endif;

