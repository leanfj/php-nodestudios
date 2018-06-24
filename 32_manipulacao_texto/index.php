<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manipulação de texto</title>
</head>
<body>
  <?php
    $arquivo = 'arquivo.txt';
    $conteudo = "Conteudo de texto \r\n";
    $tamanhoArquivo = filesize($arquivo);
    $arquivoAberto = fopen($arquivo, 'r');
    // a - acesso e escrita
    // r - acesso e leitura
    //fwrite($arquivoAberto, $conteudo);
    //fclose($arquivoAberto);

    while(!feof($arquivoAberto)):
      $linha = fgets($arquivoAberto, $tamanhoArquivo);
      echo $linha."<br>";
    endwhile;

    fclose($arquivoAberto);
  ?>
</body>
</html>