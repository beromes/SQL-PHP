<?php
    if(isset($_POST["nome"])){
        require "TenistaDao.php";
        $dao = new TenistaDao();
        $resultado = $dao->insert($_POST["nome"], $_POST["endereco"], $_POST["idade"]);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir tenistas</title>
</head>
<body>
    <form action="form.php" method="POST">
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="text" name="endereco" placeholder="Endereço"><br>
        <input type="number" name="idade" placeholder="Idade" min="1" max="120"><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php if (isset($resultado)){
        echo "Tenista cadastrado com sucesso";
    }
    ?>
</body>
</html>