<?php
session_start();
if ( !isset($_SESSION["id_usuario"])){
	header("location:index.php?erro=2");
}
include_once "../conexao.php";
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
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
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
			<form method = "post" action="">
				<fieldset>
					<label>Código do usuario</label>
					<input type="text" name="codigo" id="codigo" disabled
					value="<?php print$_SESSION["id_usuario"]?>"/>
					<br/>
					<label>Nome do usuario</label>
					<input type="text" name="nome" id="nome"
					value="<?php print$_SESSION["nome"]?>"/>
					<br/>
					<input type="submit" value="Alterar">
					<input type="reset" value="Cancelar">
				</fieldset>
			</form>
		</div>
		<?php
		//código PHP aqui!
		if ( isset($_POST["nome"])){
			$nome = $_POST["nome"];
			$codigo = $_SESSION["id_usuario"];

			if(strlen($nome) < 2){
				print"<script>alert('Nome incorreto.')</script>";
			}
			else{
				#codigo nao esta em aspas simples pois e um numero.
				$sql = "UPDATE usuarios SET nome='$nome' WHERE id_usuario=$codigo";
				$resultado = mysqli_query($con, $sql);
				if($resultado){
					// print "nome altrerado";
					echo "Nome alterado!<br/>";
					$_SESSION["nome"] = $nome;
					print "<a href='../configuracoes.php'>Clique aqui para voltar</a>";
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
