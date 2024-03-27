<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
</head>

<body>
    <h1>Lista de Tarefas</h1>

    <form action="novo.php" method="post">

        <input type="text" name="tarefa" placeholder="Nova tarefa" />
        <input type="submit" value="Enviar" />

    </form>

    <?php
    $sql = "SELECT * FROM tarefas";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        $lista = $sql->fetchAll();
    ?>
        <ul>
            <?php foreach ($lista as $$item) : ?>
                <li><?= $item['titulo']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php
    } ?>


</body>

</html>