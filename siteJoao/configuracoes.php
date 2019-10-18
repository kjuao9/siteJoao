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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>
.clear{
  clear: both;
}
body {
    background-color: azure;
  }
  </style>
  <body>
<br/>
<br/>
<br/>
<?php
  require "includes/menu.php";
if(isset($_SESSION["id_usuario"]))
{
  print "<p class='container'>Bem vindo ".$_SESSION["nome"]."!</p>";
}
else{
  print "<script>
      alert('Você deve estar logado!');
      window.location.href = 'index.php';
             </script>";
         
   
}
  ?>
<br/>
<br/>
<br/>
<br/>
<br/>


<div class="container">
		<div class="borda-arredondada">
			Nome: <span class="negrito-maior"><?php print$_SESSION["nome"]?></span> <br/>
			E-mail: <span class="italico"><?php print$_SESSION["email"]?></span> <br/>
			Código: <span class="italico"><?php print$_SESSION["id_usuario"]?></span><br/>
		</div>
		<div class="clear">
    <ul>
		<li><a href="config/alterar_usuario_email.php">Alterar E-mail do Usuário</a><br/><br/></li>
    <li><a href="alterar_usuario_nome.php">Alterar Nome do Usuário</a><br/><br/></li>
    <li><a href="alterar_usuario_senha.php">Alterar Senha do Usuário</a><br/><br/></li>
    <li><a href="alterar_postagens.php">Alterar Postagens</a><br/><br/></li>
			<!-- <a href="excluir_postagens-1.php">Excluir Postagens (Digitando Código)</a><br/><br/> -->
			<li><a href="excluir_postagens-2.php">Excluir Postagens</a><br/></li>
</ul>
		</div>
	</div> 
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
    <div class="jumbotron text-center abaixo" style="margin-bottom:0">
  <p>The Janaúba Times<sup>&copy;</sup> 2019. Todos os direitos reservados</p>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>