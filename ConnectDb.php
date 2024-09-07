<?php

class Conn
{
    public $mysqli;

    public function __construct($host, $user, $pass, $dbsa)
    {
        $this->mysqli = new mysqli($host, $user, $pass, $dbsa);

        $this->verifyConn();
    }

    public function verifyConn()
    {
        if ($this->mysqli->connect_error):
            die("Err" . $this->mysqli->connect_error);
        endif;
    }
}