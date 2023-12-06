<?php
    include_once("../class/User.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <?php

        $p = new User();
        $p->buscarUsuario($_GET["pid"]);

        echo "
            <form method='POST'>


            <label>E-mail:</label>
            <input type='text' name='email' minlength='3' value='" . $p->getEmail() . "' required><br><br>

            <label>Cidade:</label>
            <input type='text' name='cidade' minlength='3' value='" . $p->getCidade() . " ' required><br><br>

            <label>Senha:</label>
            <input type='text' name='senha' minlength='3' value='" . $p->getSenha() . "' required><br><br>

            <input type='submit' name='atualizar' value='Atualizar'>
        ";

        if ( isset($_REQUEST["atualizar"]) ) //*Evitar que o procedimento seja executado sem apertar o botão
        { 
            $p->setEmail($_REQUEST["email"]);
            $p->setCidade($_REQUEST["cidade"]);
            $p->setSenha($_REQUEST["senha"]);
        

            echo $p->atualizarUsuario ($_GET["pid"] ) == true ?
                    "<p>Usuário atualizado!</p>" :
                    "<p>Ocorreu um erro!</p>";
        }
    ?>

    </form>
</body>

</html>