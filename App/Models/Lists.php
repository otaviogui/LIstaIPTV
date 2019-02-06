<?php
namespace App\Models;

class Lists
{
    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;

    } 

    public function getAll()
    {
        $sql = "SELECT * FROM listas";
        return $this->conn->query($sql);
    }

    public function save()
    {
        $sql = "INSERT INTO listas(name_list) VALUES(?)";
        $res = $conn->prepare($sql);
        $res->bindParam(1, $_POST['name_list']);
        $res->execute();
        return $res;
    }
}
