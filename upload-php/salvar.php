<?php
$nome = $_POST["nome"];
echo "Nome do usuario: $nome <br>";

$foto =$_FILES["foto"];
//var_dump( $foto);
// echo "<pre>";
// print_r($foto);
// exit();
echo "Foto do usuario:" . $foto['name'] . "<br>";
$Nomeecaminhodafoto ="img/" . round((microtime(true))) . $foto['name']; 
move_uploaded_file($foto['tmp_name'], $Nomeecaminhodafoto);
include "conexao.php"
?>