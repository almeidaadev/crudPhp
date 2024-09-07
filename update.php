<?php
require_once("ConnectDb.php");

$conn = new Conn("localhost", "root", "", "crud");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["id"];
    $task = $_POST['task'];
    $sql = "UPDATE crudphp SET task='$task' WHERE id=$id";

    $conn->mysqli->query($sql);
    header('Location: index.php');
}

//Debugging

// echo "<pre>";
// print_r($sql);
// echo "</pre>";
// die();
