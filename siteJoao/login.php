<?php
session_start(); 
?>
<!DOCTYPE html>
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
     </head>
  <body style="height: 1500px">
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
<div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email" placeholder="Digite o seu e-mail" name="email" required autofocus>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" required>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="btn btn-secondary">Limpar</button>
</form>
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
	if(isset($_POST["email"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha = md5($senha);
    include_once "conexao.php";
    $con = conecta_mysql();
    $sql = "SELECT * FROM  usuarios 
    WHERE email = '$email' and senha ='$senha'";
    $resultado_sql = mysqli_query($con,$sql);
    if($resultado_sql){
      //mysqli_fetch_assoc converte a consulta em um vetor
      $dados_usuario = mysqli_fetch_assoc($resultado_sql);
      if(isset($dados_usuario["id_usuario"])){
        print "e-mail e senha correto.";
        // session_start();
        $_SESSION["id_usuario"] = $dados_usuario["id_usuario"];
        $_SESSION["nome"] = $dados_usuario["nome"];
        $_SESSION["email"] = $dados_usuario["email"];
        print $_SESSION["nome"];
        // header("location:index.php");
           }
        else{
        print"<script> alert('e-mail e senha não conferem'); </script>";
          }
             }
            else{
              print "Erro de SQL";
              }
              }
?>
<!-- header problemático -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>