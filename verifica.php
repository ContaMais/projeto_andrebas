<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verifica</title>
</head>
<body>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$comentarios = $_POST['comentarios'];

$erro = 0;

// Verifica se o campo nome não está em branco
if (empty($nome) || strstr($nome, ' ') === FALSE) {
    echo "Favor digitar seu nome corretamente.<br>";
    $erro = 1;
}

// Verifica se o campo email está preenchido corretamente
if (strlen($email) < 8 || strstr($email, '@') === FALSE) {
    echo "Favor digitar seu email corretamente.<br>";
    $erro = 1;
}

// Verifica se o campo cidade está em branco
if (empty($cidade)) {
    echo "Favor digitar sua cidade.<br>";
    $erro = 1;
}

// Verifica se o campo estado está preenchido com 2 dígitos
if (strlen($estado) != 2) {
    echo "Favor digitar o seu estado corretamente.<br>";
    $erro = 1;
}

// Verifica se o campo comentários está vazio
if (empty($comentarios)) {
    echo "Favor entre com algum comentário.<br>";
    $erro = 1;
}

// Se não houve erro: cadastra e lista os registros
if ($erro == 0) {
    echo "Todos os dados foram digitados corretamente.<br>";
    include 'insere.inc.php';
    echo "<br><hr><br>";
    include 'lista.inc.php';
}
?>
</body>
</html>