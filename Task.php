<?php

class Task
{
    public function getAll($conn) {
        $sql = "SELECT * FROM crudphp";
        return $conn->mysqli->query($sql);
    }
}