<?php
$nome  = "Larissa Rosário";
$curso = "Técnico em Informática";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World em PHP</title>
</head>
<body>
    <h1><?= "Hello, World!" ?></h1>

    <p>Meu nome é <?= $nome ?>.</p>

    <p>Estou estudando <?= $curso ?>.</p>

    <p>Versão do PHP: <?= PHP_VERSION ?></p>
</body>
</html>