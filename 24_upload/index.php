<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload de Arquivos</title>
  <style>
    .form_group {
      display: flex;
      padding: 10px;
      align-items: center;
      max-width: 220px;
    }
    label {
      margin-right: auto;
      align-self: center;
    }
  </style>
</head>
<body>
  <?php

    if(isset($_POST["enviar-arquivo"])):
      $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
      $extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);
      if (in_array($extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES["arquivo"]["tmp_name"];
        $novoNome = uniqid().".$extensao";
        if(move_uploaded_file($temporario, $pasta.$novoNome)):
          $mensagem = "Upload com sucesso";
        else:
          $mensagem = "Falha no upload";
        endif;
      else:
        $mensagem = "Formato Invalido";
      endif;
      echo $mensagem;
    endif;
  ?>


  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
    <div class="form_group">
    	<input type="file" id="arquivo" name="arquivo">
    </div>
    
    <input type="submit" name="enviar-arquivo">Enviar Arquivo</button>
  </form>
</body>
</html>