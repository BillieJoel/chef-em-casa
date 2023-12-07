<?php
function isActivePage($currentPage,$pageName){
    if($currentPage ==$pageName){
   return 'active';
    }
return'';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/main.css">
    <title>
        <?=$currentPage =='index'?'chefe em casa - pagina incial':'';?>
        <?=$currentPage =='about'?'chefe em casa - sobre':'';?>
        <?=$currentPage =='contact'?'chefe em casa - contato':'';?>
    </title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   
<div class="container"> 
  <img src="./src/img/_1e513fb6-6a25-4ec1-ae91-fc2a7cbc03a0-removebg-preview.png" alt="erro404" width="100" class="navbar-brand" >
<a class="navbar-brand" href="#">Chefe em casa</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item <?=isActivePage($currentPage,'index')?>">
      
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?=isActivePage($currentPage,'about')?>">
        <a class="nav-link" href="about.php">sobre</a>
      </li>
      <li class="nav-item <?=isActivePage($currentPage,'contact')?>">
        <a class="nav-link" href="contact.php">contato</a>
      </li>
      <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
    


    
    </ul>
  </div>
</div>
<form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-success my-2 my-sm-0 p-1" href="register.php">
          Cadastre-se
        <a class="btn btn-outline-success my-2 my-sm-0 p-1 ml-4" href="login.php">
          Logar
        </a>
      </form>
</nav>
