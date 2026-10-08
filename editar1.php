<?php
echo "Atualizando o cadastro!<br>";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");
mysqli_set_charset($base, 'utf8');

$regra = "UPDATE cadastro SET email='$email', cidade='$cidade', estado='$estado' WHERE nome='$nome'";
$res = mysqli_query($base, $regra) or die("Erro na atualização");

echo "<hr>";
include 'lista.inc.php';
?>