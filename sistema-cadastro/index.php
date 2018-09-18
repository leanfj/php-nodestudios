<?php
  include_once "./php_action/db_connect.php";
  include_once "./includes/header.php";
  include_once "./includes/msg_alert.php";
  // Verificação de acesso
  if(!isset($_SESSION['logado'])):
    header('Location: login.php');
  endif;
?>

<div class="row">
  <div class="col s12 m10 push-m1">
    <h1 class="light">Cadastro de Cliente | Day Art Design</h1>
    <table class="highlight centered responsive-table">
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
          if(mysqli_num_rows($resultado) > 0):
            while($dados = mysqli_fetch_array($resultado)):
        ?>
              <tr>
                <td><?php echo $dados["nome"] ?></td>
                <td><?php echo $dados["sobrenome"] ?></td>
                <td><?php echo $dados["email"] ?></td>
                <td><?php echo $dados["fonte"] ?></td>
                <td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id'];?>" class="modal">
                  <div class="modal-content">
                    <h4>Opa !!!!</h4>
                    <h5>Deseja deletar o registro</h5>
                  </div>
                  <div class="modal-footer">
                    
                    <form action="php_action/delete.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                      <button type="submit" name="btn-deletar" class="btn red">Sim, excluir</button>
                    </form>
                  </div>
                </div>
              </tr>
        <?php 
          endwhile;
        else: ?>
        <tr>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>

        <?php
        endif;
        ?>
      </tbody>
    </table>
    <br>
    <a href="adcionar.php" class="btn">Adcionar Cliente</a>
    <a href="./php_action/logout.php" class="btn">Logout</a>

  </div>
</div>

<?php
 include_once "./includes/footer.php"
?>