<?php
    include_once("../class/User.php");
    error_reporting(0);
?>

<script src="../assets/js/util.js"></script>
<section class="lista">


<?php

    $p = new User(); //*Criando o objeto da classe Usuário
    $lista = $p->lsUsuario();

    if ($lista != false)
    {

            echo "  
                <table>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>dtNascimento</th>
                <th>Cidade</th>
                <th>Senha</th>
            </tr>";


            foreach ($lista as $item) 
            {
            echo "
                    <tr>
                        <td> " . $item["nome"] . "</td>
                        <td> " . $item["email"] . "</td>
                        <td> " . $item["dtNascimento"] . "</td>
                        <td> " . $item["cidade"] . "</td>
                        <td> " . $item["senha"] . "</td>
                        <td> <a href='../php/delUser.php?pid=" . $item["idUsuario"] .  "' onClick='return confirmar()'>Excluir</a> </td>
                        <td> <a href='../php/editar.php?pid=" . $item["idUsuario"] .  "'>Editar</a> </td>
                    </tr>
            ";
            
            }

            echo "</table>";

    }

        else
        {
            echo "<p>Ocorreu um erro inesperado. Tente novamente mais tarde.</p>";
        }



?>

