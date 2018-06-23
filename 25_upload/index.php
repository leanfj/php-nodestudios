<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload de MULTI Arquivos</title>
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
      $quantArquivos = count($_FILES["arquivo"]["name"]);
      $contador = 0;

      while ($contador < $quantArquivos):
        $extensao = pathinfo($_FILES["arquivo"]["name"][$contador], PATHINFO_EXTENSION);
        if (in_array($extensao, $formatosPermitidos)):
          $pasta = "arquivos/";
          $temporario = $_FILES["arquivo"]["tmp_name"][$contador];
          $novoNome = uniqid().".$extensao";
          if(move_uploaded_file($temporario, $pasta.$novoNome)):
            echo "Upload com sucesso para $pasta$novoNome <br>";
          else:
            echo "Falha no upload do arquivo $temporario <br>";
          endif;
        else:
          echo "$extensao não é permitida <br>";
        endif;
        $contador++;
      endwhile;
    endif;
  ?>


  <form action="index.php" method="POST" enctype="multipart/form-data">
    <div class="form_group">
    	<input type="file" id="arquivo" name="arquivo[]" multiple>
    </div>
    
    <input type="submit" name="enviar-arquivo"></button>
  </form>
</body>
</html>