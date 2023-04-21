<?php
session_start();
require_once "./db_connect.php";
require_once "../includes/functions.php";

if (isset($_POST["btn-atualizar"])) :
  $nome = clear($_POST["nome"]);
  $sobrenome = clear($_POST["sobrenome"]);
  $email = clear($_POST["email"]);
  $fonte = clear($_POST["fonte"]);
  $id = clear($_POST["id"]);

  $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', fonte = '$fonte' WHERE id = '$id'";

  if (mysqli_query($connect, $sql)) :
    $_SESSION["msg"] = "Atualizado com sucesso";
    header('Location: ../index.php');
  else :
    $_SESSION["msg"] = "Erro ao Atualizar";
    header('Location: ../index.php');
  endif;
endif;
