<?php
 include_once "./includes/header.php"
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
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ana</td>
          <td>Magalhães</td>
          <td>ana.magalhaes@gmail.com</td>
          <td>Elo7</td>
          <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
      </tbody>
    </table>
    <br>
    <a href="#" class="btn">Adcionar Cliente</a>
  </div>
</div>

<?php
 include_once "./includes/footer.php"
?>