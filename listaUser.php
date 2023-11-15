<section class="lista">

<table>
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Categoria</th>
    </tr>

<?php

    $p = new Produto(); //criar objeto da classe Produto
    $lista = $p->listarProduto();

    foreach ($lista as $item) {
       echo "
            <tr>
                <td> " . $item["nomeProduto"] . "</td>
                <td> " . $item["valorUnitario"] . "</td>
                <td> " . $item["nomeCategoria"] . "</td>
                <td> <a href='excluirProduto.php?pid=" . $item["idProduto"] .  "'>Excluir</a> </td>
            </tr>
       ";
    }

?>

</table>