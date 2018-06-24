<?php
  session_start();
  require_once "./db_connect.php";

  if(isset($_POST["btn-deletar"])):
    $id = mysqli_escape_string($connect, $_POST["id"]);
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
      $_SESSION["msg"] = "Excluido com sucesso";
      header('Location: ../index.php');
    else:
      $_SESSION["msg"] = "Erro ao excluir";
      header('Location: ../index.php');
    endif;
  endif;