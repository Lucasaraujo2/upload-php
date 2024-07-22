<?php
$servidor = "localhost";
$banco = "bd_foto";
$usuario = "root";
$senha = "";

$conn = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");
$script = "insert into foto(nome, foto) values('$nome', ' $Nomeecaminhodafoto')";
// $resultado = $conn->query($script)->fetch();