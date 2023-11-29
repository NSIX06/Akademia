<?php
    include_once("../class/User.php");
    $p = new User();

    $p->delUsuario($_GET["pid"]);
    echo "Usuário excluído!";
?>

<a href="../php/listaUser.php">Voltar</a>