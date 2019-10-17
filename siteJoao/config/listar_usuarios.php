<!DOCTYPE html>
	<?php
		session_start();
		if ( !isset($_SESSION["id_usuario"]) ){
			header("location:../erro.php");
        }
        include_once "conexao.php";
        $id_usuario = $_SESSION["codigo"];
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

    <?php
    $sql = "SELECT codigo, nome from usuarios";
    $resultado = mysqli_query($con, $sql);
    $usuarios = array();
  
    while($linha = mysqli_fetch_assoc($resultado)){
        $usuarios[] =$linha;
      }

    ?>

    <select name="nome_usuario">
    <?php 
    // <option value="1">Usuário 1</option>
      foreach($usuarios as $usuario){
          print "<option value=$usuario[codigo]>$usuario[nome],$usuario[codigo]</option>";
      }
    ?>
    </select>
	</div> <!-- Div Área principal -->
</body>
</html>
