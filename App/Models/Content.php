<?php

namespace App\Models;

class Content
{
    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;

    } 

    public function getAll()
    {
        $sql = "SELECT * FROM content";
        return $this->conn->query($sql);
    }
}