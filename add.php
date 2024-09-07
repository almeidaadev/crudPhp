<?php
require_once("ConnectDb.php");

$conn = new Conn("localhost", "root", "", "crud");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["task"])):
    $task = $_POST["task"];

    $sql = "INSERT INTO crudphp (task) VALUES ('$task')";
    $result = $conn->mysqli->query($sql);

    if (!$result):
        echo "Deu merda";
    endif;

    header("Location: index.php");
endif;