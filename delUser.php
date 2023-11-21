<?php
    include_once("class/User.php");
    $p = new User();

    $p->delUsuario($_GET["pid"]);
    echo "Usuário excluído!";
?>

<a href="listaUser.php">Voltar</a>