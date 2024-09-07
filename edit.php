<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body>

    <?php
    require_once("ConnectDb.php");

    $conn = new Conn("localhost", "root", "", "crud");
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM crudphp WHERE id=$id";
    $result = $conn->mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo 
        "
            <div class='container'>
                <form action='update.php?id={$row['id']}' method='POST' >
                    <h1>Crud</h1>
                    <input type='text' class='form-control mb-4 w-25' name='task' value='{$row['task']}' >
            
                    <button type='submit' class='btn btn-danger mb-4'>Atualizar</button>
                </form>
            </div>
        ";
    }
    ?>

</body>

</html>