<?php
include_once "./php_action/db_connect.php";
include_once "./includes/header.php";

if (isset($_GET["id"])) :
  $id = mysqli_escape_string($connect, $_GET["id"]);

  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
  <div class="col s12 m8 push-m2">
    <h1 class="light">Editar Cliente</h1>
    <form action="php_action/update.php" method="POST">

      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" required>
        <label for="nome">Nome</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>" required>
        <label for="sobrenome">Sobrenome</label>
      </div>
      <div class="input-field col s12">
        <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>" required>
        <label for="email">Email</label>
      </div>
      <div class="input-field col s12">
        <input type="text" name="fonte" id="fonte" value="<?php echo $dados['fonte']; ?>" required>
        <label for="fonte">Fonte</label>
      </div>
      <button class="btn" type="submit" name="btn-atualizar">Atualizar</button>
      <a href="index.php" class="btn orange">Lista de Clientes</a>
    </form>
  </div>
</div>

<?php
include_once "./includes/footer.php"
?>