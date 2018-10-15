<?php
    require "DB.php";
    require "TenistaDao.php";
    require "JogoDao.php";

    $resultado_tenista = $dao_tenista->read();
    $resultado_jogo = $dao_jogo->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de tenistas</title>
</head>
<body>
    <a href="form.php">Cadastrar novo tenista</a><br>

    <h3>Lista de tenistas cadastrados</h3>
    <table>
        <th>Nome</th>
        <th>Idade</th>
        <th>Endereço</th>
        <?php for ($i=0; $i< count($resultado); $i++) { ?>
            <tr>
                <td> <?= $resultado_tenista[$i]->nome; ?> </td>
                <td> <?= $resultado_tenista[$i]->idade; ?> </td>
                <td> <?= $resultado_tenista[$i]->endereco; ?> </td>
            </tr>
        <?php } ?>
    </table>

    <h3>Lista de jogos cadastrados</h3>
    <table>
            <th>Tenista 1</th>
            <th>Tenista 2</th>
            <th>Campeonato</th>
            <th>Público</th>
            <th>Pontuação Tenista 1</th>
            <th>Pontuação Tenista 2</th>
            <th>Quadra</th>
    </table>
    <?php for ($i=0; $i< count($resultado); $i++) { ?>
        <tr>
            <td> <?= $resultado_jogo[$i]->tenista1; ?> </td>
            <td> <?= $resultado_jogo[$i]->tenista2; ?> </td>
            <td> <?= $resultado_jogo[$i]->campeonato; ?> </td>
            <td> <?= $resultado_jogo[$i]->publico; ?> </td>
            <td> <?= $resultado_jogo[$i]->pontuacao_tenista_01; ?> </td>
            <td> <?= $resultado_jogo[$i]->pontuacao_tenista_02; ?> </td>
            <td> <?= $resultado_jogo[$i]->tipo_quadra; ?> </td>
        </tr>
    <?php } ?>
</body>
</html>