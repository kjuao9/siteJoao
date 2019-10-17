<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["id_usuario"]) ){
			header("location:index.php?erro=2");
		}
		include_once "conexao.php";
		include "includes/funcoes.php";
		$con = conecta_mysql();
		$id_usuario = $_SESSION["codigo"];
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
		<div id="postagem" class="clear tamanho-450">
			Escolha Qual Postagem deseja <b>excluir</b> <br/>
			Clique <a href="excluir_postagens-2.php">Aqui</a> para atualizar a página
		</div>
		<?php
		//listar todas as postagens com o link de alterar para cada postagem
		$mensagens = listar_mensagens2($con, $id_usuario);

		foreach ($mensagens as $mensagem) {
			print "<div id='postagem' class='clear tamanho-450'>";
			print "Código da Postagem: " .$mensagem["id_postagem"];
			print "<br>Código do Usuário: ".$mensagem["id_usuario"];
			print "<br>Texto da Postagem: ".$mensagem["texto_postagem"];
			print "<br>Data da Postagem: ".$mensagem["data_inclusao"];
			print "<br><a href='excluir_postagens.php?id_postagem="
			.$mensagem["id_postagem"]."'>Excluir</a>";
			print "</div>";
			}
		//O link deve direcionar o usuário para este mesmo arquivo passando o id da postagem que deseja excluir


		//Código para excluir a ensagem pelo id aqui
		?>
		</div> <!-- Div Área principal -->
</body>
</html>
