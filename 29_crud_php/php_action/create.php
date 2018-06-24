<?php
  session_start();
  require_once "./db_connect.php";

  if(isset($_POST["btn-cadastrar"])):
    $nome = mysqli_escape_string($connect, $_POST["nome"]);
    $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
    $email = mysqli_escape_string($connect, $_POST["email"]);
    $fonte = mysqli_escape_string($connect, $_POST["fonte"]);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, fonte) VALUES ('$nome', '$sobrenome', '$email', '$fonte')";

    if(mysqli_query($connect, $sql)):
      $_SESSION["msg"] = "Cadastrado com sucesso";
      header('Location: ../index.php');
    else:
      $_SESSION["msg"] = "Erro ao cadastrar";
      header('Location: ../index.php');
    endif;
  endif;