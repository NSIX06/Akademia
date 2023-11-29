<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>!-!</title>
</head>
<body>
    <h1>Área do Usuário</h1>

    <?php
        session_start();
        echo "<p>Olá, " . $_SESSION["nome"] . "</p>";
    ?>

    <a href="../index.html">Inicio</a>
</body>
</html>