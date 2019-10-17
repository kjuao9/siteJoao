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
  /* border-color: steelblue; */
  border-color: #7d89b3;
  padding: 10px;
  border-style: solid;
  border-radius: 5px;
  background-color: #e9ecef;
  background: #e9ecef -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#e9ecef));
}
footer {
  background-color: skyblue;
  padding: 0px;
}
* {
  padding: 0px;
  margin: 0px;
}
.jumbotron{
  background-color: #ECE9E9;
}
.termos{
height: ;
padding: 5px;
vertical-align: 0;
}
body{
  /*#ECE9E9 */
  background-color: #ECE9E9;
background: #ECE9E9 -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#ECE9E9));
}
  </style>
  <body>
<?php
require "includes/menu.php";
?>
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
    <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha" required>
    <div class="valid-feedback">Válido.</div>
    <div class="invalid-feedback">A senha deve ter no minímo 8 caracteres.</div>
  </div>
  <div class="form-group">
    <label for="senha2">Repita a senha:</label>
    <input type="password" class="form-control" id="senha2" placeholder="Digite novamente a senha" name="senha2" required>
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
 termos de condição</button></span>.
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
      <li>Ao clicar em aceito, você estará doando sua alma a João Paulo, o criador de tudo.</li>
      <li>O Supremo Criador não se responsabiliza por informações vazadas e fake news.</li>
      <li>A vida é injusta.</li>
      <!-- <h4><small>&#9312;</small></h4> -->
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
    print "<script>
    alert('Erro de SQL');
    window.location.href = 'erro.php';
    </script>";
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
  <br/>
  <br/>
  <br/>
  <br/>
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