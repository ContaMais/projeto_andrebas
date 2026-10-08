<?php
$var = $_GET['a'];

$base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");
mysqli_set_charset($base, 'utf8');

$apagar = "DELETE FROM cadastro WHERE nome='$var'";
mysqli_query($base, $apagar);

echo "Registro excluído com sucesso!<br>";
echo "<hr>";

include 'lista.inc.php';
?>