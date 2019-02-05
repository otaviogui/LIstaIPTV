<?php

require_once('../connex/connex.php');
if(isset($_POST['name'])){
    $sql = "INSERT INTO groupo(name) VALUES(?)";

    $res = $conn->prepare($sql);
    $res->bindParam(1, $_POST['name']);
    $res->execute();
    if($sql==true){
        echo "<script>alert('Dados inserido com sucesso');</script>";
        header("Location: http://localhost/CriarLista/");
        die();
    }else{
        echo "<script>alert('Aconteceu algum erro complete todos os dados');</script>";
    }
}else{
    echo "Deu erro ao inserir o grupo";
}