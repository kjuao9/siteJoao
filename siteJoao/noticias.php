<?php
session_start();
include_once "conexao.php";
include "includes/funcoes.php";


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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>

.borda{
  border: 1px;
  border-style: solid;
  
}
.bordap{
  border: 1px;
  padding: 5px;

  border-style: solid;
  border-color: red;
  text-align: justify;
}
.imagem{
height: 230px;
width: 230px;
float: right;
padding: 10px;

}
.clear{
  clear: both;

}
.clearfix{
  overflow: auto;
}
.justifica{
  text-align: justify;

}


  </style>
  <body style="height: 1500px">


  <?php
require "includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>

<div class="container borda clearfix">
<p>
<h2 style="text-align: center">Titulo</h2>
<h2 style="text-align: center"><small>Subtítulo</small></h2>
</p>
<img src="imagens/Koala.jpg" class="imagem clear">
<div class="justifica"><p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, illo quis odio facilis nesciunt laudantium possimus, enim odit ea fugit minima unde ex officiis. Nobis laboriosam alias molestias quisquam beatae?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at officia, et impedit nostrum rem quos natus consectetur molestias obcaecati iure ipsum incidunt nesciunt, sit tempore adipisci corrupti esse possimus.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, modi eaque? Dolorum corrupti nam magnam vitae harum exercitationem iure ipsam voluptatibus, quibusdam sapiente voluptatem tempore dolores ut veniam fugit iusto.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eaque at alias incidunt dolorum minima provident omnis odit, fugiat laudantium ipsum tempora maxime veniam vero quo excepturi nemo sed inventore.
</p><i>postado por: <b>tanana nanana</b> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;data da postagem: 01/10/2019 ás 20:00</i>

</div>
</div>
<br/>
<br/>

<h2><a href="#"><i class="fas fa-thumbs-down"></i></a></h2>


<div class="container borda clearfix">
<p>
<h2 style="text-align: center">Titulo</h2>
<h2 style="text-align: center"><small>Subtítulo</small></h2>
</p>
<img src="imagens/skifree.png" class="imagem clear">
<div class="justifica"><p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, illo quis odio facilis nesciunt laudantium possimus, enim odit ea fugit minima unde ex officiis. Nobis laboriosam alias molestias quisquam beatae?
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores at officia, et impedit nostrum rem quos natus consectetur molestias obcaecati iure ipsum incidunt nesciunt, sit tempore adipisci corrupti esse possimus.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, modi eaque? Dolorum corrupti nam magnam vitae harum exercitationem iure ipsam voluptatibus, quibusdam sapiente voluptatem tempore dolores ut veniam fugit iusto.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eaque at alias incidunt dolorum minima provident omnis odit, fugiat laudantium ipsum tempora maxime veniam vero quo excepturi nemo sed inventore.
</p></div>
</div>
<br/>
<br/>

<div class="container borda clearfix">
<p>
<h2 style="text-align: center">Bêbado briga com uma árvore: árvore vence</h2>
<h2 style="text-align: center"><small>O caso aconteceu na quinta-feira no bairro Saudade</small></h2>
</p>
<!-- <img src="imagens/Koala.jpg" class="imagem clear"> -->
<div class="justifica"><p>
Janaúba: Um homem bêbado provocou uma ação inusitada na tarde da quinta-feira: ele tentou brigar com uma árvore na avenida da Saudade logo após encher a cara. Isso mesmo, brigar com uma árvore. O caso obviamente chamou a atenção dos populares
que passavam pelo local, eles acharam que o homem estava louco. O sujeito, identificado como Gleydsvadson Clodoaldo das Cruzes de fato possuía um nível de demência, mas de acordo com os familiares e amigos ele não era tão louco de fazer um ato desses. 
Mas fez. As pessoas achando engraçada a ação, gravaram vídeos que logo se espalharam pelas redes sociais, no Facebook o vídeo já conta com mais de 250.00 acessos em menos de 48 horas. 
</p><i>Postado por: <b>João Paulo S. Costa</b> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;data da postagem: 01/10/2019 ás 20:09</i></div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>