<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["id_usuario"])){
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
				<p>
				Alterar Senha de <b><?php print$_SESSION["nome"]?></b>
				</p>
				<br/>
					<label>Nova Senha</label>
					<input type="password" name="senha" id="senha"/>
					<br/>
					<label>Repetir nova senha</label>
					<input type="password" name="senha2" id="senha2"/>
					<br/>
					<input type="submit" value="Alterar">
					<input type="reset" value="Cancelar">
				</fieldset>
			</form>
		</div>
			<?php
			//código PHP aqui!
			if(isset($_POST["senha"])){
				$senha = $_POST["senha"];
				$senha2 = $_POST["senha2"];
				$codigo = $_SESSION["codigo"];
				
				if($senha != $senha2){
					print"<script>alert('As senhas são diferentes')</script>";
				}
				else{
					$senha = md5($senha);
					$sql = "UPDATE usuarios SET senha='$senha' WHERE codigo=$codigo";
					$resultado = mysqli_query($con, $sql);
						if($resultado){
							print "senha alterada";
							$_SESSION["senha"] = $senha;
							
					}
				}
			}
			?>
	</div>
</body>
</html>
