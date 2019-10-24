<?php
session_start();
if ( !isset($_SESSION["id_usuario"])){
	header("location:../erro.php");
}
include_once "../conexao.php";
include "../includes/funcoes.php";
$con = conecta_mysql();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<!-- <style>
body{
	background-color: azure;
}
</style> -->
<body style="background-color: azure;">
	<?php include "../includes/menu-login.php" ?>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class="container">
	<div id="area-principal">
		<div id="postagem">
			<form method = "post" action="alterar_usuario_email.php">
                <fieldset>
                <label>Código do usuario</label>
                <input type="text" name="codigo" id="codigo" disabled
					value="<?php print$_SESSION["id_usuario"]?>"/>
					<br/>
					<label> E-mail do usuario</label>
					<input type="text" name="email" id="email"
					value="<?php print$_SESSION["email"]?>"/>
					<br/>
					<input type="submit" value="Alterar">
					<input type="reset" value="Cancelar">
                </fieldset>
			</form>
		</div>
		<?php
		//código PHP aqui!
		if(isset($_POST["email"])){
            $email = $_POST["email"];
            $codigo = $_SESSION["id_usuario"];

			if(verificar_email($con, $email) == false){
				print "<script>alert('O e-mail já existe. Escolha outro')</script>";
			}
			else{
				$sql = "UPDATE usuarios SET email='$email' WHERE id_usuario=$codigo";
				$resultado = mysqli_query($con, $sql);
				if($resultado){
					print "Email alterado";
					echo "<br/>";
					$_SESSION["email"] = $email;

					// print "<script>
					// window.location.href = ;
					// </script>";
					print "<a href='../configuracoes.php'>Clique aqui para voltar</a>";
					// header("location: ../configuracoes.php");
				} 
			}
        
        }
		?>
	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>