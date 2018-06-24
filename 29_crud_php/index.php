<?php
  include_once "./php_action/db_connect.php";
  include_once "./includes/header.php";
  include_once "./includes/msg_alert.php";
?>

<div class="row">
  <div class="col s12 m8 push-m2">
    <h1 class="light">Crud | PHP</h1>
    <table class="highlight centered">
      <thead>
        <tr class="">
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Email</th>
          <th>Fonte</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          //consulta banco de dados
          $sql = "SELECT * FROM clientes";
          $resultado = mysqli_query($connect, $sql);
          // var_dump(mysqli_fetch_array($resultado));
          while($dados = mysqli_fetch_array($resultado)):
        ?>
          <tr>
            <td><?php echo $dados["nome"] ?></td>
            <td><?php echo $dados["sobrenome"] ?></td>
            <td><?php echo $dados["email"] ?></td>
            <td><?php echo $dados["fonte"] ?></td>
            <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <br>
    <a href="adcionar.php" class="btn">Adcionar Cliente</a>
  </div>
</div>

<?php
 include_once "./includes/footer.php"
?>