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
fieldset {
  border: 1px;
  border-color: steelblue;
  padding: 10px;
  border-style: solid;
}
footer {
  background-color: skyblue;
  padding: 0px;
}
* {
  padding: 0px;
  margin: 0px;
}
.termos{
height: ;
padding: 5px;
}
  </style>
  <body>


  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a class="navbar-brand" href="index.php"> -->
  <!-- <img src="/imagens/logo.png" alt="Logo" style="height:60px;"> -->
  <!-- <p><h1><span style="font-family: Old English Text MT Regular">J</span></h1></p> -->
  <!-- </a> -->
  

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Página Inicial <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Notícias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeria.php">Galeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">*reservado*</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuário
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="cadastro.php">Cadastro</a>
          <a class="dropdown-item" href="#">Configurações</a>
          <a class="dropdown-item" href="sair.php">Sair</a>
        </div>
      </li>
    </ul>

  </div>
  <div id="fonte_old_english" class=".col-6 text-white">
  <!-- Transformar o texto abaixo em link -->
    <!-- <h2 style="font-family: Old English Text MT Regular">The Janaúba Times</h2> -->
</div>
<!-- colocar p/ o butão fechar -->

</nav>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
<form action="" method="post" class="needs-validation" novalidate>
<fieldset>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" id="nome" placeholder="Digite o seu nome" name="nome" required autofocus>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" required minlength="8">
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">A senha deve ter no minímo 8 caracteres.</div>
  </div>
  <div class="form-group">
    <label for="senha2">Repita a senha:</label>
    <input type="password" class="form-control" id="senha2" placeholder="Digite novamente a senha" name="senha2" required minlength="8">
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">A senha deve ter no minímo 8 caracteres e ser idêntica a digitada.</div>
  </div>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" name="email" required>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> Eu li e concordo com os<span><button type="button" class="btn btn-link termos" data-toggle="modal" data-target="#exampleModalCenter">
 termos de condição
</button></span>.
      <div class="valid-feedback">Válido.</div>
      <div class="invalid-feedback">Marque esta caixa para continuar.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-secondary">Limpar</button>
  </fieldset>
</form>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Termos de condição</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      1-Ao clicar em aceito, você estará doando sua alma a João Paulo, o criador de tudo.<br/>
      2-O Supremo Criador não se responsabiliza por informações vazadas e fake news.<br/>
      3-A vida é injusta.
      &#9312;
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
   
      </div>
    </div>
  </div>
</div>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php 
if(isset($_POST["nome"])){
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $senha2 = $_POST["senha2"];

  if($senha == $senha2){
    $senha = md5($senha);
      if($con){
      // verificar email;
      if(verificar_email($con, $email)){
      $sql = "INSERT INTO usuarios (nome, email, senha)
      values('$nome', '$email', '$senha')";
      $resultado = mysqli_query($con, $sql);
        if($resultado){
          print "<script>
          alert('Usuário Inserido');
          window.location.href=window.location.href;
        </script>";
                }
          
  else{
    print "erro de SQL";
    }#else da conexão
      }//if que verifica email
      else{
        print"Este e-mail já existe, escolha outro e-mail.";
      }
    }#if da conexão
else{
            
  print "<script>
  alert('Suas senhas são diferentes')
  </script>";
}#else do if que verifica as senhas
}#if que verifica as senhas
}


?>

<p class="container">
<?php
if(isset($_SESSION["nome"])){
  print "Você está logado como <strong>".$_SESSION["nome"]."</strong>.";
}
else{
  print "Você não está logado.";
}
?>
</p>
<footer style="height: 200px;">
<p align="center">batmannananananbatmannanananananbatmananananana</p>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>