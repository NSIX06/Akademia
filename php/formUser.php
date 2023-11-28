<?php
    include_once("class/User.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Akademia</title>

    
    
    <link href="assets/css/estilo.css" rel="stylesheet">
</head>
<body>

<header>
        <nav>
            <a href="index.html">Início</a>
            <a href="">Modalidades</a>
            <a href="">Planos</a>
            <a href="">Eventos</a>
            <a href="restricted.html">Área restrita</a>
            <a href="php/formUser.php">Cadastre-se</a>
        </nav>

        <img src="assets/img/akademia.png" alt="logotipo">
    </header>

    <main>
        <section>



    <h1>Cadastre-se aqui</h1>

        <section id = "poost">
    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" minlength="3" required placeholder="Informe seu nome completo"><br><br>

        <label>E-mail:</label>
        <input type="text" name="email" minlength="3" required  placeholder="Informe seu e-mail"><br><br>

        <label>Data de Nascimento:</label>
        <input type="text" name="dtNascimento" minlength="3" required placeholder="Informe sua data de nascimento"><br><br>

        
        <label>Cidade:</label>
        <input type="text" name="cidade" minlength="3" required placeholder="Informe sua cidade"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha" minlength="3" required placeholder="Informe uma senha com 8 caracteres ou mais"><br><br>

        <label>Confirme sua senha:</label>
        <input type="text" name="cfsenha" minlength="3" required placeholder="Repita a senha"><br><br>


        <button type="submit" name="inserir">Cadastrar</button>


    </form>


        
    <img class="man" src="assets/img/homem.png" alt="">        

        </section>
    </section>
    </main>

    <footer>
        <p>Desenvolvido por Luiz, 2023</p><br>
        <p>Técnico em Informática Senac Santos</p>
    </footer>

    
</body>
</html>