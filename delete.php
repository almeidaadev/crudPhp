<?php

require_once("ConnectDb.php");
$conn = new Conn('localhost', 'root', '', 'crud');


if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $sql = "DELETE FROM crudphp WHERE id = ('$id')";
    $result = $conn->mysqli->query($sql);

    if (!$result) {
        header("Location: errorPage.php");
    }

    header('Location: index.php');
}

// DEQUI PRA BAIXO PROTEJE INTEJECTION
// VARIAVEL POST ABAIXO ELA PEGA TUDO  
// $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);