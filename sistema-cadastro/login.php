<?php 
  include_once "./includes/header.php";
  session_start();
    // Verificação de acesso
  if(isset($_SESSION["logado"])):
    header('Location: index.php');
  endif;
?>

<?php
  if(isset($_SESSION["msg"])):
?>
    <script>
      window.onload = function() {
        M.toast({html: '<?php echo $_SESSION["msg"];?>', classes: 'rounded' });
      }
    </script>
<?php
  endif;
  session_unset();

?>
  <div class="row">
    <div class="col m4 push-m4">
      <h1>Login</h1>
      <form action="./php_action/acesso.php" method="POST">
        <div class="input-field col s12">
          <input type="text"  name="login" id="login" required>
          <label for="login">Login</label>
        </div>
        <div class="input-field col s12">
          <input type="password"  name="senha" id="senha" required>
          <label for="senha">Senha</label>
        </div>
        <button class="btn" type="submit" name="btn-login">Login</button>
      </form>
    </div>
  </div>
<?php 
  include_once './includes/footer.php';
?>