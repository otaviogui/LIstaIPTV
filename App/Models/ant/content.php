<?php
require_once('../connex/connex.php');

if(isset($_POST['codList']) && isset($_POST['codType']) && isset($_POST['codGroup'])&& isset($_POST['content-title'])&& isset($_POST['url'])&& isset($_POST['logo'])){
   
    $sql="INSERT INTO content(title, cod_type_content, cod_group, cod_list,url,logo) VALUES(?,?,?,?,?,?)";

    $codType= intval($_POST['codType']);
    $codGroup = intval($_POST['codGroup']);
    $codList = intval($_POST['codList']);
    $res = $conn->prepare($sql);
    $res->bindParam(1, $_POST['content-title']);
    $res->bindParam(2, $codType);
    $res->bindParam(3, $codGroup);
    $res->bindParam(4, $codList);
    $res->bindParam(5, $_POST['url']);
    $res->bindParam(6, $_POST['logo']);
    
    $res->execute();
    if($sql==true){
       echo "<script>alert('Dados inserido com sucesso');</script>";
        header("Location: http://localhost/CriarLista/");
        die();
    }else{
        echo "<script>alert('Aconteceu algum erro complete todos os dados');</script>";
    }

}else{
    echo"Errou";
}