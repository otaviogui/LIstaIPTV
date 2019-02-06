<?php
require_once('../connex/connex.php');
$res=$conn->query("SELECT
     content.title,
     content.cod_type_content, 
     content.cod_group,
     content.cod_list,
     content.url,
     content.logo,
     groupo.name,
     listas.name_list
    FROM content
    INNER JOIN groupo ON groupo.cod = content.cod_group
    INNER JOIN listas ON listas.cod = content.cod_list
    ");
while($listas=$res->fetch(PDO::FETCH_ASSOC)){
$arqTemp = fopen($listas['name_list'].'.txt', "a");

$init = "#EXTM3U";
$init .= PHP_EOL; 

$escreve = fwrite($arqTemp, $init);     


        while($dados= $res->fetch(PDO::FETCH_ASSOC)){

        $temp = "#EXTINF:0 group-title='".$dados['name']."',";
        $temp .= PHP_EOL;
        $temp2 = "#EXTSIZE: Big";
        $temp2 .= PHP_EOL;
        $temp3 = "#EXTINF:0 tvg-logo='".$dados['logo']."' group-title='".$dados['name']."', ".$dados['title']."";
        $temp3 .= PHP_EOL;
        $url = $dados['url'];
        $url .= PHP_EOL;

        $escreve = fwrite($arqTemp, $temp);
        $escreve = fwrite($arqTemp, $temp2);
        $escreve = fwrite($arqTemp, $temp3);
        $escreve = fwrite($arqTemp, $url);
        }
}
fclose($arqTemp);


