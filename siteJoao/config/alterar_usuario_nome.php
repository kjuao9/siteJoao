<!DOCTYPE html>
<?php
session_start();
if ( !isset($_SESSION["codigo"])){
	header("location:index.php?erro=2");
}
include_once "conexao.php";
$con = conecta_mysql();
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Professor"/>
	<meta name="description" content="Descrição"/>
	<meta name="keywords" content="Palavras, chaves"/>
	<title>PHP com BD</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include "includes/menu-login.php" ?>
	<div id="area-principal">
		<div id="postagem">
			<form method = "post" action="">
				<fieldset>
					<label>Código do usuario</label>
					<input type="text" name="codigo" id="codigo" disabled
					value="<?php print$_SESSION["codigo"]?>"/>
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
			$codigo = $_SESSION["codigo"];

			if(strlen($nome) < 2){
				print"<script>alert('Nome incorreto.')</script>";
			}
			else{
				#codigo nao esta em aspas simples pois e um numero.
				$sql = "UPDATE usuarios SET nome='$nome' WHERE codigo=$codigo";
				$resultado = mysqli_query($con, $sql);
				if($resultado){
					// print "nome altrerado";
					$_SESSION["nome"] = $nome;
					header("location: login_correto.php");
				}
			}
		}
		?>
	</div>
</body>
</html>
