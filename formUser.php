<?php
    include_once("class/User.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademia</title>
    <link href="assets/estilo.css" rel="stylesheet">
</head>
<body>

    <h1>Cadastre-se aqui</h1>
  

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" minlength="3" required><br><br>

        <label>E-mail:</label>
        <input type="text" name="email" minlength="3" required><br><br>

        <label>Data de Nascimento:</label>
        <input type="text" name="dtNascimento" minlength="3" required><br><br>

        
        <label>Cidade:</label>
        <input type="text" name="cidade" minlength="3" required><br><br>

        <label>Senha:</label>
        <input type="text" name="senha" minlength="3" required><br><br>

        <input type="submit" name="inserir" value="Inserir">

        <?php

            if ( isset($_REQUEST["inserir"]) ) //evitar que o procedimento seja executado sem apertar o botão
            {
                $p = new User(); //criar objeto da classe Produto
                $p->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["dtNascimento"],  $_REQUEST["cidade"], $_REQUEST["senha"]); // encapsular os valores do form no objeto produto
                
                echo $p->inserirUser() == true ?
                        "<p>Usuário cadastrado!</p>" :
                        "<p>Ocorreu um erro!</p>";
            }
        ?>

    </form>
    
</body>
</html>