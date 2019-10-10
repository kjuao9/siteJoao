<?php 
include_once "conexao.php";
include "includes/funcoes.php";

session_start();
$con = conecta_mysql();

?>

<!DOCTYPE html>
<html lang="pt-Br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="João Paulo S. Costa">

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="imagens/8104logo.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>
.lado{
  background-color: lightgray;
  height: 1000px;
  width: 250px;
  /* position: fixed; */
  z-index: 1;
}
.conteudo{
  /* background-color: lightgreen; */
}
.fakeimg {
    height: 200px;
    width: 200px;
    background: #aaa;
  }
  body {
    background-color: azure;
  }
  .container{
    background-color: white;
  }
  </style>
  <body>

</div>
  <?php
require "includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<!-- alerta abaixo: -->
<!-- <div class="alert alert-success alert-dismissible show fade">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> Indicates a successful or positive action.
</div> -->
<!-- alerta acima -->
<!-- <div class="container border row">
<div class="lado border border-primary container col-sm-4">
  <h3>TITULO</h3>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, suscipit.
  
  <div class="fakeimg">Fake Image</div>
  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil sint molestias hic in quaerat, excepturi enim repudiandae similique, iste commodi sit non incidunt? Excepturi maiores molestiae omnis odit, non dolore repudiandae, dolores nemo explicabo qui aspernatur? Esse amet porro a possimus alias doloremque saepe nostrum, repudiandae fuga distinctio maxime iste.
</div>
<div class="conteudo border border-danger container col-sm-8">
  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam dignissimos iste assumenda veritatis explicabo exercitationem, ut alias ex corrupti tenetur vitae recusandae quo nam necessitatibus id ea enim corporis excepturi accusantium consequatur! Assumenda doloremque consectetur et aperiam ut nulla mollitia! -->
<!-- </div>
</div> -->

<div class="container border" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4 ">
      <h2>BLABLA</h2>
      <h5>blablabla</h5>
      <div class="fakeimg">Fake Image</div>
      <p>lorem ipsum numseioq numseioq in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8 ">
      <h2>BLABLABLA</h2>
      <h5>Blablablablabla, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>blablabla</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos iure recusandae molestiae pariatur eaque? Molestiae voluptatem laborum maxime sed cupiditate, eveniet tempore perferendis repellat explicabo dolore obcaecati enim, illum laudantium quidem non asperiores, ipsam voluptates dolorem voluptas corporis blanditiis expedita.
        Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>BLABLABLA</h2>
      <h5>Blablablablabla, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>blablabla</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
    <div class="jumbotron text-center abaixo" style="margin-bottom:0">
  <!-- <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p> -->
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>