  <?php
    //Conexão Banco de Dados
    require_once 'db_connect.php';
    //Sessão
    session_start();
    //Verificação de acesso
    if(isset($_SESSION['logado'])):
      header('Location: home.php');
    endif;
    
    // Botão enviar
    if(isset($_POST["btn-entrar"])):
      $erros = array();
      $login = mysqli_escape_string($connect, $_POST["login"]);
      $senha = mysqli_escape_string($connect, $_POST["senha"]);

      if(empty($login) || empty($senha)):
        $erros[] = "<p class=\"msg-alert\">Login ou Senha estão vazios</p>";
      else:
        $sql = "SELECT login FROM usuario WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);
        if(mysqli_num_rows($resultado) > 0):
          $senha = md5($senha);
          $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
          $resultado = mysqli_query($connect, $sql);
          if(mysqli_num_rows($resultado) == 1):
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
            $_SESSION["logado"] = true;
            $_SESSION["id_usuario"] = $dados["id"];
            header("Location: home.php");
          else:
            $erros[] = "<p class=\"msg-alert\">Usuário e senha não conferem</p>";
          endif;

        else:
          $erros[] = "<p class=\"msg-alert\">Usuário inexistente</p>";
        endif;
      endif;
    endif;

    
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessões e Login</title>
  <style>
    body{
      font-family: sans-serif;
    }
    .msg-alert{
      background-color: #c71c1c7a;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      padding: 5px;

    }
  
  </style>
</head>
<body>

  <h1>Login</h1>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    Login: <input type="text" name="login">
    Senha: <input type="password" name="senha">
    <button type="submit" name="btn-entrar">Enviar</button>
    <?php 
      if(!empty($erros)):
        foreach($erros as $erro):
          echo $erro;
        endforeach;
      endif;
    ?>
  </form>
</body>
</html>