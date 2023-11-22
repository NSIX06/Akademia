<?php
    include_once("class/User.php");
?>

<script src="assets/js/util.js"></script>
<section class="lista">

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>dtNascimento</th>
        <th>Cidade</th>
        <th>Senha</th>
    </tr>

<?php

    $p = new User(); //criar objeto da classe Produto
    $lista = $p->lsUsuario();

    foreach ($lista as $item) {
    echo "
            <tr>
                <td> " . $item["nome"] . "</td>
                <td> " . $item["email"] . "</td>
                <td> " . $item["dtNascimento"] . "</td>
                <td> " . $item["cidade"] . "</td>
                <td> " . $item["senha"] . "</td>
                <td> <a href='delUser.php?pid=" . $item["idUsuario"] .  "' onClick='return confirmar()'>Excluir</a> </td>
                <td> <a href='editar.php?pid=" . $item["idUsuario"] .  "'>Editar</a> </td>
            </tr>
    ";
    }

?>

</table>