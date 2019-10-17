<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["codigo"])){
			header("location:index_erro.php?erro=2");
		}
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
	<div id="div-area-principal">
		<?php
		//listar a mensagem pelo código recebido aqui
		$id_postagem = $_GET['id_postagem'];
		include_once "conexao.php";
		$con = conecta_mysql();
		$sql = "SELECT * FROM postagem where id_postagem=$id_postagem";
		$resultado = mysqli_query($con, $sql);
		if($resultado){
			$mensagem = mysqli_fetch_assoc($resultado);
		}
		?>
		<div id="postagem">
			<form method="post" action="">
			<fieldset>
				<p>
					<textarea id="mensagem" name="mensagem" maxlenght="140" cols="70"
					rows="2" required><?php
					print $mensagem['texto_postagem'];
					?></textarea>
				</p>
				<input type="submit" value="Alterar Mensagem"/>
				<input type="reset" value="Cancelar"/>
			</fieldset>
			</form>
		</div>
			<?php
			//código para alterar a mensagem do formulário aqui
			if ( isset($_POST["mensagem"]) ){
				$mensagem= $_POST["mensagem"];
				$con = conecta_mysql();
				$sql = "UPDATE postagem SET texto_postagem='$mensagem'
				WHERE id_postagem='$id_postagem'";

				if(mysqli_query($con, $sql)){
					print "<script language='javascript'>window.location.href=window.location.href; alert('Mensagem Alterada!')</script>";
					
			
				}
				else{
					print "erro de SQL";
				}
			}

			?> 
	</div> <!-- Div Área principal  -->
</body>
</html>
