<?php

  require_once "./db_connect.php";

  if(isset($_POST["btn-cadastrar"])):
    $nome = mysqli_escape_string($connect, $_POST["nome"]);
    $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
    $email = mysqli_escape_string($connect, $_POST["email"]);
    $fonte = mysqli_escape_string($connect, $_POST["fonte"]);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, fonte) VALUES ('$nome', '$sobrenome', '$email', '$fonte')";

    if(mysqli_query($connect, $sql)):
      header('Location: ../index.php?sucesso');
    else:
      header('Location: ../index.php?erro');
    endif;
  endif;