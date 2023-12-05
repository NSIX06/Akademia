<?php
    // session_start();
    // unset($_SESSION["nome"]);
    // session_destroy();

    if (isset($_COOKIE["nome"]))
    {
        unset($_COOKIE["nome"]);
        setcookie("nome", "", time() - 3600, "/");
    }

    header("Location: ../php/void.php");
?>