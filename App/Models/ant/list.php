<?php
require_once('../connex/connex.php');
if(isset($_POST['name_list'])){
    $sql = "INSERT INTO listas(name_list) VALUES(?)";
    $res = $conn->prepare($sql);
    $res->bindParam(1, $_POST['name_list']);
    $res->execute();
    if($sql==true){
        echo "<script>alert('Dados inserido com sucesso');</script>";
        header("Location: http://localhost/CriarLista/");
        die();
die();
    }else{
        echo "<script>alert('Aconteceu algum erro complete todos os dados');</script>";
    }
}else{
    echo "Deu errado";
}