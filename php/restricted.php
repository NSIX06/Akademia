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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Akademia</title>



    <link href="../assets/css/area.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav>
            <a href="../index.html">Início</a>
            <a href="">Modalidades</a>
            <a href="">Planos</a>
            <a href="">Eventos</a>
            <a href="../php/restricted.php">Área restrita</a>
            <a href="../php/formUser.php">Cadastre-se</a>
        </nav>

        <img src="../assets/img/akademia.png" alt="logotipo">
    </header>

    <main>
        <section>



            <h1>Área restrita</h1>

            <section id="poost">
                <form method="POST">

                    <label>E-mail:</label>
                    <input type="text" name="email" minlength="3" required
                        placeholder="Informe seu e-mail de cadastro"><br><br>

                    <label>Senha:</label>
                    <input type="password" name="senha" minlength="3" required placeholder="Informe sua senha"><br><br>

                    <button type="submit" name="inserir">Entrar</button>

                    <section class="aa">
                        <a href="">Esqueceu a senha? Clique aqui.</a><br>
                    </section>

                    <section class="aaa">
                        <a href="../php/formUser.php">Nao tem cadastro? Cadastre-se aqui.</a>
                    </section>


                    <?php

                            //if(isset($_REQUEST["inserir"]))
                            //{
                                //$u = new User();

                                //if ($u->autenticarUsuario($_REQUEST["email"],$_REQUEST["senha"]) == 0)
                                //{
                                   // echo "<p>E-mail e/ou senha incorreto(s)!</p>";                   
                                //}
                                //else 
                                //{
                                    //session_start();
                                    //$_SESSION["nome"] = $u->getNome();
                                    //header("Location: ../php/void.php"); //*redirecionando para outra página
                                //}
                            //}

                            if (isset($_REQUEST["inserir"]))
                            {
                                $u = new User();
                
                                if ($u->autenticarUsuario($_REQUEST["email"], $_REQUEST["senha"]) == 0)
                                {
                                    echo "<p>Usuário e/ou senha incorreto(s).</p>";                   
                                }
                                else {
                                    ////Utilizando dados em sessão
                                    // session_start();
                                    // $_SESSION["nome"] = $u->getUsuario();
                                    // header("Location: areaRestrita.php"); //redirecionando para outra página
                                    $cookieName = "nome";
                                    $cookieValue = $u->getNome();
                                    setcookie($cookieName, $cookieValue, time() + 86400, "/");
                                    header("Location: ../php/void.php");
                                }
                            }
                            
                
                        ?>

                </form>




                <img class="woaman" src="../assets/img/barra.png" alt="">

            </section>
        </section>
    </main>

    <footer>
        <p>Desenvolvido por Luiz, 2023</p><br>
        <p>Técnico em Informática Senac Santos</p>
    </footer>


</body>

</html>