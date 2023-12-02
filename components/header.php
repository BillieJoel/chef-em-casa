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
<div class="container">  <a class="navbar-brand" href="#">Chefe em casa</a>
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
    </ul>
  </div>
</div>
</nav>
