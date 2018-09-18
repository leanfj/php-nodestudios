<?php
//Sessão
session_start();

// Botão login
if(isset($_POST["btn-login"])):
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  if(($login == "dayana" ) && ($senha == 1324)):
    $_SESSION["logado"] = true;
    header("Location: ../index.php");
  else:
    $_SESSION["msg"] = "Login ou senha invalidos";
    header("Location: ../login.php");
  endif;
endif;
?>