<?php
    require "TenistaDao.php";
    $dao = new TenistaDao();
    $resultado = $dao->read();
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
    <a href="form.php">Cadastrar novo tenista</a>

    <table>
        <th>Lista de tenistas cadastrados</th>
        <?php for ($i=0; $i< count($resultado); $i++) { ?>
            <tr>
                <td> <?= $resultado[$i]->nome; ?> </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>