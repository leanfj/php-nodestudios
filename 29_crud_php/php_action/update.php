<?php
  session_start();
  require_once "./db_connect.php";

  if(isset($_POST["btn-atualizar"])):
    $nome = mysqli_escape_string($connect, $_POST["nome"]);
    $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
    $email = mysqli_escape_string($connect, $_POST["email"]);
    $fonte = mysqli_escape_string($connect, $_POST["fonte"]);
    $id = mysqli_escape_string($connect, $_POST["id"]);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', fonte = '$fonte' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION["msg"] = "Atualizado com sucesso";
      header('Location: ../index.php');
    else:
      $_SESSION["msg"] = "Erro ao Atualizar";
      header('Location: ../index.php');
    endif;
  endif;