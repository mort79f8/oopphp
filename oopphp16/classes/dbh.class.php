<?php

// dbh - Database handler

class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "oopphp16";

    protected function connect()
    {
        $dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dns, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
