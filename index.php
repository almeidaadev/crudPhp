<?php
require_once("ConnectDb.php");
require_once("Task.php");

$conn = new Conn('localhost', 'root', '', 'crud');
$task = new Task();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud</title>
    <style>
        .content {
            display: flex;
            justify-content: space-between;
            width: 300px;
        }

        .content span a:first-child {
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="add.php" method="post" >
            <h1>Crud</h1>
            <input type="text" class="form-control mb-4 w-25" name="task">
            <button type="submit" class="btn btn-danger mb-4">Submit</button>
        </form>

        <?php
            $result = $task->getAll($conn);

            while ($row = $result->fetch_assoc()): 
        ?>

            <div class="content">
                <div class="children-content">
                    <span><?=$row['id']?></span>
                    <span><?=$row['task']?></span>
                </div>
                <span>
                    <a href='delete.php?id=<?=$row['id'] ?>' onclick='return confirm("Tem certeza que deseja excluir?")'>Excluir</a>
                    <a href='edit.php?id=<?=$row['id'] ?>' >Editar</a>
                </span>
            </div>

        <?php
            endwhile;
        ?>
    </div>

</body>

</html>