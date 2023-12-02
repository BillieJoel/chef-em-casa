<?php

$currentPage = 'index';
include_once(__DIR__.'/components/header.php');



?>



<main class="container pg-5">
<h1>Cadastre-se</h1>
<div class="jumbotron">
  <h1 class="display-4">olá usuario</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
<form action="register_post.php" method="post">

  <div class="form-group">
    <label for="name">nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">digite seu nome completo.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">digite seu email</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <small id="emailHelp" class="form-text text-muted">crie sua senha<re/small>
  </div>

  <button type="submit" class="btn btn-success">cadastre-se</button>


</form>

</main>
<?php
include_once(__DIR__.'/components/footer.php');



?>