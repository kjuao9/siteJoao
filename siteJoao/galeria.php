<!DOCTYPE html>
<?php 
include_once "conexao.php";
include "includes/funcoes.php";


$con = conecta_mysql();

?>
<html lang="pt-Br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="João Paulo S. Costa">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   
    <title>Galeria</title>
  </head>
  <body style="height: 1500px">


  <?php
require "includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container">
<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Destaques</h1>

<hr class="mt-2 mb-5">

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/Koala.jpg" class="d-block w-100" alt="coala" style="width:128px height:128px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Coala</h5>
          <p>Tá olhando o quê camarada? Perdeu a sua bunda por aqui?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/Penguins.jpg" class="d-block w-100" alt="pinguins" style="width:128px height:128px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Pinguins</h5>
          <p>E aí meu chapa, bora tomar uma?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/Desert.jpg" class="d-block w-100" alt="deserto" style="width:128px height:128px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Deserto</h5>
          <p>Simplesmente um deserto. Sim. Apenas um deserto. Nada mais que um simples deserto.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!-- Page Content -->
  <div class="container">

<h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Mais fotos</h1>

<hr class="mt-2 mb-5">

<div class="row text-center text-lg-left">

  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 round">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
        </a>
  </div>
  <div class="col-lg-3 col-md-4 col-6">
    <a href="#" class="d-block mb-4 h-100 ">
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
        </a>
  </div>
</div>
</div>
<!-- /.container -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>