<?php 
include_once "../conexao.php";
include "../includes/funcoes.php";

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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
   

  </head>
  <style>
.lado{
  background-color: lightgray;
  height: 1000px;
  width: 250px;
  /* position: fixed; */
  z-index: 1;
}
.conteudo{
  /* background-color: lightgreen; */
}
.fakeimg {
    height: 200px;
    width: 200px;
    background: #aaa;
  }
  .borda{
  border: 1px;
  border-style: solid;
  
}
.bordap{
  border: 1px;
  padding: 5px;

  border-style: solid;
  border-color: red;
  text-align: justify;
}
.imagem{
height: 230px;
width: 230px;
float: right;
padding: 10px;

}
.clear{
  clear: both;

}
.clearfix{
  overflow: auto;
}
.justifica{
  text-align: justify;

}
*{
  margin: 0;
  padding: 0;
}
  /* h1{
    font-family: "Old English Text MT Regular";
  }
  .fonte{
    font-family: "Old English Text MT Regular";
  } */
  </style>
  <body>

</div>
  <?php
require "../includes/menu.php";
?>

<br/>
<br/>
<br/>
<br/>
<br/>
//save file
	$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);

<?php
// function decerto($con){
// $sql = "SELECT * from noticias";
// $resultado = mysqli_query($con, $sql);
// if($resultado){
//   $res = array();
//   while($linha = mysqli_fetch_assoc($resultado)){
//     $res[] =$linha;
//   }
// }
// return $res;
// };
// $x = decerto($con);
// foreach ($x as $y){
//   print $y["titulo"];
//   print "<br/><br/>";
//   print $y["texto_noticia"];
// }

$sql = "SELECT * from noticias where True";
$resultado = mysqli_query($con, $sql);
if($resultado){
  $res = array();
  // $res = mysqli_fetch_assoc($resultado);
  // foreach($res as $x){
  //   print $res["titulo"];
  // }
 
  while($linha = mysqli_fetch_assoc($resultado)){
    $res[] = $linha;
  }

  foreach($res as $x){
    echo "<br/>";
    print "<div class='container borda clearfix'>";
   
    print "<p>";
    print "<h2 style='text-align: center'>";
    print $x["titulo"];
    print "</h2>";
    print "<br/>";
    print "<h2 style='text-align: center'>";
   print "<small>";
    print $x["subtitulo"];
    print "</small>";
    print "</h2>";
    print "</p>";
//a imagem deve aparecer aqui
$img = $x["imagem_noticia"];
// $i = fopen($img);
// print $i;

print "<img src='$img'>";

    print "<div class='justifica'>";
    print "<p>";
    print $x["texto_noticia"];
    print "</p>";
    print "</div>";
    print "</div>";
  //   print "<br/>";
  //   print $x["data_postagem"];
  //  print "<br/>";

  }
  // print_r($res);
}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>