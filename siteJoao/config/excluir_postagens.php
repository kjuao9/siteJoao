<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["codigo"]) ){
			header("location:index.php?erro=2");
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


include_once "conexao.php";
$con = conecta_mysql();
$id_usuario = $_SESSION["codigo"];
$id_postagem = $_GET["id_postagem"];

$sql = "DELETE FROM postagem WHERE id_postagem = $id_postagem";
$resultado = mysqli_query($con, $sql);
if($resultado){
    print "<script>
            alert('Mensagem excluida com sucesso!')
            </script>";
}
else{
    print  "<script>
    alert('Erro ao excluir mensagem')
    </script>";
}


?>



<a href="excluir_postagens-2.php">Clique p/ voltar</a>
	</div> <!-- Div Área principal -->
</body>
</html>
