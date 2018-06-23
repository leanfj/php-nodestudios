<?php
    //Conexão Banco de Dados
    require_once 'db_connect.php';

    //Sessão
    session_start();
    //Verificação de acesso
    if(!isset($_SESSION['logado'])):
      header('Location: index.php');
    endif;
    // Dados usuário
    $id = $_SESSION["id_usuario"];
    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($connect);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  Home restrito ao <?php echo ($dados["nome"])?>
  <a href="logout.php">Logout</a>
</body>
</html>