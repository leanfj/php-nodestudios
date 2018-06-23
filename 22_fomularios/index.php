<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulário PHP</title>
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
    if(isset($_POST["enviar-form"])):
      //aray de erros
      $erros = array();

      //validações de erro
      if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade em formato errado";
      endif;
      if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "Email em formato errado";
      endif;
      if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Peso em formato errado";
      endif;
      if(!$IP = filter_input(INPUT_POST, 'IP', FILTER_VALIDATE_IP)):
        $erros[] = "IP em formato errado";
      endif;
      if(!$URL = filter_input(INPUT_POST, 'URL', FILTER_VALIDATE_URL)):
        $erros[] = "URL em formato errado";
      endif;

      //msg de erro
      if(!empty($erros)):
        foreach($erros as $erro):
          echo "<p>$erro</p>";
        endforeach;
      else:
        echo "Form enviado";
      endif;

    endif;
  ?>


  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div class="form_group">
    	<label for="nome">Nome</label>
    	<input type="text" id="nome" name="nome">
    </div>
    <div class="form_group">
    	<label for="idade">Idade</label>
    	<input type="text" id="idade" name="idade">
    </div>
    <div class="form_group">
    	<label for="email">Email</label>
    	<input type="email" id="email" name="email">
    </div>
    <div class="form_group">
    	<label for="peso">Peso</label>
    	<input type="text" id="peso" name="peso">
    </div>
    <div class="form_group">
    	<label for="IP">IP</label>
    	<input type="text" id="IP" name="IP">
    </div>
    <div class="form_group">
      <label for="URL">URL</label>
      <input type="text" id="URL" name="URL">
    </div>
    <button type="submit" name="enviar-form">Enviar</button>
  </form>
</body>
</html>