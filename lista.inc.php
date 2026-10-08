<?php
$base = mysqli_connect('localhost', 'root', '', 'bdexemplo') or die("erro de conexão");
mysqli_set_charset($base, 'utf8');

// Consulta para pegar os registros do estado de SP
$regra1 = "SELECT * FROM cadastro WHERE estado = 'SP' ORDER BY nome";
$res = mysqli_query($base, $regra1);

echo "<h2> Cadastros de usuários do estado de SP </h2>
<table border='1'>
<tr>
  <td>Nome</td>
  <td>E-mail</td>
  <td>Cidade</td>
  <td>Comentário</td>
  <td></td>
  <td></td>
</tr>";

while ($mostrar = mysqli_fetch_array($res)) {
    echo "<tr>
      <td>" . $mostrar['nome'] . "</td>
      <td>" . $mostrar['email'] . "</td>
      <td>" . $mostrar['cidade'] . "</td>
      <td>" . $mostrar['comentarios'] . "</td>
      <td><a href='apagar.php?a=" . $mostrar['nome'] . "'>apagar</a></td>
      <td><a href='editar.php?a=" . $mostrar['nome'] . "'>editar</a></td>
    </tr>";
}
echo "</table>";

// Consulta para pegar os registros de outros estados
$regra2 = "SELECT * FROM cadastro WHERE estado <> 'SP' ORDER BY nome";
$res2 = mysqli_query($base, $regra2);

echo "<h2> Cadastros de usuários de Outros Estados </h2>
<table border='1'>
<tr>
  <td>Nome</td>
  <td>E-mail</td>
  <td>Cidade</td>
  <td>Comentário</td>
  <td></td>
  <td></td>
</tr>";

while ($mostrar = mysqli_fetch_array($res2)) {
    echo "<tr>
      <td>" . $mostrar['nome'] . "</td>
      <td>" . $mostrar['email'] . "</td>
      <td>" . $mostrar['cidade'] . "</td>
      <td>" . $mostrar['comentarios'] . "</td>
      <td><a href='apagar.php?a=" . $mostrar['nome'] . "'>apagar</a></td>
      <td><a href='editar.php?a=" . $mostrar['nome'] . "'>editar</a></td>
    </tr>";
}
echo "</table>";
?>