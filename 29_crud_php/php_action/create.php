<?php
  session_start();
  
  require_once "./db_connect.php";
  require_once "../includes/functions.php";

  if(isset($_POST["btn-cadastrar"])):
    $nome = clear( $_POST["nome"]);
    $sobrenome = clear( $_POST["sobrenome"]);
    $email = clear( $_POST["email"]);
    $fonte = clear( $_POST["fonte"]);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, fonte) VALUES ('$nome', '$sobrenome', '$email', '$fonte')";

    if(mysqli_query($connect, $sql)):
      $_SESSION["msg"] = "Cadastrado com sucesso";
      header('Location: ../index.php');
    else:
      $_SESSION["msg"] = "Erro ao cadastrar";
      header('Location: ../index.php');
    endif;
  endif;