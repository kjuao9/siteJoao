<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["id_usuario"]) ){
			header("location:index.php?erro=2");
		}
		$id_usuario = $_SESSION["codigo"];
		include_once "includes/funcoes.php";
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
	<div id="div-area-principal">
		<div id="postagem" class="clear">
			Digite o Código da postagem que deseja <b>excluir</b> <br/>
			<form action="" method="post">
				<input type="text" name="codigo" size="4"/>
				<input type="submit" value="Excluir"/>
			</form>
		</div>

		<?php
		//consultando todas as postagens do usuário
		//Código para Consultar aqui
		$mensagens = listar_mensagens2($con, $id_usuario);

		foreach ($mensagens as $mensagem) {
			print "<div id='postagem' class='clear tamanho-450'>";
			print "Código da Postagem: " .$mensagem["id_postagem"];
			print "<br>Código do Usuário: ".$mensagem["id_usuario"];
			print "<br>Texto da Postagem: ".$mensagem["texto_postagem"];
			print "<br>Data da Postagem: ".$mensagem["data_inclusao"];
			print "</div>";
			}

		//excluindo postagem
		//Código ára Excluir aqui
		if( isset($_POST["codigo"]) ) {
			$id = $_POST['codigo'];
			$sql = "DELETE FROM postagem WHERE id_postagem = $id"; 
			$resultado = mysqli_query($con, $sql);
			
			if($resultado){
				print"<script> alert('Mensagem deletada!') </script>";
				print "<script> window.location.href=window.location.href; </script>";
			}
			else{
				print"<script> alert('Erro ao deletar mensagem.') </script>";
				print "<script> window.location.href=window.location.href; </script>";
			}
		}
		?>
	</div> <!-- Div Área principal -->
</body>
</html>
