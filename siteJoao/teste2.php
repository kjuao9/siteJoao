<?php 
session_start();
print "id_usuario: ".$_SESSION['id_usuario']." <br/>";
print "nome: ".$_SESSION['nome']." <br/>";
print "email: ".$_SESSION['email']." <br/>";
?>